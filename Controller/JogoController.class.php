<?php
class JogoController extends Controller{
    public function __construct($urlParameters = null) {
        parent::__construct($urlParameters);
    }
    
    public function getJogo(){
        $view = new View('campo_batalha', 'jogo');
        echo $view->getPage();
    }
}