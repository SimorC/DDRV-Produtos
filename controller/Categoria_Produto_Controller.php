<?php

require './Conecta.php';

class Categoria_Produto_Controller {

    function listarCategoria() {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
            $query = mysql_query("select * from categoria_produto") or die("Falha ao retornar usuarios");
        $arr = Array();
        while ($list = mysql_fetch_array($query)) {
            $categ = new Categoria_Produto();
            $categ->setId($list['Id']);
            $categ->setCategoria($list['Categoria']);
            $arr[] = $categ;
        }
        mysql_close();

        return $arr;
    }

}
