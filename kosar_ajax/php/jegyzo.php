<?php
require_once('../config/connect.php');
if(isset($_POST['mez'])){
    $mez=$_POST['mez'];
    $sql="SELECT be,ki,bkis,bjo FROM jegyzokonyv WHERE mez='$mez';";
    $res = $conn -> query($sql);
    if(!$res){
        die("Hiba a lekérdezés során!");
    }
    /*if(res->num_rows >0){
     * $html = "<table class='table table-striped'>"
     *  ."<tr>"
     *  ."<td> Be </td>"
     *  ."<td> Ki </td>"
     *  ."<td> Kísérlet </td>"
     *  ."<td> Kosár </td>"
     *  ."</tr>";
     * }     
        while($row=$res ->fetch_assoc()){
        $html .= "<tr>"
     *      . "<td> {$row['be']} </tr>"
            . "<td> {$row['ki']} </tr>"
            . "<td> {$row['bkis']} </tr>"
            . "<td> {$row['bjo']} </tr>"
            . "</tr>";
     * }        */
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