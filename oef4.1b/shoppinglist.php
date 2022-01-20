<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";
require_once "models/ShoppingList.php";

PrintHead();
PrintJumbo( $titel = "We gaan shoppen!" );
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php

            # $sl is een object variable, maar ook een instance/exemplaar van de class ShoppingList
            $sl = new ShoppingList($shop = "Carrefour",
                                    $date = new DateTime("2022-01-31"),
                                    $items = [ "sokken","onderbroeken","muts" ]);

            $sl->setShop("Delhaize");
            $sl->setDate(new DateTime("2021-01-18"));

            //$sl->setDate(new DateTime("2022-01-31")); после са качени горе, всички наведнъж ^
            //$sl->setItems(["sokken","onderbroeken","muts"]);

            print "<p>Waar? " . $sl->getShop() . "</p>";
            print "<p>Wanneer? " . $sl->getDateString() . "</p>";
            print "<p>Welke dag is dat? " . $sl->getDate()->format("l") . "</p>";

            print "<p>Wat gaan we kopen? </p>";


            print "<ul>";

            $sl->empthy()
            ->setItems(["bloemkool", "brocoli", "thym" ]);


            foreach ($sl->getItems() as $item )
            {
                print "<li>" . $item . "</li>";
            }

            $alltheprops = $sl->getAllTheProperties();
            var_dump($alltheprops);

            ?>
        </div>
    </div>
</div>
</body>
</html>


