<?PHP
require 'functions.php'; // functions used in the script
//$dbconn = pg_connect ("host=192.168.1.14 port=5432 dbname=ruggeri user=postgres password=Superman123") or die ('no db');
header('Content-Type: application/json'); //for correct output in browsers
$sql='SELECT fondo  FROM "fondi" ';

//echo $sql;
$items_list=get_items_list($dbconn,$sql);
echo json_encode($items_list);
//echo indent(json_encode($items_list));





?>  