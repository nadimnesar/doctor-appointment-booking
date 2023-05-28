<?php

session_start();
@include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DrsAppoint | Book Doctors Appointment </title>
    <link type="image/x-icon" href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <div class="header-nav">
            <div class="nav-logo">
                <a href="index.php">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
            </div>
            <ul class="nav-ul">
                <li class="nav-items">
                    <a href="index.php">Home</a>
                </li>
                <?php
                if (isset($_SESSION['login_done'])) {
                    if ($_SESSION['login_done_type'] == 'admin') {
                        echo '
                            <li class="nav-items">
                                <a href="addnewdr.php">Add New Doctor</a>
                            </li>
                        ';
                    } else {
                        echo '
                            <li class="nav-items">
                                <a href="appoint.php">Appointments</a>
                            </li>
                        ';
                    }
                }
                ?>
            </ul>
            <ul class="nav-ul-r">
                <?php
                if (!isset($_SESSION['login_done'])) {
                    echo '
                            <li class="nav-items-r">
                                <a href="login.php">Login</a>
                            </li>
                            <li class="nav-items-r">
                                <a href="signup.php">Signup</a>
                            </li>
                        ';
                } else {
                    echo '<li class="nav-items-r" >';
                    echo 'Hi, ' . $_SESSION['login_done'];
                    echo '</li>';
                    echo '<li class="nav-items-r" >';
                    echo '<a href="logout.php">Logout</a>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </header>