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

            /*INSTENÇÃO DE DADOS NA BASE DE DADOS DO MYSQL*/

            //RECEBIMENTO DE DADOS 
            $descricao = $_POST["descricao"];
            $peso = $_POST["peso"];
            $quantidade= $_POST ["quantidade"];
            $cor = $_POST["cor"];
            $tamanho = $_POST["tamanho"];
            $valor = $_POST ["valor"];
            $desconto = $_POST ["desconto"];
            $categoriaId = $_POST["categoria"];
            
            //Descriçao da instrução  SQL inserção

            $sql = " INSERT INTO  tbl_produto
            (descricao, peso, quantidade, cor, tamanho, valor, desconto, imagem, categoria_Id)
            VALUES('$descricao', $peso, $quantidade, '$cor', '$tamanho', $valor, $desconto,
            '$novoNome', $categoriaId)";

            // '' SERVE PARA SQL QUE REPRESNETA STRING

            //EXECUÇÃO DO SQL DE INSERÇÃO

            $resultado = mysqli_query($conexao, $sql);

            //REDIRECIONAR PARA INDEX://

        header('local: index.php');


            break;
        
        default:
            # code...
            break;
    }
 
?>