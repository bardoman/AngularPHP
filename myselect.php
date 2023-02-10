<html>

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

while ($row = $res->fetchArray()) {
echo "{$row['id']} {$row['name']} {$row['price']} \n";
}


?>
</html>
