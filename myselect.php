

<?php
$name = $_GET['name'];

print $name;
//echo '<br>';

$db = new SQLite3('test.db');
print_r($db);

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

echo json_encode($mygroup);



?>

