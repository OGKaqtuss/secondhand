<?php

class Home extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }
    
    public function indexAction() {
        $db = DB::getInstance();
        $data = new stdClass();
        $this->view->render('home/index', $data);
    }
    
}