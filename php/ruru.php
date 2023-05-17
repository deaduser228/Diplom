<?php

    $emails = $_POST["emails"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];
    $error = '';
    $listinfo = fopen("regis.txt", "a");
    if(trim($emails)==''||trim($password)==''||trim($rpassword)=='')
        $error = "Заполните все поля!";

    else {
        if(trim($password)==trim($rpassword)){
            fwrite($listinfo, "\nEmail: $emails\nPassword: $password");
            echo "Регистрация успешно выполнена";
        }
        else{
            echo "Пароли не совпали";
            exit;
        }
    }
    fclose($listinfo);
    if($error !='')
        echo $error;
        exit;
        


?>
