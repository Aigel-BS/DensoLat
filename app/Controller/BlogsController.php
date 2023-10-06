<?php
class BlogsController extends AppController {

    var $name = 'Blogs';

    public function beforeFilter()
    {
        parent::beforeFilter();
         $this->Auth->allow(array('index','view'));
    }

    public function index($region = null){
		$this->set(
			'blogs',
			$this->Blog->find(
				'all',
				array(
					'order'=>array(
						'Blog.fecha_creacion DESC'
					)
				)
			)
		);

		$this->set('region',$region);
	}

	public function view ($url=null){
		$this->set(
			'blog',
			$this->Blog->find(
				'first',
				array(
					'conditions'=>array(
						'Blog.url_amigable'=>$url
					)
				)
			)
		);
	}

}
?>
