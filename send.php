<?php 
    $destino = "ronald_arismendy@hotmail.com"
    $name = $_POST["Name"];
    $phone = $_POST["Phone"];
    $mail = $_POST["Mail"];
    $Message = $_POST["Message"];
    $content = "Name: " . $name . "\nMail " . $mail .  "\nPhone " . $phone . "\nMessage " . $Message;
    mail($destino,"Contacto", $content);
    header("Location:Thanks.html");
?>