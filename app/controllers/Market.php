<?php

class Market extends Controller {

    protected $action;

    public function __construct($controller, $action){

        parent::__construct($controller, $action);
        $this->action = $action;

    }

    public function indexAction() {

        $this->view->setVariable("action", $this->action);

        $this->view->render("market/index");
    }

}