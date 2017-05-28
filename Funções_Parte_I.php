<html>
    <p>
  <?php
  $JogoAmigos = array();
    array_push($JogoAmigos, "Victor");
    array_push($JogoAmigos, "Debora");
    array_push($JogoAmigos, "Candida");
    array_push($JogoAmigos, "Jonathan");
    array_push($JogoAmigos, "Batista");



  $sorteio = sort($JogoAmigos);

  join($sorteio);

  $NumeroAmigos = count($JogoAmigos);

  $AmigosDefinitivos = rand(0,$NumeroAmigos);

  print strtoupper($JogoAmigos[$AmigosDefinitivos]);

  // Imprima o nome do vencedor em LETRAS MAIÚSCULAS
  ?>
  </p>
</html>
