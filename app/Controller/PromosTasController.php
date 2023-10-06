<?php
class PromosTasController extends AppController {

    var $name = 'PromosTas';
    
    public function beforeFilter()
    {
         //this can be anything array, object, string, etc .....
         //$this->db = "API";
         $this->terminal_id = "5026714";
         $this->clerk_id = "a968ig0";
         $this->Auth->allow(array('showLanding','thankyou'));
    }
        
        function showLanding(){
            setlocale(LC_TIME, "spanish");
            $this->layout = 'landing';
            if ($this->request->is('post')){
                
                /*if (!$this->validarPromocion($this->request->data['PromosTa']['celular'], $this->request->data['PromosTa']['rfc_cliente'])){
                    $this->request->data['PromosTa']['status']=4;
                    $this->sendSMS($this->request->data['PromosTa']['celular'], 0, 7);
                }else{
                    $this->request->data['PromosTa']['status']=1;
                }*/
                $this->request->data['PromosTa']['status']=1;
                $id = uniqid();
                $factura = $this->request->data['PromosTa']['factura'];
                $qr = $this->request->data['PromosTa']['cintillo'];
                $this->request->data['PromosTa']['id'] = $id;
                $this->request->data['PromosTa']['factura']="";
                $this->request->data['PromosTa']['cintillo']="";
                $this->request->data['PromosTa']['fecha_recepcion'] = date("Y-m-d H:i:s");
                $this->request->data['PromosTa']['fecha_compra'] = date("Y-m-d", strtotime($this->request->data['PromosTa']['fecha_compra']));
                if($this->PromosTa->save($this->request->data['PromosTa'])){
                    mkdir(getcwd()."/files/promotas/".$id, 0777);
                    if ($factura['name']!="") {
                        $filename = getcwd()."/files/promotas/".$id."/".$factura['name'];
                        move_uploaded_file($factura['tmp_name'],$filename);
                        $nombre = $factura['name'];
                        $ruta = "/files/promotas/".$id."/".$factura['name'];
                        $this->request->data['PromosTa']['factura']=$ruta;
                    }
                    if ($qr['name']!="") {
                        $filename = getcwd()."/files/promotas/".$id."/".$qr['name'];
                        move_uploaded_file($qr['tmp_name'],$filename);
                        $nombre = $qr['name'];
                        $ruta = "/files/promotas/".$id."/".$qr['name'];
                        $this->request->data['PromosTa']['cintillo']=$ruta;
                    }
                    $this->request->data['PromosTa']['id'] = $id;
                    $this->PromosTa->save($this->request->data['PromosTa']);
                    $this->redirect(array('controller'=>'promosTas','action'=>'thankyou',$id));
                }
            }
        }
        
        function validarPromocion($numero_celular = null, $rfc_cliente = null){
            $aplicaciones = $this->PromosTa->find('count',array('conditions'=>array(
                'OR'=>array(
                    'PromosTa.rfc_cliente'=>$rfc_cliente,
                    'PromosTa.celular'=>$numero_celular,
                    ),
                'AND'=>array(
                    'PromosTa.status IN (2,6)'
                )
            )));
            //echo var_dump($aplicaciones);
            if ($aplicaciones >= 2){
                return false; // Ya aplicó más de 1 vez
            }else{
                return true; // Puede aplicar a la promoción
            }
        }
        
        function thankyou($folio = null){
            $this->layout = 'landing';
            $this->set('folio_participacion',$folio);
        }
        
        function index(){
           $this->layout = 'sistema';
            $this->set('promos',$this->PromosTa->find('all'));
        }
        
