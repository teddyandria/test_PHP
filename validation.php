<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (empty(trim($_POST['user_date']))) {
        $errors[] = 'La date est requise';
    }
    if (empty(trim($_POST['user_name']))) {
        $errors[] = 'Le nom est requis';
    }
    if (empty(trim($_POST['user_age']))) {
        $errors[] = 'L\'age est requis';
    }
    if (empty(trim($_POST['user_email'])) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'L\'email est requis';
    }
    if (empty(trim($_POST['user_phone']))) {
        $errors[] = 'Le numéro de téléphone est requis';
    }
    if (empty($errors)) {

        echo 'La date que vous avez choisi' . $_POST['user_date'];
        echo ' Votre nom ' . $_POST['user_name'];
        echo ' Votre age ' . $_POST['user_age'];
        echo ' Votre email ' . $_POST['user_email'];
        echo ' Votre numéro de téléphone ' . $_POST['user_phone'];
    } else {
        foreach ($errors as $error) {
            echo $error;
        }
    }
}
