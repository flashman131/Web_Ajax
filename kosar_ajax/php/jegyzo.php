<?php
require_once('../config/connect.php');
if(isset($_POST['mez'])){
    $mez=$_POST['mez'];
    $sql="SELECT * FROM jegyzokonyv WHERE mez='$mez';";
    $res = $conn -> query($sql);
    if(!$res){
        die("Hiba a lekérdezés során!");
    }
    while($row=$res ->fetch_assoc()){
        $html="<ul>";
        $html .= "<li> {$row['be']} </li>"
            . "<li> {$row['ki']} </li>"
            . "<li> {$row['bkis']} </li>"
            . "<li> {$row['bjo']} </li>"
            . "</ul>";
        echo $html;
    }
            
}
$conn -> close();