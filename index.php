<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>calculadora</h1>
    <form method="POST" action="index.php">
    <input name="n1"  type="number" require placeholder="digite o primeiro numero"><br><br>
    <input name="n2"  type="number" require placeholder="digite o primeiro numero"><br><br>

    <input type="submit" value="+" name="calculo">
    <input type="submit" value="-" name="calculo">
    <input type="submit" value="*" name="calculo">
    <input type="submit" value="/" name="calculo">
    </form>
    <?php
      require"funcao.php";
      $n1 = $_POST['n1'];
      $n2 = $_POST['n2'];
      $calculo = $_POST['calculo'];

     if($calculo=='+'){
        echo adicao($n1,$n2);
     }
     else if($calculo=='-'){
        echo subtracao($n1,$n2);
     }
     else if($calculo=='/'){
        echo divisao($n1,$n2);
     }
     else if($calculo=='*'){
        echo multiplicacao($n1,$n2);
     }
    ?>

</body>
</html>