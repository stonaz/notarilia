<?PHP
require 'functions.php'; // functions used in the script
//$dbconn = pg_connect ("host=192.168.1.14 port=5432 dbname=ruggeri user=postgres password=Superman123") or die ('no db');
header('Content-Type: application/json'); //for correct output in browsers
$sql='SELECT *  FROM "uffici" ';

if ($_GET['fondo']){
    $fondo= ($_GET['fondo']);
    $sql .= " where fondo = '$fondo'";
    
}

//echo $sql;
$items_list=get_items_list($dbconn,$sql);
//foreach ($items_list as $)
//$items_list["data finale presunta"]="test";
//print_r($items_list);
echo json_encode($items_list);
//echo indent(json_encode($items_list));





?>  