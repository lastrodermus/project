<?php
require_once BD . 'Conexao.class.php';
class Model {
    protected function conectar(){
        $c = new Conexao();
        $c->open();
    }
}
