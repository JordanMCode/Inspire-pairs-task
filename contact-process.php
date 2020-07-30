<?php

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$phone = $_POST["phone"];
$message = $_POST["message"];


include 'db-connection.php';
if ($db == NULL){}
else{
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        //Error Checking
        $firstName = test_input($_POST["firstName"]);
        if (!preg_match("/^[a-zA-Z]*$/", $firstName)){
            header("Location: index.php?page=./pages/contact-us.php&valid=firstError");
            exit();
        }

        $lastName = test_input($_POST["lastName"]);
        if (!preg_match("/^[a-zA-Z]*$/", $lastName)){
            header("Location: index.php?page=./pages/contact-us.php&valid=lastError");
            exit();
        }

        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]*$/", $phone)){
            header("Location: index.php?page=./pages/contact-us.php&valid=phoneError");
            exit();
        }

        $message = test_input($_POST["message"]);
        if (!preg_match("/^[a-zA-Z0-9\. \-]*$/", $message)){
            header("Location: index.php?page=./pages/contact-us.php&valid=messageError");
            exit();
        }

        $gdpr = test_input($_POST["gdpr"]);
        if ($gdpr != "on"){
            header("Location: index.php?page=./pages/contact-us.php&valid=gdprError");
            exit();
        }

        if (empty($_POST["phone"])){
            $phone = 0;
        }

        //Success
        $statement = $db->prepare("INSERT INTO submissions (First, Last, Phone, Message) VALUES (?, ?, ?, ?)");
        $statement->bindParam(1, $firstName);
        $statement->bindParam(2, $lastName);
        $statement->bindParam(3, $phone);
        $statement->bindParam(4, $message);
        $statement->execute();
        header("Location: index.php?page=./pages/contact-us.php&valid=success");
        exit();

    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    
?>