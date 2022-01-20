<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

function PrintHead()
{
    print file_get_contents("./templates/head.html");
}


function PrintBody( $class = "" )
{
    print "<body class='$class'>";
}


function PrintJumbo($header_text,$paragraph_text)
{
    $content = file_get_contents("./templates/jumbo.html");
    $new_content = str_replace( "@@header@@", "$header_text", $content);
    print str_replace( "@@paragraph@@", "$paragraph_text", $new_content);
}


function PrintEndOfPage()
{
    print "</body>";
    print "</html>";
}