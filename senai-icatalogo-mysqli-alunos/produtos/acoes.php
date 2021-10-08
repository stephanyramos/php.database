<?php
 
    require("../database/conexao.php");
 
    switch ($_POST["acao"]) {
        case 'inserir':
            //TRATAMENTO DA IMAGEM PARA UPLOAD:
 
            echo '<pre>';
            var_dump($_FILES);
            echo '<pre>';
 
            //RECUPERA O NOME DO ARQUIVO
            $nomeArquivo = $_FILES["foto"]["name"];
            //RECUPERAR A EXTENSÃO DO ARQUIVO
            $extencao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
            

            // DEFINIR UM NOVO NOME PARA O ARQUIVO DE IMAGEM
            $novoNome = md5(microtime()). "." .$extencao;
            

            // echo '<br>';
            // echo $novoNome;
            move_uploaded_file($_FILES["foto"]["tmp_name"] , "fotos/$novoNome");
 
            break;
        
        default:
            # code...
            break;
    }
 
?>