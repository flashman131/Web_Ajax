<?php
require_once('../config/connect.php');
if(isset($_POST['mez'])){
    $mez=$_POST['mez'];
    $sql="SELECT * FROM jatekos WHERE mez='$mez';";
    $res = $conn -> query($sql);
    if(!$res){
        die("Hiba a lekérdezés során!");
    }
    if($res -> num_rows == 1){
        $html="<ul>";
        $row = $res -> fetch_row();
        $html .="<li> $row[0] </li>"
            . "<li> $row[2] </li>"
            . "<li> $row[3] </li>"
            . "</ul>";
        echo $html;
    }
            
}
$conn -> close();

