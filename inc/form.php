<?php

$first_name = isset($_POST['first']) ? $_POST['first'] : '';
$last_name  = isset($_POST['last'])  ? $_POST['last']  : '';
$email      = isset($_POST['email']) ? $_POST['email'] : '';

$errors = [
    'FirstNameError' => '',
    'LastNameError'  => '',
    'EmailError'     => ''
];

if (isset($_POST['submit'])) {
    //echo $first_name . $last_name . $email;



    if (empty($first_name)) {
        $errors['FirstNameError'] = "دخل يسطا الأسم الأول وبطل بضان ";
    }

    if (empty($last_name)) {
        $errors['LastNameError'] = "دخل يسطا الأسم الثانى وبطل بضان ";
    } elseif (empty($email)) {
        $errors['EmailError'] = "دخل يسطا الأيميل وبطل بضان ";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['EmailError'] = "دخل يسطا الأيميل صح وبطل بضان ";
    }

    if (array_filter($errors)) {
        // There are errors in the form
        echo "Errors in the form";
    } else {
        // No errors, proceed with database insertion
        $first_name = mysqli_real_escape_string($conn, $first_name);
        $last_name  = mysqli_real_escape_string($conn, $last_name);
        $email      = mysqli_real_escape_string($conn, $email);

        $sql = "INSERT INTO users (FirstName, LastName, email) VALUES ('$first_name', '$last_name', '$email')";
    }


    if (mysqli_query($conn, $sql)) {
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
};
