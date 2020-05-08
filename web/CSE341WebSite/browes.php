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
            <form method="post" action="shoppingCart.php">

                <fieldset>
                    <legend><span>Order your Cookies</span></legend>

                    <div class="row">

                        <div class="column">

                            <label><span>First Name: </span><br>
                                <input name="fName" type="text" value="" id="fName" placeholder="" required>
                            </label><br><br>

                            <label><span>Last Name: </span><br>
                                <input name="lName" type="text" value="" id="lName" placeholder="" required>
                            </label><br><br>

                            <label><span>Address: </span><br>
                                <input name="address" type="text" value="" id="address" placeholder="" required>
                            </label><br><br>

                            <label><span>Phone Number: </span><br>
                                <input name="phone" type="text" value="" id="phone" placeholder="" required>
                            </label><br><br>

                            <label><span>Caramel deLites: </span><br>
                                <input name="caramelDelites" type="number" id="caramelDelites" value="" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>Peanut Butter Sandwich: </span><br>
                                <input name="pbsandwich" type="number" value="" id="pbsandwich" placeholder="Number of Boxes">
                            </label><br><br>

                        </div>

                            <label><span>Peanut Butter Patties: </span><br>
                                <input name="pbpatties" type="number" value="" id="pbpatties" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>Thin Mints: </span><br>
                                <input name="thinmint" type="number" value="" id="thinmint" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>Shortbread: </span><br>
                                <input name="shortbread" type="number" value="" id="shortbread" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>Thanks-a-lot: </span><br>
                                <input name="thanksalot" type="number" value="" id="thanksalot" placeholder="Number of Boxes">
                            </label><br><br>

                            <label><span>Lemonades: </span><br>
                                <input name="lemonades" type="number" value="" id="lemonades" placeholder="Number of Boxes"><br><br>

                            <label><span>S'mores: </span><br>
                                <input name="smore" type="number" value="" id="smore" placeholder="Number of Boxes">

                                </label>

                                </div>


                </fieldset>

                <fieldset>

                    <textarea id="comments" name="comments" rows="4" cols="50" placeholder="special instructions or comments"></textarea>
                    <br />

                    <span>Please fill out the form and click &nbsp &nbsp</span>

                    <input type="submit" value="Shopping Cart" class="getBtn">
                    <input type="hidden" name="action" value="register"><br>

                </fieldset>


            </form>

        </section>
        <footer>
            <?php include 'common/footer.php'; ?>   
        </footer>
    </body>
</html>