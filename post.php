<?php
$daugiklis=$_GET['daugiklis'];
$y = 0;
?>
<html>
    Jūsų pasirinktas daugiklis yra: 
    <p><?php echo $daugiklis;?></p>
</html>
<?php
if (isset($GET['daugiklis'])){
    echo 'Daugiklis yra:' . $_GET['daugiklis'];
}
for ($y = 1; $y <= 12; $y++) {
        echo $daugiklis . ' x ' . $y . ' = ' . $daugiklis * $y . '<br>'; 
    }
?>


