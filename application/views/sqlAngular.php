<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "dbmynews");

$result = $conn->query("SELECT * FROM news");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Id":"'  . $rs["idNews"] . '",';
    $outp .= '"Judul":"'   . $rs["judulNews"]        . '",';
    $outp .= '"isi":"'. $rs["isiNews"]     . '",';
    $outp .= '"type":"'. $rs["typeNews"]     . '",';
    $outp .= '"gambar":"'. $rs["gambarNews"]     . '",';
    $outp .= '"adm":"'. $rs["admin"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>