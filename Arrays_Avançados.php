<html>
  <head>
    <title>Eu sou o Rei dos Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      $myArray = array('pizza', 'salad', 'burger');




      echo $myArray[0];


      // Na linha abaixo, faça iterações no array e exiba
     $length = count($myArray);


       for ($i = 0; $i < $length; $i++) {
        echo $myArray[$i] . '<br />';
      }




        //foreach ($myArray as $batistafoda => $batistahigh) {
        // echo $batistafoda[0] . $batistafoda[1] . "<br /> " .  //$batistahigh[0] . " " . $batistahigh[1] ;
       //}


      ?>
    </p>
  </body>
</html>
