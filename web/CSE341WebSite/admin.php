<?php
    session_start();
    if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header ("Location: scout.php");
    }


?>

<!DOCTYPE html>

   <html lang="en-us">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Cookie page | James Chell | CSE 341 BYUI</title>
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
   </head>
   <body>
<header>
   <?php include 'common/header.php'; ?>

      </header> 
      <section id="gallery">
            
            <form method="post" action="">

                <fieldset>
                    <legend><span>Add New Scout</span></legend>

                    <div class="row">

                        <div class="column">

                            <label><span>First Name: </span><br>
                                <input name="add_first_name" type="text" value="" id="add_first_name" placeholder="First Name">
                            </label><br><br>

                            <label><span>Last Name: </span><br>
                                <input name="add_last_name" type="text" value="" id="add_last_name" placeholder="Last Name">
                            </label><br><br>

                            <label><span>Date of Birth: </span><br>
                                <input name="add_address" type="text" value="" id="add_address" placeholder="YYYY/MM/DD">
                            </label><br><br>

                            <label><span>Phone Number: </span><br>
                                <input name="add_phone" type="text" value="" id="add_phone" placeholder="">
                            </label><br><br>

                        </div>
                        <div>

                            <label><span>Email: </span><br>
                                <input name="add_email" type="text" value="" id="add_email" placeholder="">
                            </label><br><br>

                            <label><span>User Name: </span><br>
                                <input name="add_user_name" type="text" value="" id="add_user_name" placeholder="">
                            </label><br><br>

                            <label><span>Password: </span><br>
                                <input name="add_password" type="text" value="" id="add_password" placeholder="">
                            </label><br><br>

                        </div>


                
                


                    <input type="submit" value="Add Scout" class="getBtn">
                    <input type="hidden" name="action" value="register"><br>

                </fieldset>


            </form>

        </section>
        <footer>
            <?php include 'common/footer.php'; ?>   
        </footer>
    </body>
</html>