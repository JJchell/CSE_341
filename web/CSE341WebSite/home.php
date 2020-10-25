<!DOCTYPE html>

   <html lang="en-us">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home page | James Chell | CSE 341 BYUI</title>
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
   </head>
   <body>
<header>
   <?php include 'common/header.php'; ?>

      </header> 
      <main>
         <fieldset>
            <div class="homePage">
               <div class="info">
                  <!-- The grid: four columns -->
               <div class="row">
                  <div class="column">
                     <img src="images/archer.jpg" alt="Nature" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                     <img src="images/GSleaders.jpeg" alt="Snow" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                     <img src="images/campfire.jpeg" alt="Mountains" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                     <img src="images/cookie_pickup.jpeg" alt="Lights" onclick="myFunction(this);">
                  </div>
               </div>

               <!-- The expanding image container -->
               <div class="container">
               <!-- Close the image -->
               <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

               <!-- Expanded image -->
               <img id="expandedImg" style="width:100%">

               <!-- Image text -->
               <div id="imgtext"></div>
               </div>
               </div>
               <!-- End the grid: four columns -->
               <div class="info">
               
                  Welcome to Girl Scout troup 3377 
                     
               </div>
            </div>
         </fieldset>
      </main>
      <footer>
         <?php include 'common/footer.php'; ?>
         </footer>
   </body>
</html>
