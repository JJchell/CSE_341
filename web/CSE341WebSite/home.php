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
                     <img src="images/archer.jpg" alt="Archer" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                     <img src="images/GSleaders.jpeg" alt="Leaders" onclick="myFunction(this);">
                  </div>
                  <!-- <div class="column">
                     <img src="images/campfire.jpeg" alt="Mountains" onclick="myFunction(this);">
                  </div> -->
                  <div class="column">
                     <img src="images/cookie_pickup.jpeg" alt="Cookies!" onclick="myFunction(this);">
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
               
                  Welcome to Girl Scout troup 3377 Lorem ipsum dolor sit amet, 
                  his fabulas eloquentiam cu, sint ludus tacimates te pri. Tale 
                  interesset an mel. Sententiae accommodare in nam, ad usu nominavi 
                  similique. Zril albucius vulputate ius an, delicata disputando ad 
                  sed. An tale electram vis, et duo veri nostrum corrumpit.<br>

                  Mel ex quis nostro qualisque. Ne eam magna rationibus, vix ea 
                  consulatu interesset, ad duis debet constituam usu. Mea id etiam 
                  noster possim, te mel purto feugiat urbanitas. Pro nobis aliquid 
                  denique eu, inimicus persequeris usu cu. Ei sit sale erant, audiam 
                  audire percipitur ei eos.
                     
               </div>
            </div>
         </fieldset>
         <script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>
      </main>
      <footer>
         <?php include 'common/footer.php'; ?>
         </footer>
   </body>
</html>
