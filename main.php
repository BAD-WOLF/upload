<!DOCTYPE html>
<html lang="en">

        <head>
                <meta charset="utf-8"/>
        </head>

        <body>
                <?php
                        if(isset($_POST["button"])){

                                $uploaddir = getcwd();
                                $uploadfile = $uploaddir . basename($_FILES['file']['name']);

                                
                                if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
                                        echo "Arquivo válido e enviado com sucesso.\n";
                                } else {
                                        echo "Possível ataque de upload de arquivo!\n";
                                }

                                echo 'Aqui está mais informações de debug:';
                                print_r($_FILES);

                        }
                        ?>
                        <form enctype="multipart/form-data" method="POST">
                                <input name="file" type="file" />
                                <input type="submit" value="Enviar arquivo" />
                        </form>

        </body>

</html>
