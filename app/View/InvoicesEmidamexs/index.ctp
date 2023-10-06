
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

<script>
    $(document).ready( function () {
    $('#example').DataTable(
            {
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv',
                ]
                
            }
            );
} );
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<style>
    .header {
        background-color: red;
        color: white;
        /* line-height: 2em; */
        padding: 1em;
        text-transform: uppercase;
    }
    .body{
        font-size: 10px;
    }
    .mensaje_exito {
        background-color: green;
        color: white;
    }
    .mensaje_error {
        background-color: red;
        color: white;
    }
    .mensaje_aviso {
        background-color: orange;
        color: white;
    }
</style>
<div class="row" style="padding:1%" >
    <div class="col-md-12">
        <h4>LISTA DE FACTURAS EMIDAMEX</h4>
        <?php echo $this->Session->flash(); ?>
        <table id="example" class="display" style="width:100%;">
            <thead>
                <tr>
                    <th>Date_Time</th>
                    <th>Terminal_Id</th>
                    <th>ResponseTransaction_Id</th>
                    <th>Invoice_Id</th>
                    <th>Product_Id</th>
                    <th>Amount_Id</th>
                    <th>Account ID</th>
                    <th>ResponseCode</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($facturas as $factura):?> 
                <tr>
                    <td><?= $factura['InvoicesEmidamex']['timestamp']?></td>
                    <td><?= $factura['InvoicesEmidamex']['terminal_id']?></td>
                    <td><?= $factura['InvoicesEmidamex']['responseTransaction_Id']?></td>
                    <td><?= $factura['InvoicesEmidamex']['id']?></td>
                    <td><?= $factura['InvoicesEmidamex']['product_id']?></td>
                    <td><?= $factura['InvoicesEmidamex']['amount_id']?></td>
                    <td><?= $factura['InvoicesEmidamex']['account_id']?></td>
                    <td><?= $factura['InvoicesEmidamex']['response_code']?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
