<?php
        $link = mysqli_connect('localhost','root','');
        mysqli_select_db($link, 'websitesubscribe');
        
        if(isset($_POST["submit"])){

            $firstName = $_POST['fname'];
            $lastName = $_POST['lname'];
            $phone = $_POST['telno'];
            $email = $_POST['email'];

            mysqli_query($link, "INSERT INTO info VALUES('$firstName', '$lastName', '$phone', '$email')");
        }
    ?>