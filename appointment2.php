<?php

include 'dbh.inc.php';

function insert_user($pdo, $data)
{
    $sql = "INSERT INTO appointments (name, email, number, date) VALUES(?,?,?, ?)";
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
    $name = validate_input($_POST['name']);
    $number = validate_input($_POST['number']);
    $email = validate_input($_POST['email']);
    $date = validate_input($_POST['date']);

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

        $data = array($name, $email, $number, $date);
        if (insert_user($pdo, $data)) {
            $em = "Appointment created successfully!";
            header("Location:index.php?success=$em");
            exit();
        } else {
            $em = "There was a problem!";
            header("Location:index.php?error=$em");
            exit();
        }
    }
}
