//JUNTANDO TUDO,PARTE II

<!DOCTYPE html>
<html>
	<head>
	  <title> A Prática Leva à Perfeição! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Digite seu código aqui -->
        <?php

        public classDog(){
          public $numLegs = 4;
          public $name;
        }
        public function __construct($name)
            $this->name = $name;

        public functin bark(){
            return "Woof!";
        }

         public function greet(){
            return "Um cachorro chamado". $this->name."!";
            }

            $dog1 = new classDog("Barker");
            $dog2 = new classDog("Amigo");


            echo $dog1->bark();
            echo $dog2->greet();
        ?>
      </p>
    </body>
</html>

//Hora do Desafio//

<!DOCTYPE html>
<html>
    <head>
	  <title> Hora do Desafio! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
          // Digite seu código aqui
          public classCat(){
              public $isAlive = "true";
              public $numLegs = 4;
              public $name;
          }
          public function __construct($name){
           $this->name = $name;
          }

          // metodo
          public function meow(){
              return "Meowmeow";
          }

          // instancia
        $Cat = new classDog("CodeCat");


          echo $Cat->meow();
        ?>
      </p>
    </body>
</html>
