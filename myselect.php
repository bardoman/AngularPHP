

    

<?php


$method = $_SERVER['REQUEST_METHOD'];
$request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));

switch ($method) {
  case 'PUT':
    //do_something_with_put($request);  
    break;
  case 'POST':
   // do_something_with_post($request);  
    break;
  case 'GET':
    handleGet();  
    break;
  default:
   // handle_error($request);  
    break;
}


function handleGet() {

    // handle GET request
$name = $_GET['name'];

//print $name;
//echo '<br>';

$db = new SQLite3('test.db');
//print_r($db);

if ($name==null)
{
    $res = $db->query('SELECT * FROM cars');
}
else
{
    $res = $db->query("select * from cars where name='$name'");
}

$mygroup=array();

while ($row = $res->fetchArray()) {
   array_push($mygroup, $row);  
}

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

echo json_encode($mygroup);
}
 




?>

