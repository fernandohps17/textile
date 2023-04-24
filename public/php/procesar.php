<?php 
    $error;

    if(!empty($_POST['nickname']) && !empty($_POST['password'])) {
        $nickname = $_POST['nickname'];
        $password = $_POST['password'];

        if($nickname == "admin" && $password == "admin") {
            // echo "Accedio";
            header("location:/comons/documento.php");
        }else{
            $error = "invalidos";
            header("location:/comons/login.php?error=$error");
        };

    }else{
        $error = "vacio";
        header("location:/comons/login.php?error=$error");
    }

?>