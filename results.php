<?php
$br = "<br>";
$style	= '<span style="color:black; font-size: 20px;">';
$style2	= '<span style="color:green; font-size: 20px;">';



if(isset($_POST['gender'])){
    $gender= $_POST['gender'];
}
if(isset($_POST['gender'])){
    $gender= $_POST['gender'];
}
if(isset($_POST['voornaam'])){
    $voornaam= $_POST['voornaam'];
}
if(isset($_POST['tussenvogsel'])){
    $tussenvogsel= $_POST['tussenvogsel'];
}
if(isset($_POST['achternaam'])){
    $achternaam= $_POST['achternaam'];
}
if(isset($_POST['Postcode'])){
    $Postcode= $_POST['Postcode'];
}
if(isset($_POST['Huisnummer'])){
    $Huisnummer= $_POST['Huisnummer'];
}

if(isset($_POST['email'])){
    $email= $_POST['email'];
}
if(isset($_POST['tele'])){
    $tele= $_POST['tele'];
}
if(isset($_POST['geboortedatum'])){
    $geboortedatum= $_POST['geboortedatum'];
}
if(isset($_POST['e-mail'])){
 $Email = $_POST['e-mail'];
}
  if(isset($_POST['password'])){
   $password = $_POST['password'];
  }
  if(isset($_POST['woonplaats'])){
    $woonplaats = $_POST['woonplaats'];
   }
   if(isset($_POST['rekeningnummer'])){
    $rekeningnummer = $_POST['rekeningnummer'];
   }
   
 
echo "JE GEGEVENS DIE JE INGEVULD HEBT *******:  " . $br;
echo  " Je bent " . $style2 .  $gender. $br . $style . " Je voornaam is "  
. $style2 . $voornaam . $br . $style . " Je tussenvogsel "  . $style2 .$tussenvogsel
 . $br . $style . " Je achternaam is "  . $style2 . $achternaam . $br . $style . " Je postecode is"  
 . $style2 . $Postcode . $br . $style . " Je huisnummer is " . $style2 . $Huisnummer . $br . $style . " Je email is " 
  . $style2 . $email . $br . $style . " Je geboortedatum is ".$geboortedatum. $br . " je woonplaats is " . $woonplaats . $br . " Je rekeningnummer is ". $rekeningnummer;