<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Devoir php</title>
</head>
<body>
  
</body>
</html>

<?php
//les variables
$x=5;
$y=6;
$z=$x+$y;
echo $z;

//les operateurs arithmetiques
//addition

$a = 6 + 42;//la reponse est 48

//Multiplication 
$m = 12 * 5; //la reponse est 60
//la division
$d = 40 / 2; //la reponse est 20

//la soustraction
$s = 120 - 2; //la reponse est 118

// le reste de la division entier
$r = 53 % 9; //la reponse est 8

echo " $m,$d,$a,$s,$r";  
  
//Les booleens
$login== true;
$login== false;
if ($login== true) {    
  echo "Authentification reussit"; 
} else if ($login== false) {
    echo "login incorrect"; }


//les structures conditionnels(if,if else,For,while,do while)
$age=18;
if($age<18){
echo"vous etes mineur";
}
elseif($age>18){
  echo"vous etes majeur";

  $age=12;
}
//switch
$age=18;
switch($age){
  case 11: echo "votre age est 11 ans<br>";
  case 17: echo "votre age est 17 ans<br>";
break;
  default: echo "votre age n'est ni 17 ni 11<br>";
  echo"<br>";
break;
}
//while
$a=0;
while($a<=20){
  echo"le nombre est :".$a."<br>";
  $a++;
// do while
$b=0;
do{
	echo "c'est le nombre : ".$b."<br/>";
	$b++;


}

while ($b<= 20);

// for

for ($i=0; $i <10 ; $i++) { 
	
	echo " le nombre est : ".$i."<br/>";



}
echo "<br/>";
echo " <br/>";

for ($a=10; $a >0 ; $a--) { 
	echo "le nombre est : ".$a."<br/>";
}




//Les fonctions


function cube($n)
{
  return $n*$n*$n;
}
echo "cube(3)";

}

?>