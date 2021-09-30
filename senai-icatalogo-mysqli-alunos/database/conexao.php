<?php

/* paremetros de conexão Mysqli

1- host-> onde o banco esta rodando
2 user-> usuario do banco de dados
3 password -> senha do usuario do banco de date_isodate_set
4- detabase -> nome do banco de dado */


const host ='localhost';
const user = 'root';
const password ='bcd127';
const dataBase ='icatalogo';

$conexao = mysqli_connect (host, user, password, dataBase);
if($conexao === false){
    die(mysqli_connect_error());
}

// echo'<pre>';
// var_dump($conexão);
// echo'</pre>';
