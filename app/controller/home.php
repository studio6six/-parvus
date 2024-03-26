<?php
class Home extends Controller
{
    public function __construct(){
		parent::__construct();
	}

    public function index($request = null)
    {
        $data['title'] = 'Index';
        // load views
		$this->view->rendertemplate('header',$data);
		$this->view->render('home/index',$data);
		$this->view->rendertemplate('footer',$data);
    }


    public function exampleOne($request = null)
    {
        $data['title'] = 'exampleOne';

        $this->view->rendertemplate('header',$data);
		$this->view->render('home/example_one',$data);
		$this->view->rendertemplate('footer',$data);
    }

    public function exampleTwo($request = null)
    {
        $data['title'] = 'exampleTwo';

        $this->view->rendertemplate('header',$data);
		$this->view->render('home/example_two',$data);
		$this->view->rendertemplate('footer',$data);
    }
}