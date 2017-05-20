<?php
    $name=$_GET['name'];
    $price=$_GET['price'];
    $des=$_GET['des'];
//$name='sssss';
    
    $created=  '2017-04-19 05:21:25';
    $modi=  '2017-04-19 05:21:25';
    $db1=new PDO('mysql:host=localhost;dbname=product','root','');
    $sql1="insert into products(name,description,price,created,modified) values('$name','$des','$price','$created','$modi')";
    $result1=$db1->exec($sql1);
    echo $json_response1=  json_encode($result1);
?>

