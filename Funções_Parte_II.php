<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php

      function aboutMe($name,$age){
          echo "Olá! Meu nome é" .$name. ", e eu tenho".$age. "anos.";
      }

      $myname =  "Gardel Batista";
      $myage = 21;

      aboutMe($myname,$myage);

        ?>
      </p>
    </body>
</html>
