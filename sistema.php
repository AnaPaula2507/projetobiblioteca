<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sistema</title>
</head>
<body>
    <?php
    include_once "conexao.php";

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $paginas = $_POST['paginas'];
    $op = $_POST['tipo'];

    switch ($op) {
        case 'incluir':
            $stmt=$conn->prepare("insert into livro(titulo, autor, paginas) values(:TITULO, :AUTOR, :PAGINAS)");

            $stmt->bindParam(":TITULO", $titulo);
            $stmt->bindParam(":AUTOR", $autor);
            $stmt->bindParam(":PAGINAS", $paginas);
             
            $msg = $stmt->execute()?"Livro Cadastrado com sucesso!":"Erro ao alterar!";

            header("location: index.php?msg=".urlencode($msg));
        break;

        case 'editar':
            $id = $_POST['id'];

            $update = $conn->prepare("update livro set titulo = :TITULO, autor = :AUTOR, paginas = :PAGINAS where idLivro = :ID");

            $update->bindParam(":ID", $id);
            $update->bindParam(":TITULO", $titulo);
            $update->bindParam(":AUTOR", $autor);
            $update->bindParam(":PAGINAS", $paginas);
            $msg = $update->execute()?"Livro Editado com sucesso!":"Erro ao alterar!";

            header("location: index.php?msg=".urlencode($msg));
        break;

        case 'excluir':
            $id = $_POST['id'];

            $delete = $conn->prepare("delete from livro where idLivro = :ID");

            $delete->bindParam(":ID", $id);
            
            $msg = $delete->execute()?"Livro Excluído!":"Erro ao alterar!";

            header("location: index.php?msg=".urlencode($msg));
        break;
        
        default:
            echo "Opção não encontrada";
            break;
        }
    ?>   
    
</body>
</html>