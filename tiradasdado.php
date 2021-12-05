<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tiradas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
 <header>
     <h3>Jugar Dado</h3>
 </header>
    <?php 
    include "dado.php";
     $jugador1=new dado();
     $jugador1->setMinNumDado(mt_rand(-1,13));
     $jugador1->setMaxNumDado(mt_rand(-1,13));

     $minimo=$jugador1->getMinNumDado();
     $maximo=$jugador1->getMaxNumDado();
     echo "Número mínimo elegido por el primer jugador es:".$minimo;
     echo "<br>Número máximo elegido por el primer jugador es:".$maximo."<br>";
     ?>
     <div class="tiradas">
      <?php   
     if($minimo<$maximo){
      echo "<br>Se muestran 12 tiradas del jugador:";
      for ($i=1; $i < 13; $i++) { 
       echo  "<br> Tirada $i-> ".$jugador1->tirarDado();
      }
      } else echo "ERROR variable minimo tiene que ser menor que la variable maximo";
       ?>
      </div>
    
</body>
</html>