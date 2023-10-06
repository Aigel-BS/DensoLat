<?php
class ExamensController extends AppController {

    var $name = 'Examens';

    public $components = array('RequestHandler');

	public function add_pregunta(){
		$this->layout = 'capacitacion';
		if ($this->Session->read('Auth.User.id')==5){
			$this->loadModel('Pregunta');
			if($this->Pregunta->save($this->request->data)){
				return $this->redirect(array('action'=>'add_pregunta','controller'=>'examens'));
			}
		}else{
			return $this->redirect(array('action'=>'mis_cursos','controller'=>'cursos'));
		}

	}

	public function contestar($id_examen =  null){
		$this->loadModel('Respuesta');
		$this->Examen->Behaviors->load('Containable');
		$examen = $this->Examen->find(
			'first',
			array(
				'conditions'=>array(
					'Examen.id'=>$id_examen
				)
			)
		);
		if (!$this->Cookie->read('intento')) {
			$this->Cookie->write('intento',uniqid());
		}

		$respuestas_q = $this->Respuesta->find(
			'count',
			array(
				'conditions'=>array(
					'Respuesta.examen_id'=>$id_examen,
					'Respuesta.user_id'=>$this->Session->read('Auth.User.id'),
					'Respuesta.intento'=>$this->Cookie->read('intento')
				)
			)
		);
		if ($respuestas_q <= $examen['Examen']['preguntas']){ // Aún puede continuar contestando
			$this->redirect(array('controller'=>'examens','action'=>'showPregunta',$id_examen));
		}else{//Ya no puede contestar otra pregunta
			$this->redirect(array('controller'=>'examens','action'=>'resumen',$id_examen,$this->Cookie->read('intento')));
		}
	}

	public function showPregunta($id_examen = null){
		$this->layout = 'capacitacion';
		$this->loadModel('Pregunta');
		$pregunta = $this->Pregunta->find(
			'first',
			array(
				'conditions'=>array(
					'Pregunta.id NOT IN (
						SELECT pregunta_id
						FROM respuestas
						WHERE
							user_id = '.$this->Session->read('Auth.User.id').' AND
							examen_id = '.$id_examen.' AND
							intento = "'.$this->Cookie->read('intento').'"
					)',
					'Pregunta.examen_id'=>$id_examen
				),
				'order'=>'RAND()'
			)
		);
		$this->set('pregunta',$pregunta);
		if (empty($pregunta)){
			$this->Session->setFlash('Ya no hay más preguntas para este examen', 'default', array(), 'm_error');
			$this->redirect(array('controller'=>'examens','action'=>'resumen',$id_examen,$this->Cookie->read('intento')));
		}
	}

	public function resumen($id_examen = null,$intento = null){
		$this->Cookie->destroy();
		$this->layout = 'capacitacion';
		$this->loadModel('Respuesta');
		$respuestas = $this->Respuesta->find(
			'all',
			array(
				'conditions'=>array(
					'Respuesta.intento'=>$intento,
					'Respuesta.user_id'=>$this->Session->read('Auth.User.id')
				)
			)
		);
		$this->set('respuestas',$respuestas);
		$this->set('intento',$intento);
		$this->set('examen',$this->Examen->read(null,$id_examen));

	}

	public function addRespuesta(){
		if ($this->request->is('post')){

			$this->loadModel('Pregunta');
			$this->Pregunta->Behaviors->load('Containable');
			$pregunta = $this->Pregunta->find(
				'first',
				array(
					'conditions'=>array(
						'Pregunta.id'=>$this->request->data['Examen']['pregunta_id']
					),
					'contain'=>false,
					'fields'=>array(
						'id','puntos','respuesta','opciones'
					)
				)
			);

			$puntos = ($pregunta['Pregunta']['respuesta']==$this->request->data['Examen']['respuesta'] ? $pregunta['Pregunta']['puntos'] : 0);
			$opciones = explode("|",$pregunta['Pregunta']['opciones']);

			$respuesta = array(
				'user_id'=>$this->Session->read('Auth.User.id'),
				'pregunta_id'=>$this->request->data['Examen']['pregunta_id'],
				'curso_id'=>$this->request->data['Examen']['curso_id'],
				'respuesta'=>$opciones[$this->request->data['Examen']['respuesta']],
				'puntos'=>$puntos,
				'intento'=>$this->Cookie->read('intento'),
				'examen_id'=>$this->request->data['Examen']['examen_id'],
				'fecha'=>date("Y-m-d")
			);

			$this->loadModel('Respuesta');
			$this->Respuesta->save($respuesta);
			$this->redirect(array('controller'=>'examens','action'=>'contestar',$this->request->data['Examen']['examen_id']));
		}
	}

	public function intentos($id_examen = null){
		$this->layout = 'capacitacion';
		$this->loadModel('Respuesta');
		$intentos = $this->Respuesta->find(
			'all',
			array(
				'fields'=>array(
					'DISTINCT(Respuesta.intento)'
				),
				'conditions'=>array(
					'Respuesta.examen_id'=>$id_examen,
					'Respuesta.user_id'=>$this->Session->read('Auth.User.id')
				)
			)
		);
		$this->set('intentos',$intentos);
	}

}
?>
