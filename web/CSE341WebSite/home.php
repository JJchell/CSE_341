<!DOCTYPE html>

   <html lang="en-us">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home page | James Chell | CSE 3 BYUI</title>
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
   </head>
   <body>
<header>
   <?php include $_SERVER['DOCUMENT_ROOT'] . 'common/header.php'; ?>

            <!-- <div class="top-container">
               <img id="logo" src="images/logo.jpg" alt="my logo" width="150" height="150">
            </div> -->
            <nav>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="assignments.html">CSE 341 Assignments</a></li>
                </ul>
            </nav>
      </header> 
      <main>
         <div class="info">
            <img id="family" src="images/theChells.jpg" alt="me and the fam" >
         </div>
          <div class="info">
           
              My name is James. I live in Keller, Texas with my wife and four children. Keller is in the Dallas/Fort Worth metroplex, which is nice because you get pretty much anything you need.  The down side is that it can feel a bit crowded sometimes.  I grew up in rural Arizona, so I miss the open spaces now and then.  I enjoy riding my motorcycle, cooking, and online gaming, none of which I have much time for this days. 
               
         </div>
      </main>
      <footer>
         <?php include $_SERVER['DOCUMENT_ROOT'] . 'common/footer.php'; ?>
            <!-- <p>&copy; James Chell, All rights reserved.</p>
            <?php echo "The time is " . date("h:i:sa");?>
            <p>Last updated 27 April, 2020</p> -->
         </footer>
   </body>
</html>
