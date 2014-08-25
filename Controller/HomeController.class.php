<?php

class HomeController extends Controller {

    public function getNotFound() {
        $view = new View('pagina_nao_encontrada');
        echo $view->getPage();
    }

    public function getTesteF($urlParameters) {
        $view = new View('teste_f');
        $urlKeys = array('nome', 'n');

        $parameters = array('p1' => 'a', 'p2' => 'b');
        $params = $this->changeToArray(str_replace('/', ',', $urlParameters), $urlKeys, $parameters);
        echo $view->getPage($params);
    }

}