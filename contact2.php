<?php

include 'dbh.inc.php';

function insert_contact($pdo, $data)
{
    $sql = "INSERT INTO contacts (name, email, number) VALUES(?,?,?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($data);
}

function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = validate_input($_POST['name1']);
    $number = validate_input($_POST['number1']);
    $email = validate_input($_POST['email1']);

    if (empty($name)) {
        $em = "Name is empty";
        header("Location:index.php?error=$em");
        exit();
    } else if (empty($number)) {
        $em = "Number is empty";
        header("Location:index.php?error=$em");
        exit();
    } else if (empty($email)) {
        $em = "email is empty";
        header("Location:index.php?error=$em");
        exit();
    } else {

        $data = array($name, $email, $number);
        if (insert_contact($pdo, $data)) {
            $em = "Contact inserted successfully!";
            header("Location:index.php?success=$em");
            exit();
        } else {
            $em = "There was a problem!";
            header("Location:index.php?error=$em");
            exit();
        }
    }
}


