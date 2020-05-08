<?php

$fName = htmlspecialchars($_POST["fName"]);
$lName = htmlspecialchars($_POST["lName"]);
$address = htmlspecialchars($_POST["address"]);
$phone = htmlspecialchars($_POST["phone"]);
$caramelDelites = htmlspecialchars($_POST["caramelDelites"]);
$pbsandwich = htmlspecialchars($_POST["pbsandwich"]);
$smore = htmlspecialchars($_POST["smore"]);
$pbpatties = htmlspecialchars($_POST["pbpatties"]);
$thinmint = htmlspecialchars($_POST["thinmint"]);
$shortbread = htmlspecialchars($_POST["shortbread"]);
$thanksalot = htmlspecialchars($_POST["thanksalot"]);
$lemonades = htmlspecialchars($_POST["lemonades"]);
$comments = htmlspecialchars($_POST["comments"]);

?>

<!DOCTYPE html>

   <html lang="en-us">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Shopping Cart | James Chell | CSE 341 BYUI</title>
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
   </head>
   <body>
<header>
   <?php include 'common/header.php'; ?>

      </header>

        <fieldset>

                <h1>Your information</h1>

                <p>Your first name is: <?=$fName ?></p>
                <p>Your last name is: <?=$lName ?></p>
                <p>Delivery address is: <?=$address ?></p>
                <p>Your phone number is: <?=$phone ?></p>
        </fieldset>
        <fieldset>

                <h2>You have ordered the following cookies:</h2>
                <p>Boxes of Caramel deLites: <?=$caramelDelites ?></p>
                <p>Boxes of Peanut Butter Sandwich: <?=$pbsandwich ?></p>
                <p>Boxes of Peanut Butter Patties: <?=$pbpatties ?></p>
                <p>Boxes of Thin Mints: <?=$thinmint ?></p>
                <p>Boxes of Shortbread: <?=$shortbread ?></p>
                <p>Boxes of Thanks-a-lot: <?=$thanksalot ?></p>
                <p>Boxes of Lemonades: <?=$lemonades ?></p>
                <p>Boxes of S'mores: <?=$smore ?></p>

                </ul>

                <p>Special instructions or Comments: <?=$comments?></p>

        </fieldset>

        <fieldset>
            <form method="post" action="thankyou.php">

                <h2>If everything is correct then</h2>
                <input type="submit" value="Get your Cookies" class="getBtn">
                <input type="hidden" name="action" value="register"><br>

            </form>


        </fieldset>

    </body>



    <footer>
            <?php include 'common/footer.php'; ?>   
        </footer>
    </body>
</html>