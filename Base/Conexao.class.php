<?php

require_once BD . 'PdoConfig.class.php';

class Conexao {

    private $con;

    public function open() {
        try {
            $this->con = new PdoConfig();
        } catch (Exception $e) {
            echo 'Erro de conexão: ' . $e->getMessage();
        }
        $x = $this->con->query("SELECT * FROM tb_teste");
        var_dump($x->fetchAll());
    }

    public function close() {
        $this->con = null;
    }

}
