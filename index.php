<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/header.php";
?>
<br>
<?php
$navne[] = "Per";
$navne[] = "Hans";
$navne[] = "Brian";
$navne[] = "Gitte";
 
print_r($navne);
?>
<br>

<br>
<?php
$tal = array();

for ($i = 0; $i < 5; $i++)
{
  $tal[] = $i + 10;
}
 
print_r($tal);
?>
<br>
<br>
<?php
   $kategorier = array("M" => "Mænd", "K" => "Kvinder", "U" => "Ukendt");
   foreach($kategorier as $key => $value) {
      echo "Key: ". $key . " Value: " . $value;
      echo "<br />";
   }
?>
<br>

<br>
<?php
$farver[] = "rød";
$farver[] = "gul";
$farver[] = "grøn";
$farver[] = "blå";
 
print_r($farver);
?>
<br>
<br>

<?php
   $kategorier = array("Bens" => "Mercedes","VW" => "Volkswagen", "BMW" => "Bayern", "F" => "Fords");
   foreach($kategorier as $key => $value) {
      echo "Key: ". $key . " Value: " . $value;
      echo "<br />";
   }
?>
<br>
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/footer.php";
?>

