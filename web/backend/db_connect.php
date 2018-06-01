<?php
$con = new PDO("mysql:host=localhost;dbname=homestead", "homestead", "secret"); 

$stmt = $con->prepare("INSERT INTO pessoa(nome, email) VALUES(?, ?)");
$stmt->bindParam(1,”Nome da Pessoa”);
$stmt->bindParam(2,”email@email.com”);
$stmt->execute();

$rs = $con->query(“SELEC id, name, email FROM user”);
while($row = $rs->fetch(PDO::FETCH_OBJ)){
  echo $row->id . “<br />”;
  echo $row->name . “<br />”;
  echo $row->email . “<br />”;
}
?>