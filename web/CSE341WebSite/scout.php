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
                    <option value="Caramel deLites">Caramel deLites</option>
                    <option value="Peanut Butter Sandwich">Peanut Butter Sandwich</option>
                    <option value="Peanut Butter Patties">Peanut Butter Patties</option>
                    <option value="Thin Mints">Thin Mints</option>
                    <option value="Shortbread">Shortbread</option>
                    <option value="Thanks-a-lot">Thanks-a-lot</option>
                    <option value="Lemonades">Lemonades</option>
                    <option value="Smores">Smores</option>
                </select><br>
            </form>
        </div>
        </fieldset>
    </main>
        <footer>

            <?php include 'common/footer.php'; ?>

        </footer>
   </body>
</html>