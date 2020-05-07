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
            <div class="grid">

                <a href="#"><img id="cookieV" src="images/caramelDelites.jpg" alt="Caramel Delites box" height="200"></a>

                <a href="#"><img id="cookieV" src="images/pbSandwich.jpg" alt="PB Sandwich box" height="200"></a>

                <a href="#"><img id="cookieV" src="images/pbpatties.jpg" alt="PB Patties box" height="200"></a>

                <a href="#"><img id="cookieV" src="images/thinMints.jpg" alt="Thin Mints box" height="200"></a>

                <a href="#"><img id="cookieV" src="images/shortbreads.jpg" alt="Short Breads box" height="200"></a><br>

                <a href="#"><img id="cookieH" src="images/thanksalots.jpg" alt="Thanks-a-lot box" height="100"></a>

                <a href="#"><img id="cookieH" src="images/lemonades.jpg" alt="Lemonades box" height="100"></a>

                <a href="#"><img id="cookieH" src="images/smores.jpg" alt="Smores box" height="100"></a>
            </div>
            <form method="post" action="thankyou.php">

                <fieldset>
                    <legend><span>Order your Cookies</span></legend>

                    <div class="row">

                        <div class="column">

                            <label><span>First Name: </span><br>
                                <input name="clientFirstname" type="text" value="" placeholder="" required>
                            </label><br><br>

                            <label><span>Last Name: </span><br>
                                <input name="clientLastname" type="text" value="" placeholder="" required>
                            </label><br><br>

                            <label><span>Address: </span><br>
                                <input name="clientAddress" type="text" value="" placeholder="" required>
                            </label><br><br>

                            <label><span>Phone Number: </span><br>
                                <input name="clientAddress" type="text" value="" placeholder="" required>
                            </label><br><br>

                            <label><span>Caramel deLites: </span><br>
                                <input name="samoaBoxes" type="number" value="" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>PB Sandwich: </span><br>
                                <input name="dosidoBoxes" type="number" value="" placeholder="Number of Boxes">
                            </label><br><br>

                        </div>


                            <label><span>S'mores: </span><br>
                                <input name="smoreBoxes" type="number" value="" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>Peanut Butter Patties: </span><br>
                                <input name="pbpBoxes" type="number" value="" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>Thin Mints: </span><br>
                                <input name="thinmintBoxes" type="number" value="" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>Trefoils: </span><br>
                                <input name="dosidoBoxes" type="number" value="" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>Trefoils: </span><br>
                                <input name="dosidoBoxes" type="number" value="" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>Trefoils: </span><br>
                                <input name="dosidoBoxes" type="number" value="" placeholder="Number of Boxes">

                    </div>

                        <div>

                            <span>Please fill out the form and click &nbsp &nbsp</span>

                            <input type="submit" value="Get your Cookies" class="getBtn">
                            <!-- Add the action name - value pair -->
                            <input type="hidden" name="action" value="register">

                        </div>



                </fieldset>


            </form>

        </section>
        <footer>
            <?php include 'common/footer.php'; ?>   
        </footer>
    </body>
</html>