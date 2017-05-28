//Modificando Elementos do Array
<html>
  <head>
    <title>Modificando Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");

        $languages[4] = "C#";
        echo $languages[4];

      ?>
    </p>
  </body>
</html>

//-----------------------------//


//Deletando Elementos do Array

<html>
  <head>
    <title>Modicando Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        unset($languages[3]);



        // Escreva seu código acima dessa linha. Não
        // se preocupe com o código abaixo; vamos
        // usá-lo para imprimir o novo array para você!

        foreach($languages as $lang) {
          print "<p>$lang</p>";
        }
      ?>
    </p>
  </body>
</html>
