<html>    <body>    <?php    error_reporting( E_ALL );    ini_set( 'display_errors', 1 );    require_once "lib/autoload.php";    require_once "cls.Week.php"; // sla het niet in autoload want wij hebben nogig ervan alleen in dit script    PrintHead();    PrintJumbo( $title = "Weekoverzicht",                $subtitle = "OOP" );    PrintNavbar();  //changed nav: collapsed bootstrap navbar *    ?>    <div class="container">        <table class="table table-bordered table-hover">            <tbody>                <?php                // new object maken                $week = new Week();                //methode voorzien die de output genereert                print $week->Generate(); //(de week tonnen)                // verder: om te laten werken: maak een class --> new PHP class                ?>            </tbody>        </table>    </div></body></html>s