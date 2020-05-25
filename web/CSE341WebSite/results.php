<?php
require "common/dbconnect.php";
$db = get_db();
function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function searchQuery($name, $db)
{
    // $db=dbConnection();
    $stmt = $db->prepare('SELECT * FROM scout WHERE first_name = :name');
    //$name= '$name';
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function searchQueryCookie($cookie, $db)
{
    // $db=dbConnection();
    $stmt = $db->prepare('SELECT * FROM cookies WHERE cookie_name = :cookie');
    //$name= '$name';
    $stmt->bindValue(':cookie', $cookie, PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
// If the page loads as a POST request, look for this variable, and if it is set
if (isset($_POST['first_name'])) {
    
    $name = validateInput($_POST['first_name']);
    $rows = searchQuery($name, $db);
    // print_r($rows);
    
}

if (isset($_POST['last_name'])) {
    
    $last_name = validateInput($_POST['last_name']);
    // $rows = searchQuery($searchName, $db);
    // print_r($rows);
}

if (isset($_POST['cookie'])) {
    
    $cookie = validateInput($_POST['cookie']);
    $rowsCookie = searchQueryCookie($cookie, $db);
    // print_r($rows);
}
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result page | James Chell | CSE 341 BYUI</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <?php include 'common/header.php'; ?>
    </header>
    <main>

        <fieldset>
            <p>Your results for: </p>
            <p>Scout name: <?= $name ?></p>
            <p>Last name: <?= $last_name ?></p>
            <p>Cookie: <?= $cookie ?></p>
        </fieldset> <br>
        <fieldset>
        <?php foreach ($rows as $row){
            echo "<p>" . "First name: " . $row['first_name'] . "</p>" .
            "<p>" . "Last name: " . $row['last_name'] . "</p>" .
            "<p>" . "Date of birth: " . $row['date_of_birth'] . "</p>".
            "<p>" . "Email: " . $row['email'] . "</p>".
            "Phone number: " . $row['phone'];
        }?>
        </fieldset> <br>
        <fieldset>
        <?php foreach ($rowsCookie as $row){
            echo "<p>" . "Cookie name: " . $row['cookie_name'] . "</p>" .
            "Cookies on hand: " . $row['cookies_on_hand'];
        }?>
        </fieldset>


        
        
        </div>
    </main>
    <footer>
        <?php include 'common/footer.php'; ?>
    </footer>
</body>
</html>