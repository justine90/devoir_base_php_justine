<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Devoir php</title>
</head>

<body>

  <?php
  //les variables
  $x = 5;
  $y = 6;
  $z = 6;
  $t = 6;
  $d = $x + $y + $z + $t;
  echo "La somme de $x+$y+$z+$t est ".$d. "<hr>";

  //les operateurs arithmetiques
  //addition

  $x = 6 + 42; //la reponse est 48

  //Multiplication 
  $y = 12 * 5; //la reponse est 60
  //la division
  $z = 40 / 2; //la reponse est 20

  //la soustraction
  $t = 120 - 2; //la reponse est 118

  // le reste de la division entier
  $d = 53 % 9; //la reponse est 8

  echo " $x,$y,$z,$t,$d <hr>";

  //Les booleens
  $login == true;
  $login == false;
  if ($login == true) {
    echo "Authentification reussit";
  } else if ($login == false) {
    echo "login incorrect";
  }


  //les structures conditionnels(if,if else,For,while,do while)
  $age = 18;
  if ($age < 18) {
    echo "vous etes mineur";
  } elseif ($age > 18) {
    echo "vous etes majeur";
  }
  //switch
  $age = 18;
  switch ($age) {
    case 11:
      echo "votre age est 11 ans<br>";
    case 17:
      echo "votre age est 17 ans<br>";
      break;
    default:
      echo "votre age n'est ni 17 ni 11<br>";
      echo "<br>";
      break;
  }
  //while
  $x = 0;
  while ($x <= 20) {
    echo "le nombre est :" . $x . "<br>";
    $x++;
  }
  // do while
  $y = 0;
  do {
    echo "c'est le nombre : " . $y . "<br/>";
    $y++;
  } while ($y <= 20);

  // for

  for ($z = 0; $z < 10; $z++) {

    echo " le nombre est : " . $z . "<br/>";
  }
  echo "<br/>";
  echo " <hr>";

  for ($y = 10; $y > 0; $y--) {
    echo "le nombre est : " . $y . "<br/>";
  }

  //Les tableaux
  // Déclaration d'un tableau vide
  $fruits = array();

  // Déclaration d'un tableau indexé numériquement
  $legumes = array('carotte', 'poivron', 'aubergine', 'chou');

  // Déclaration d'un tableau associatif
  $identite = array(

    'nom' => 'Hamon',
    'prenom' => 'Hugo',
    'age' => 19,
    'estEtudiant' => true
  );


  //Les fonctions


  function cube($y)
  {
    return $y * $y * $y;
  }
  echo "<hr>Le cube de 3 est " . cube(3);

  ?>
</body>

</html>