<?php
require "common/dbconnect.php";
$db=get_db();
?>

<!DOCTYPE html>

   <html lang="en-us">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Scout page | James Chell | CSE 341 BYUI</title>
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
   </head>
   <body>
<header>
   <?php include 'common/header.php'; ?>
</header> 
    <main>
        <fieldset>
        <div class="info">
            <form action="results.php" method="post">
                First name: <input type="text" name="first_name"><br>
                Last name: <input type="text" name="last_name"><br>
                <label for="cookie">Choose a Cookie:</label>
                <select id="cookie" name="cookie">
                    <option value="">Caramel deLites</option>
                    <option value="saab">Peanut Butter Sandwich</option>
                    <option value="fiat">Peanut Butter Patties</option>
                    <option value="audi">Thin Mints</option>
                </select>
                <input type="submit" value="results" class="getBtn">
                <input type="hidden" name="action" value=""><br>
            </form>
        </div>
        </fieldset>
    </main>
        <footer>

            <?php include 'common/footer.php'; ?>

        </footer>
   </body>
</html>