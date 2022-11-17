<?php

@include 'config1.php';

session_start();
session_unset();
session_destroy();

header('location:login_form.php');

@include 'moviesingle.php';
?>