        function procesar_promocion() {
            $promo = array();
            $promo['id'] = $this->request->data['PromosTa']['id'];
            $monto = $this->request->data['PromosTa']['monto'];
            $recarga = 0;
            if ($monto >= 250 && $monto <=399){
                $recarga = 30;
            }
            if ($monto >= 400 && $monto <=699){
                $recarga = 50;
            }
            if ($monto >= 700){
                $recarga = 100;
            }
            $promo['credito_redimido'] = $recarga;
            $promo['fecha_redimir'] = date('Y-m-d H:i:s');
            
            
            $aplicacion = $this->PromosTa->read(null,$this->request->data['PromosTa']['id']);
            $empresa = $aplicacion['PromosTa']['empresa_celular'];
            $numero = $aplicacion['PromosTa']['celular'];
            //echo $this->recarga($numero,$empresa,$recarga);
            $this->loadModel('CatalogoRecarga');
            $producto = $this->CatalogoRecarga->findFirstByEmpresaCelularAndMonto($empresa,$recarga);
            $exitoso = $this->recarga($numero,$empresa,$recarga);
            $mensaje_confirmacion = 
                "<br>Fecha y Hora: ".$exitoso['TransactionDateTime']."<br>".
                "Producto ".$producto['CatalogoRecarga']['product_name']."<br>".
                "Teléfono ".$exitoso['Pin']."<br>".
                "Monto ".$recarga."<br>".
                "Autorización ".$exitoso['TransactionId']."<br>".
                "Información Importante ".$exitoso['ResponseMessage']
                ;
            $this->set('exitoso',$exitoso);
            if ($exitoso['ResponseCode']=='00'){
                //Si hace la recarga
                $promo['status'] = 6;
                if ($this->sendSMS($numero, $recarga, 1)){
                    //Envía SMS a cliente
                    $promo['status'] = 2;
                    $this->Session->setFlash("La promoción ha sido procesada exitosamente ".$mensaje_confirmacion,'default',array('class'=>'mensaje_exito'));
                }else{
                    $this->Session->setFlash("La promoción ha sido aplicada exitosamente, pero el SMS no pudo ser enviado ".$mensaje_confirmacion,'default',array('class'=>'mensaje_aviso'));
                }
            }else{
                $this->Session->setFlash("La promoción no pudo ser aplicada por error en comunicación. Inténtalo de nuevo más tarde ".$mensaje_confirmacion,'default',array('class'=>'mensaje_error'));
                $promo['status'] = 5;
            }
            if ($this->PromosTa->save($promo)){
                $this->redirect(array('controller'=>'promosTas','action'=>'index'));
            }else{
                echo "No Salva en BD";
            }
	}
        
        function rechazar_promocion() {
            $aplicacion = $this->PromosTa->read(null,$this->request->data['PromosTa']['id_r']);
            $numero = $aplicacion['PromosTa']['celular'];
            
            $promo = array();
            $promo['id'] = $this->request->data['PromosTa']['id_r'];
            $promo['nota_status'] = $this->request->data['PromosTa']['nota'];
            $promo['credito_redimido'] = 0;
            $promo['fecha_redimir'] = date('Y-m-d H:i:s');
            $promo['status'] = 3;
            if ($this->PromosTa->save($promo)){
                $this->sendSMS($numero, 0, $this->request->data['PromosTa']['nota']);
                $this->Session->setFlash("La promoción ha sido rechazada exitosamente",'default',array('class'=>'mensaje_exito'));
                $this->redirect(array('controller'=>'promosTas','action'=>'index'));
            }
	}
        
