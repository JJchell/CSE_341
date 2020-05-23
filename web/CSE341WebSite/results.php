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
        
        <p>Your results: </p>
                <p>Scout name: <?=$name ?></p>
                <p>E-mail: <?=$email ?></p>
                <p>Cookie: <?=$cookie ?></p>
        
        </fieldset>
            

        </div>
    </main>
        <footer>

            <?php include 'common/footer.php'; ?>

        </footer>
   </body>
</html>