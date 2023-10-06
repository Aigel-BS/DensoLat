<?php
class CursosController extends AppController {

    var $name = 'Cursos';

    public $components = array('RequestHandler');

	public function mis_cursos(){
		$this->layout = 'capacitacion';
		$this->set('cursos',$this->Curso->find(
			'all',
			array(
				'conditions'=>array(
					'Curso.id IN (SELECT curso_id FROM users_cursos WHERE user_id = '.$this->Session->read('Auth.User.id').')'
				)
			)
		));

		$this->loadModel('Respuesta');
		$respuestas = $this->Respuesta->find(
			'all',
			array(
				'conditions'=>array(
					'Respuesta.user_id'
				),
				'fields'=>array(
					'DISTINCT(Respuesta.examen_id)','curso_id'
				),
				'group'=>array(
					'Respuesta.examen_id',
					'Respuesta.curso_id'
				)
			)
		);
		$avance = array();
		foreach($respuestas as $respuesta):
			if (!isset($avance[$respuesta['Respuesta']['curso_id']])){
				$avance[$respuesta['Respuesta']['curso_id']] = 1;
			}else{
				$avance[$respuesta['Respuesta']['curso_id']] =  $avance[$respuesta['Respuesta']['curso_id']] + 1;
			}

			endforeach;
		$this->set('avance',$avance);

		$avances_array = array();
		$avances = $this->Curso->query("SELECT curso_id,COUNT(DISTINCT(examen_id)) as avance FROM respuestas WHERE user_id = ".$this->Session->read('Auth.User.id'). " GROUP BY curso_id");
		foreach ($avances as $avance){
			$avances_array[$avance['respuestas']['curso_id']] = $avance[0]['avance'];
		}
		$this->set('avance',$avances_array);

	}

	public function view($id=null){
		$this->layout = 'capacitacion';
		$this->set('curso',$this->Curso->find(
			'first',
			array(
				'conditions'=>array(
					'Curso.id'=>$id
				),
				'recursive'=>2
			)
		));

		$this->loadModel('Respuesta');
		$this->Respuesta->Behaviors->load('Containable');

		$intentos_array = array();

		$intentos = $this->Respuesta->find(
			'all',
			array(
				'fields'=>array(
					'examen_id','COUNT(DISTINCT(intento)) as intentos'
				),
				'conditions'=>array(
					'Respuesta.user_id'=>$this->Session->read('Auth.User.id'),
					'Respuesta.curso_id'=>$id
				),
				'contain'=>false,
				'group'=>'examen_id'
			)
		);

		foreach($intentos as $intento){
			$intentos_array[$intento['Respuesta']['examen_id']]=$intento[0]['intentos'];
		}

		$this->set(
			'intentos',$intentos_array

		);

		$this->set('calificaciones',$this->calcularPorTema($id,$this->Session->read('Auth.User.id')));
	}

	function calcularPorTema($curso_id = null,$usuario = null){
		$this->Respuesta->Behaviors->load('Containable');
		$calificaciones_raw = $this->Respuesta->find(
			'all',
			array(
				'conditions'=>array(
					'Respuesta.user_id'=>$usuario,
					'Respuesta.curso_id'=>$curso_id
				),
				'fields'=>array(
					'Respuesta.curso_id','Respuesta.intento',"SUM(`Respuesta`.`puntos`) as calificacion",'Respuesta.examen_id'
				),
				'group'=>array(
					'Respuesta.intento',
					'Respuesta.examen_id'
				),
				'contain'=>array(
					'Curso'=>array(
						'fields'=>array(
							'id','total_puntos'
						)
					)
				)
			)
		);

		$temas_array = array();
		foreach ($calificaciones_raw as $calificacion){
			if (!isset($temas_array[$calificacion['Respuesta']['examen_id']])){
				$temas_array[$calificacion['Respuesta']['examen_id']] = $calificacion[0]['calificacion'];
			}else{
				if ($temas_array[$calificacion['Respuesta']['examen_id']] < $calificacion[0]['calificacion']){
					$temas_array[$calificacion['Respuesta']['examen_id']] = $calificacion[0]['calificacion'];
				}
			}
		}

		return $temas_array;
	}

}
?>
