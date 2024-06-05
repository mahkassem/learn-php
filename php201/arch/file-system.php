<?php
$data = array(
  array("name" => "John", "age" => 25, "city" => "New York"),
  array("name" => "Jane", "age" => 30, "city" => "Chicago"),
  array("name" => "Doe", "age" => 35, "city" => "Los Angeles")
);

$json = json_encode($data);
file_put_contents('file.json', $json);

$readJson = file_get_contents('file.json');
foreach (json_decode($readJson) as $item) {
  echo $item->name . ' - ' . $item->age . ' - ' . $item->city . "\n";
}
