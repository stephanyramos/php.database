<?php

/* Conexão com  banco de dados */
require('../database/conexao.php');
/* tratamentos doa dados vindos do formulario
-TIPOS DE AÇÕES 
-EXECULÇÃO DOS PROCESSOS DA AÇÃO SOLICITADA */


switch($_POST['acao']) {
    case 'inserir':
        // echo 'INSERIR';exit;
    $descricao = $_POST['descricao'];

    /*montagm da inscrição sql de inserção de dados*/
    $sql ="INSERT INTO tbl_categoria (descricao) 
    values('$descricao')";

    // echo $sql; exit;


    /*parametros
    1- uma conexao abeta valida 
    2- uma instrução sql*/
    $resultado = mysqli_query($conexao, $sql);
     header('location:index.php');

    // echo'<pre>';
    // var_dump($conexao);
    // echo'</pre>';
    // exit;

        break;
    
    default:
        # code...
        break;
}

?>