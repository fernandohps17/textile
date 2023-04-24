<?php 
    $error;

    if(!empty($_POST['nickname']) && !empty($_POST['password'])) {
        $nickname = $_POST['nickname'];
        $password = $_POST['password'];

        if($nickname == "admin" && $password == "admin") {
            // echo "Accedio";
            header("location:/documento/");
        }else{
            $error = "invalidos";
            header("location:/login/index.php?error=$error");
        };

    }else{
        $error = "vacio";
        header("location:/login/index.php?error=$error");
    }

?>