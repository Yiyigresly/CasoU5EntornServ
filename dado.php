<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Dado</title>
</head>
<body>
    <?php 
    class dado 
     {
       // atributos clase dado
       private $minNumDado=0;
       private $maxNumDado=0;
       // Métodos de la clase
        public function setMinNumDado($min){
            //números inferiores a 0 se asignará valor 0
            if ($min<0){$this->minNumDado=0;}
            else { $this->minNumDado=$min;}

        }
        public function setMaxNumDado($max){
            //números superiores a 12 se asignará el valor 12
            if ($max>12){$this->maxNumDado=12;}
            else { $this->maxNumDado=$max;}

        }
        public function getMinNumDado(){
           return $this->minNumDado;
        }
        public function getMaxNumDado(){
            return $this->maxNumDado;
        }
         public function tirarDado(){
            $tirada=rand($this->minNumDado,$this->maxNumDado); 
           return $tirada;
         }
     }

    ?>
    
</body>
</html>