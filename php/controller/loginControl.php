
<?php

try {
    $db = new PDO("mysql:hostname=localhost;dbname=crudschool;charset=utf8;","root","");

    // //Debug
    // echo "Connected Database";

} catch (PDOException $e) {
    die($e->getMessage());
}

if(isset($_POST['sign'])) {

    $user = $_POST["user"];
    $mail = $_POST["loginMail"];
    $pwd = $_POST["password"];
    
    // //Debug
    // echo "$user $mail $pwd";

$control = $db->prepare("SELECT * FROM $user");
     $control->execute();
     
     $id = 1;
     while($print = $control->fetch(PDO::FETCH_ASSOC)) {
        if($print['email']===$mail) {
        break;
        }
        $id++;
     }

     echo $id;

     $psd = $db->query("SELECT pwd FROM $user WHERE id=$id");
     $pasd = $psd->fetch();

    if($pasd['pwd']===$pwd) {
        echo "Giris basarili ";
    } else {
        echo "Hatali giris.";
    }
     
}



