<?php
session_start();

$_SESSION["usr"]='dan';
echo 'session is: ' . $_SESSION["usr"];