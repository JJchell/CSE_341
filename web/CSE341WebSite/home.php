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
               <div class="slideshow-container">

                  <div class="mySlides fade">
                     <div class="numbertext">1 / 3</div>
                        <img src="images/archer.jpg" style="width:100%">
                     <div class="text">Archer</div>
                  </div>

                  <div class="mySlides fade">
                     <div class="numbertext">2 / 3</div>
                        <img src="images/campfire.jpeg" style="width:100%">
                     <div class="text">Campfire</div>
                  </div>

                  <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="images/cookie_pickup.jpeg" style="width:100%">
                  <div class="text">Cookies!!</div>
                  </div>

                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>

                  </div>
                  <br>

                  <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                  </div>

                  
               <div class="info">
               
                  Welcome to Girl Scout troup 3377 Lorem ipsum dolor sit amet, 
                  his fabulas eloquentiam cu, sint ludus tacimates te pri. Tale 
                  interesset an mel. Sententiae accommodare in nam, ad usu nominavi 
                  similique. Zril albucius vulputate ius an, delicata disputando ad 
                  sed. An tale electram vis, et duo veri nostrum corrumpit.<br><br>

                  Mel ex quis nostro qualisque. Ne eam magna rationibus, vix ea 
                  consulatu interesset, ad duis debet constituam usu. Mea id etiam 
                  noster possim, te mel purto feugiat urbanitas. Pro nobis aliquid 
                  denique eu, inimicus persequeris usu cu. Ei sit sale erant, audiam 
                  audire percipitur ei eos.
                     
               </div>
            </div>
         </fieldset>
         <script>
                  var slideIndex = 1;
                  showSlides(slideIndex);

                  function plusSlides(n) {
                  showSlides(slideIndex += n);
                  }

                  function currentSlide(n) {
                  showSlides(slideIndex = n);
                  }

                  function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}    
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                  }
                  for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                  }
                  </script>
         
      </main>
      <footer>
         <?php include 'common/footer.php'; ?>
         </footer>
   </body>
</html>
