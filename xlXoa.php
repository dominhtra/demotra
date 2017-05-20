<?php
    $id=$_GET['id'];
    $db=new PDO('mysql:host=localhost;dbname=product','root','');
    $sql2="delete from products where id='$id'";
    $result2=$db->exec($sql2);
    echo $json_response2=  json_encode($result2);
?>

