<?php
require "common/dbconnect.php";
$db=get_db();
?>
<?php
    session_start();

    $username = "testAdmin";
    $password = "cs313";

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        header("Location: admin.php");
    }
        
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {

            $_SESSION['logged_in'] = true;
            header ("Location: admin.php");
        }
    }

?>

<!DOCTYPE HTML>

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
            <legend><span>Scout & Cookie Information</span></legend>

                <br><div>To access Scout or Cookie information, enter the first name of <br>the scout, and/or select a type of cookie.</div><br>

                <form action="results.php" method="post">
                    First name: <br><input type="text" name="first_name"><br>
                    Last name: <br><input type="text" name="last_name"><br>
                    <label for="cookie">Choose a Cookie:</label><br>
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
                        
                    </select><br><br>
                    <input type="submit" value="results" class="getBtn">
                        <input type="hidden" name="action" value=""><br>
                </form>
        </fieldset>

        <fieldset>
            <legend><span>Scout Admin page</span></legend>

            <br><div>Login with your Username and Password to<br>add, edit or delete Scout information. If <br>you wish to edit or delete a scout, 
            <br>Make sure you get the scout ID# from the <br>above field. </div><br>
        
                <form method="post" action="scout.php">
                    Username:<br>
                    <input type="text" name="username"><br>
                    Password:<br>
                    <input type="password" name="password"><br><br>
                    <input type="submit" value="Login" class="getBtn">
                </form>

        </fieldset>

    </main>
        <footer>

            <?php include 'common/footer.php'; ?>

        </footer>
   </body>
</html>