        function getServicios(){
            try{
                $servicios = new SoapClient('http://densoautopartes.com.mx/webServices.wsdl');
                $response = $servicios->executeCommand('ProductFlowInfoService',"{version:1,terminalId:5026714,invoiceNo:000110,language:1,clerkId:a968ig0}");
                //convert xml string into an object
                $xml = simplexml_load_string($response);

                //convert into json
                $json  = json_encode($xml);

                //convert into associative array
                $xmlArr = json_decode($json, true);
                
                //echo "<pre>".var_dump($xmlArr['ResponseMessage']['Products'])."</pre>";
                $this->PromosTa->query("TRUNCATE catalogo_recargas");
                foreach($xmlArr['ResponseMessage']['Products']['Product'] as $producto):
                    if ($producto['ProductCategory']=='RECARGAS'){
                        $compania = $producto['CarrierName'];
                        $id_emida = $producto['ProductId'];
                        $monto = $producto ['Amount'];
                        $product_name = $producto ['ProductName'];
                        $this->PromosTa->query("INSERT INTO catalogo_recargas VALUES(0,'$id_emida','$compania','$monto','$product_name')");
                    }
                endforeach;
                
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
            
        }
        
        function contar(){
            $this->loadModel('InvoicesEmidamex');
            $facturas = $this->InvoicesEmidamex->find('count');
            echo var_dump($facturas);
        }

    //     function recarga_debug($numero_celular = null, $empresa_celular = null, $saldo = null){
    //         $this->loadModel('CatalogoRecarga');
    //         $this->loadModel('InvoicesEmidamex');
    //         $facturas = $this->InvoicesEmidamex->find('count');
    //         $producto = $this->CatalogoRecarga->findFirstByEmpresaCelularAndMonto($empresa_celular,$saldo);
    //         $respuesta_imprimir;
    //         $factura = '1234585';//$facturas+1;
    //         $invoice['timestamp']=date('Y-m-d H:i:s');
    //         $invoice['id']=$factura;
    //         $invoice['terminal_id'] = $this->terminal_id;
    //         $invoice['product_id'] = $producto['CatalogoRecarga']['id_emidamex'];
    //         $invoice['amount_id'] = $saldo;
    //         $invoice['account_id'] = $numero_celular;
    //         $this->InvoicesEmidamex->save($invoice);
    //         ini_set('default_socket_timeout', 40);
    //         $recarga = new SoapClient('https://densoautopartes.com.mx/webServices.wsdl',array('connection_timeout'=>40));
    //         try{
    //             echo "Start PinDistSaleInvoke".date('H:i:s')."<br>";   
    //             $response = $recarga->PinDistSale(
    //                     '1', // Version
    //                     $this->terminal, //Terminal ID
    //                     $this->clerk_id, //Clerk ID
    //                     $producto['CatalogoRecarga']['id_emidamex'], // ID Producto
    //                     $numero_celular, // Número Celular
    //                     $producto['CatalogoRecarga']['monto'], // Monto
    //                     $factura,//Factura
    //                     '1' // Idioma
    //                     );
    //             echo "End PinDistSaleInvoke".date('H:i:s')."<br>";       
    //                 $xml = simplexml_load_string($response);
    //                 $json  = json_encode($xml);
    //                 $xmlArr = json_decode($json, true);
    //                 $respuesta = $xmlArr['ResponseCode'];
                

    //             if ($respuesta == '00'){ // Hace la transacción correcta, no es necesario LookUp
    //                 echo "Primera respuesta de recarga es exitosa: ".$respuesta;
    //                 $invoice['id'] = $factura;
    //                 $invoice['responseTransaction_Id'] = $xmlArr['TransactionId'];
    //                 $invoice['response_code'] = $respuesta;
    //                 $invoice['timestamp'] = $xmlArr['TransactionDateTime'];
    //                 $this->InvoicesEmidamex->save($invoice);
    //                 $mensaje_confirmacion = 
    //                     "<br>Fecha y Hora: ".$xmlArr['TransactionDateTime']."<br>".
    //                     "Producto ".$producto['CatalogoRecarga']['product_name']."<br>".
    //                     "Teléfono ".$xmlArr['Pin']."<br>".
    //                     "Monto ".$saldo."<br>".
    //                     "Autorización ".$xmlArr['TransactionId']."<br>".
    //                     "Información Importante ".$xmlArr['ResponseMessage']
    //                     ;
    //                 echo $mensaje_confirmacion;
    //                 //return $xmlArr;
                     
    //             }else{ // Da un error 32, y tenemos que validar si la operación se hizo correctamente (LookUp dentro del tiempo de Timeout).
    //                 echo "Primera respuesta de recarga NO es exitosa: ".$respuesta;
    //                 $respuestaF = $this->validarFactura($factura);
    //                 echo "Start Primer Lookup: ".date('H:i:s');
    //                 if ($respuestaF['ResponseCode'] == '32'){
    //                     sleep(10);
    //                     $respuestaF = $this->validarFactura($factura);
    //                     echo "Start Segundo Lookup: ".date('H:i:s');
    //                     if ($respuestaF['ResponseCode'] == '32'){
    //                         sleep(10);
    //                         $respuestaF = $this->validarFactura($factura);
    //                         echo "Start Tercer Lookup: ".date('H:i:s');
    //                         if ($respuestaF['ResponseCode'] == '32'){
    //                             sleep(10);
    //                             $respuestaF = $this->validarFactura($factura);
    //                             echo "Start Cuarto Lookup: ".date('H:i:s');
    //                             if ($respuestaF['ResponseCode'] == '32'){
    //                                 echo "Fin de todos los Lookup".date('H:i:s');
    //                             }
    //                         }
    //                     }
    //                 }
    //                 $mensaje_confirmacion = 
    //                     "<br>Fecha y Hora: ".$respuestaF['TransactionDateTime']."<br>".
    //                     "Producto ".$producto['CatalogoRecarga']['product_name']."<br>".
    //                     "Teléfono ".$respuestaF['PIN']."<br>".
    //                     "Monto ".$saldo."<br>".
    //                     "Autorización ".$respuestaF['ControlNo']."<br>".
    //                     "Información Importante ".$respuestaF['ResponseMessage']
    //                     ;
    //                 echo $mensaje_confirmacion;
    //             }
            
    //         } catch (Exception $ex) { // Excede tiempo de Timeout, vamos a validar con 4 LookUps.
    //             echo "Timeout Excedido";
    //             echo "Primer Lookup: ".date('H:i:s');
    //             $respuestaF = $this->validarFactura($factura);
    //                 echo "Start Primer Lookup: ".date('H:i:s');
    //                 if ($respuestaF['ResponseCode'] == '32'){
    //                     sleep(10);
    //                     $respuestaF = $this->validarFactura($factura);
    //                     echo "Start Segundo Lookup: ".date('H:i:s');
    //                     if ($respuestaF['ResponseCode'] == '32'){
    //                         sleep(10);
    //                         $respuestaF = $this->validarFactura($factura);
    //                         echo "Start Tercer Lookup: ".date('H:i:s');
    //                         if ($respuestaF['ResponseCode'] == '32'){
    //                             sleep(10);
    //                             $respuestaF = $this->validarFactura($factura);
    //                             echo "Start Cuarto Lookup: ".date('H:i:s');
    //                             if ($respuestaF['ResponseCode'] == '32'){
    //                                 echo "Fin de todos los Lookup".date('H:i:s');
    //                             }
    //                         }
    //                     }
    //                 }
    //                 $mensaje_confirmacion = 
    //                     "<br>Fecha y Hora: ".$respuestaF['TransactionDateTime']."<br>".
    //                     "Producto ".$producto['CatalogoRecarga']['product_name']."<br>".
    //                     "Teléfono ".$respuestaF['PIN']."<br>".
    //                     "Monto ".$saldo."<br>".
    //                     "Autorización ".$respuestaF['ControlNo']."<br>".
    //                     "Información Importante ".$respuestaF['ResponseMessage']
    //                     ;
    //                 echo $mensaje_confirmacion;
    //         }
                
    // }
        
        function recarga($numero_celular = null, $empresa_celular = null, $saldo = null){
                $this->loadModel('CatalogoRecarga');
                $this->loadModel('InvoicesEmidamex');
                $facturas = $this->InvoicesEmidamex->find('count');
                $producto = $this->CatalogoRecarga->findFirstByEmpresaCelularAndMonto($empresa_celular,$saldo);
                $respuesta_imprimir;
                $factura = $facturas+1;
                $invoice['timestamp']=date('Y-m-d H:i:s');
                $invoice['id']=$factura;
                $invoice['terminal_id'] = $this->terminal_id;
                $invoice['product_id'] = $producto['CatalogoRecarga']['id_emidamex'];
                $invoice['account_id'] = $numero_celular;
                $invoice['amount_id'] = $saldo;
                ini_set('default_socket_timeout', 40);
                $this->InvoicesEmidamex->save($invoice);
               $recarga = new SoapClient('https://densoautopartes.com.mx/webServices.wsdl',array('connection_timeout'=>40));
               try{
                //echo "Start PinDistSaleInvoke".date('H:i:s')."<br>";   
                $response = $recarga->PinDistSale(
                        '1', // Version
                        $this->terminal_id, //Terminal ID
                        $this->clerk_id, //Clerk ID
                        $producto['CatalogoRecarga']['id_emidamex'], // ID Producto
                        $numero_celular, // Número Celular
                        $producto['CatalogoRecarga']['monto'], // Monto
                        $factura,//Factura
                        '1' // Idioma
                        );
                //echo "End PinDistSaleInvoke".date('H:i:s')."<br>";       
                    $xml = simplexml_load_string($response);
                    $json  = json_encode($xml);
                    $xmlArr = json_decode($json, true);
                    $respuesta = $xmlArr['ResponseCode'];
                    

                    if ($respuesta == '00'){ // Hace la transacción correcta, no es necesario LookUp
                        //echo "Primera respuesta de recarga es exitosa: ".$respuesta;
                        $invoice['id'] = $factura;
                        $invoice['responseTransaction_Id'] = $xmlArr['TransactionId'];
                        $invoice['response_code'] = $respuesta;
                        $invoice['timestamp'] = $xmlArr['TransactionDateTime'];
                        $this->InvoicesEmidamex->save($invoice);
                        return $xmlArr;
                         
                    }else{ // Da un error 32, y tenemos que validar si la operación se hizo correctamente (LookUp dentro del tiempo de Timeout).
                        //echo "Primera respuesta de recarga NO es exitosa: ".$respuesta;
                        $respuestaF = $this->validarFactura($factura);
                        //echo "Start Primer Lookup: ".date('H:i:s');
                        if ($respuestaF['ResponseCode'] == '32'){
                            sleep(10);
                            $respuestaF = $this->validarFactura($factura);
                            //echo "Start Segundo Lookup: ".date('H:i:s');
                            if ($respuestaF['ResponseCode'] == '32'){
                                sleep(10);
                                $respuestaF = $this->validarFactura($factura);
                                //echo "Start Tercer Lookup: ".date('H:i:s');
                                if ($respuestaF['ResponseCode'] == '32'){
                                    sleep(10);
                                    $respuestaF = $this->validarFactura($factura);
                                    //echo "Start Cuarto Lookup: ".date('H:i:s');
                                    if ($respuestaF['ResponseCode'] == '32'){
                                        return $respuestaF;
                                    }
                                }
                            }
                        }
                        return $respuestaF;
                    }
                
                } catch (Exception $ex) { // Excede tiempo de Timeout, vamos a validar con 4 LookUps.
                    //echo "Timeout Excedido";
                    //echo "Primer Lookup: ".date('H:i:s');
                    $respuestaF = $this->validarFactura($factura);
                        //echo "Start Primer Lookup: ".date('H:i:s');
                        if ($respuestaF['ResponseCode'] == '32'){
                            sleep(10);
                            $respuestaF = $this->validarFactura($factura);
                            //echo "Start Segundo Lookup: ".date('H:i:s');
                            if ($respuestaF['ResponseCode'] == '32'){
                                sleep(10);
                                $respuestaF = $this->validarFactura($factura);
                                //echo "Start Tercer Lookup: ".date('H:i:s');
                                if ($respuestaF['ResponseCode'] == '32'){
                                    sleep(10);
                                    $respuestaF = $this->validarFactura($factura);
                                    //echo "Start Cuarto Lookup: ".date('H:i:s');
                                    if ($respuestaF['ResponseCode'] == '32'){
                                        return $respuestaF;
                                    }
                                }
                            }
                        }
                    return $respuestaF;
                }
                    
        }
        
        function validarFactura($factura = null){
            try{
                $validar = new SoapClient('https://densoautopartes.com.mx/webServices.wsdl',array('connection_timeout'=>10));
                $response_validar = $validar->LookUpTransactionByInvocieNo(
                        '1', // Version
                        $this->terminal_id, //Terminal ID
                        $this->clerk_id, //Clerk ID
                        $factura
                        );
                $xml = simplexml_load_string($response_validar);

                //convert into json
                $json  = json_encode($xml);

                //convert into associative array
                $xmlArr = json_decode($json, true);
                
                $this->loadModel('InvoicesEmidamex');
                $invoice['id'] = $factura;
                $invoice['responseTransaction_Id'] = $xmlArr['TransactionId'];
                $invoice['response_code'] = $xmlArr['ResponseCode'];
                $invoice['timestamp'] = $xmlArr['TransactionDateTime'];
                $this->InvoicesEmidamex->save($invoice);

                //echo var_dump($xmlArr);
                return $xmlArr;
            } catch (Exception $ex) {

            }
        }
        
        function sendSMS($numero_celular = null, $recarga = null, $exitoso = null){
            
            $params_auth = array(
                "apikey" => 'e15c69c54168e8a1b4b3bc5482b6482f8cbf45d9'
              );
              curl_setopt_array($ch = curl_init(), array(
                CURLOPT_URL => "https://api.smsmasivos.com.mx/auth",
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => http_build_query($params_auth),
                CURLOPT_RETURNTRANSFER => 1
              ));
              $auth = curl_exec($ch);
              curl_close($ch);
                
              $auth_response = json_decode($auth,true);
              $token = $auth_response['token'];
              //echo print_r($token);
              
              switch ($exitoso):
                  case(1):
                    $mensaje = "Gracias por comprar Bujias Denso! Te hemos recargado ".number_format($recarga,2)." pesos de saldo a tu celular. #DensoAutopartes #RecargateConDenso";
                  break;
                  case(2):
                    $mensaje = "Tienda no participante. Para mas informacion, consulta tiendas participantes. #DensoAutopartes #RecargateConDenso";  
                  break;
                  case (3):
                    $mensaje = "Tu factura no es valida. Para mas informacion, consulta terminos y condiciones de la promocion.. #DensoAutopartes #RecargateConDenso";  
                  break;
                  case (4):
                    $mensaje = "Tu factura no es legible. Para mas informacion, consulta terminos y condiciones de la promocion.. #DensoAutopartes #RecargateConDenso";  
                  break;
                  case (5):
                    $mensaje = "No hay productos Denso en la factura. Para mas informacion, consulta terminos y condiciones de la promocion.. #DensoAutopartes #RecargateConDenso";  
                  break;
                  case (6):
                    $mensaje = "El monto minimo de compra de productos Denso es de $250.00 pesos. Para mas informacion, consulta terminos y condiciones de la promocion.. #DensoAutopartes #RecargateConDenso";  
                  break;
                  case (7):
                    $mensaje = "Has llegado al limite de aplicaciones por telefono y/o RFC de la factura. Para mas informacion, consulta terminos y condiciones de la promocion. #DensoAutopartes #RecargateConDenso";  
                  break;
                  case (8):
                    $mensaje = "No aplican a la promocion facturas de venta mostrador. Para mas informacion, consulta terminos y condiciones de la promocion. #DensoAutopartes #RecargateConDenso";  
                  break;
                  case (9):
                    $mensaje = "Factura de tienda no Participante. Para mas informacion, consulta terminos y condiciones de la promocion. #DensoAutopartes #RecargateConDenso";  
                  break;
              endswitch;
              
            
            $params_envio = array(
                "message" => $mensaje,
                "numbers" => $numero_celular,
                "country_code" => 52,
                //"sandbox" => 1,
              );
              $headers = array(
                "token:$token"
              );
              curl_setopt_array($ch = curl_init(), array(
                CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HEADER => 0,
                CURLOPT_HTTPHEADER => $headers,
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => http_build_query($params_envio),
                CURLOPT_RETURNTRANSFER => 1
              ));
              $response_envio = curl_exec($ch);
              curl_close($ch);
              
              $envio_response = json_decode($response_envio,true);
              
              if (isset($envio_response['success'])){
                  return true;
              }else{
                  return false;
              }
              
        }
            

}
?>