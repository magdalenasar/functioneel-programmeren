<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

CheckAccess();

function CheckAccess()
{
    global $public_access;

    if ( ! $public_access AND ! isset($_SESSION['user']) )
    {
        GoToNoAccess();
    }
}

function GoToNoAccess()
{
    global $app_root;

    header("Location: " . $app_root . "/no_access.php");
    exit;
}