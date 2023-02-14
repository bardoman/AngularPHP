

<?php
$name = $_GET['name'];

print $name;
echo '<br>';

$db = new SQLite3('test.db');

if ($name==null)
{
    $res = $db->query('SELECT * FROM cars');
}
else
{
    $res = $db->query("select * from cars where name='$name'");
}

/*
while ($row = $res->fetchArray()) {
echo "{$row['id']} {$row['name']} {$row['price']} \n";
}

*/
$row = $res->fetchArray();

/*
$row['order_id'] = $order_id;
$row['amount'] = $amount;
$row['response_code'] = $response_code;
$row['response_desc'] = $response_desc;
*/

echo json_encode($row);


?>

