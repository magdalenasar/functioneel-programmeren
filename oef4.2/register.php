<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "Registratie", $subtitle = "" );
?>

<div class="container">
    <div class="row">

        <?php
//            if ( ! is_numeric( $_GET['img_id']) ) die("Ongeldig argument " . $_GET['img_id'] . " opgegeven");

            //get data
            $data = GetData( "select * from user where usr_voornaam=" . $_GET['usr_voornaam'] );
            $row = $data = [0 => ['usr_voornaam' => '', 'usr_achternaam' => '', 'usr_email' => '', 'usr_password' => '']];

            //add extra elements
            $extra_elements['csrf_token'] = GenerateCSRF( "register.php"  );
            //$extra_elements['select_land'] = MakeSelect( $fkey = 'img_lan_id',
//            $value = $row['img_lan_id'] ,
//            $sql = "select lan_id, lan_land from land" );


            //get template
            $output = file_get_contents("templates/register.html");

            //merge
            $output = MergeViewWithData( $output, $data );
            $output = MergeViewWithExtraElements( $output, $extra_elements );
            $output = MergeViewWithErrors( $output, $errors );
            $output = RemoveEmptyErrorTags( $output, $data );

            print $output;
        ?>

    </div>
</div>

</body>
</html>