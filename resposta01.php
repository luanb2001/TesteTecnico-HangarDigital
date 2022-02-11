<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body >  
        <form action="" method="POST">
            <fieldset>
                <legend>Insira as notas para calcular a média!</legend>
                <p>
                      Nome: <input type="text" name="nome" required>
                </p>
                <p>
                      Nota 1: <input type="text" name="n1" required>
                </p>
                <p>
                      Nota 2: <input type="text" name="n2" required>
                </p>
                <p>
                      Nota 3: <input type="text" name="n3" required>
                </p>
                <p>
                      Nota 4: <input type="text" name="n4" required>
                </p>
            
                <input type="submit" name="calcular" value="Calcular">

                <?php
                
                    if (isset($_POST['calcular'])){
                        $nome = $_POST['nome'];
                        $n1 = $_POST['n1'];
                        $n2 = $_POST['n2'];
                        $n3 = $_POST['n3'];
                        $n4 = $_POST['n4'];
                        $media =($n1 + $n2 + $n3 + $n4) / 4;

                        echo "<br><br>A média das notas é: $media<br><br>";

                        if($media>=7){
                            echo "O aluno $nome está aprovado.";
                        }
                        if($media<7 && $media>=5){
                            echo "O aluno $nome está em exame.";
                        }
                        if($media<5){
                            echo "O aluno $nome está reprovado.";
                        }
                    }
                ?>
            </fieldset> 
        </form>                        
    </body>
</html>
