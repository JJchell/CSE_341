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
        <div class="info">
            <form action="welcome.php" method="post">
                Name: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                Cookie: <input type="text" name="cookie"><br>
                <input type="submit">
            </form>
        </div>
    </main>
        <footer>

            <?php include 'common/footer.php'; ?>

        </footer>
   </body>
</html>