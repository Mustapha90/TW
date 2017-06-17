<?php

require 'dbConnect.php';

registrarAccion( "Log out", $_SESSION[ 'username' ] );

session_start();
session_destroy();

header( "Location: index.php?sec=home" );

?>