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
                    <legend><span>Add Scout Information</span></legend>

                    <div class="row">

                        <div class="column">

                            <label><span>First Name: </span><br>
                                <input name="add_first_name" type="text" value="" id="add_first_name" placeholder="">
                            </label><br><br>

                            <label><span>Last Name: </span><br>
                                <input name="add_last_name" type="text" value="" id="add_last_name" placeholder="">
                            </label><br><br>

                            <label><span>Date of Birth: </span><br>
                                <input name="add_date_of-birth" type="text" value="" id="add_date_of-birth" placeholder="" required>
                            </label><br><br>

                            <label><span>Email: </span><br>
                                <input name="add_email" type="text" value="" id="add_email" placeholder="" required>
                            </label><br><br>

                        </div>

                            <label><span>Phone Number: </span><br>
                                <input name="add_phone" type="number" value="" id="add_phone" placeholder=""required>
                            </label><br><br>

                            <label><span>User Name: </span><br>
                                <input name="add_user_name" type="text" value="" id="add_user_name" placeholder="">
                            </label><br><br>

                            <label><span>Password: </span><br>
                                <input name="add_password" type="number" value="" id="add_password" placeholder="">
                            </label><br><br>

                                </label>

                                </div>


                </fieldset>
        <fieldset>
        <div class="info">
            <form action="results.php" method="post">
                First name: <input type="text" name="first_name"><br>
                Last name: <input type="text" name="last_name"><br>
                <label for="cookie">Choose a Cookie:</label>
                <select id="cookie" name="cookie">
                    <option value="none">-</option>
                    <option value="Caramel deLites">Caramel deLites</option>
                    <option value="Peanut Butter Sandwich">Peanut Butter Sandwich</option>
                    <option value="Peanut Butter Patties">Peanut Butter Patties</option>
                    <option value="Thin Mints">Thin Mints</option>
                    <option value="Shortbread">Shortbread</option>
                    <option value="Thanks-a-lot">Thanks-a-lot</option>
                    <option value="Lemonades">Lemonades</option>
                    <option value="Smores">Smores</option>
                    
                </select><br>
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