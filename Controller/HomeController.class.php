<?php

class HomeController extends Controller {

    public function __construct($urlParameters = null) {
        parent::__construct($urlParameters);
    }

    public function getNotFound() {
        $view = new View('pagina_nao_encontrada');
        echo $view->getPage();
    }

    public function getTesteF() {
        $view = new View('teste_f');
        $this->urlKeys = array('nome', 'n');

        $parameters = array('p1' => 'a', 'p2' => 'b');
        $params = $this->changeToArray($parameters);
        echo $view->getPage($params);
    }

    public function getHome() {
        $view = new View('home');
        $parameters = array('p1' => 'a', 'p2' => 'b');
        $params = $this->changeToArray($parameters);
        echo $view->getPage($params);
    }

}