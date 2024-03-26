<?php
class Home extends Controller
{
    public function __construct(){
		parent::__construct();
	}

    public function index($request = null)
    {
        $data['title'] = 'Welcome';
        // load views
		$this->view->rendertemplate('header',$data);
		//$this->view->render('home/index',$data);
		//$this->view->rendertemplate('footer',$data);
    }

    /*public function index($request = null)
    {
        $data['title'] = 'Welcome';
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }*/



    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function exampleOne()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/example_one.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: exampletwo
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function exampleTwo()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/example_two.php';
        require APP . 'view/_templates/footer.php';
    }
}