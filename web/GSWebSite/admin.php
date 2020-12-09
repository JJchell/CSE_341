<?php
require "common/dbconnect.php";
$db = get_db();
?>
<?php
session_start();
// if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin'] == false) {
//     header ("Location: scout.php");
// }
?>
<?php
// function validateInput($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
?>

<?php
    $sql = "SELECT * FROM scout;";
    $result = mysqli_query($db, $sql);
    $resultCheck =mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['scout_id, first_name, last_name, user_name, password, email, phone'] . "<br>";
        }
    }
?>

<?php
if (isset($_POST['submitted'])) {
    $add_first_name = $_POST['add_first_name'];
    $add_last_name = $_POST['add_last_name'];
    $add_date_of_birth = $_POST['add_date_of_birth'];
    $add_phone = $_POST['add_phone'];
    $add_email = $_POST['add_email'];
    $add_user_name = $_POST['add_user_name'];
    $add_password = $_POST['add_password'];

    try {
        $query = "INSERT INTO scout(first_name, last_name, date_of_birth, phone, email, user_name, password)
    VALUES(:first_name, :last_name, :date_of_birth, :phone, :email, :user_name, :password)";
        $statement = $db->prepare($query);
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':first_name', $add_first_name, PDO::PARAM_STR);
        $statement->bindValue(':last_name', $add_last_name, PDO::PARAM_STR);
        $statement->bindValue(':date_of_birth', $add_date_of_birth, PDO::PARAM_STR);
        $statement->bindValue(':phone', $add_phone, PDO::PARAM_INT);
        $statement->bindValue(':email', $add_email, PDO::PARAM_STR);
        $statement->bindValue(':user_name', $add_user_name, PDO::PARAM_STR);
        $statement->bindValue(':password', $add_password, PDO::PARAM_STR);
        $statement->execute();
        
    } catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }

}

if (isset($_POST['update'])) {
    $column = $_POST['edit'];
    $change = $_POST['change'];
    $scout_id = $_POST['scout_id'];

    try {
        $query = "UPDATE scout SET $column = :change WHERE scout_id = :id"; 
        $statement = $db->prepare($query);
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        // $statement->bindValue(':column', $column);
        $statement->bindValue(':change', $change, PDO::PARAM_STR);
        $statement->bindValue(':id', $scout_id, PDO::PARAM_INT);
        
        $statement->execute();
    } catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }

}

if (isset($_POST['delete'])) {
    $column = $_POST['edit'];
    $change = $_POST['change'];
    $scout_id = $_POST['scout_id'];

    try {
        $query = "DELETE FROM scout WHERE scout_id = :id"; 
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $scout_id, PDO::PARAM_INT);
        
        $statement->execute();
    } catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }

}

$db = get_db();


?>
<!DOCTYPE HTML>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin page | Girl Scouts | Troup 3377</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
            <div class="top-container">
                <img id="logo" src="images/GS_Logo.png" alt="my logo" width="150" height="150"> 
            </div><br>

            <fieldset>
            <br><div><span>To return to the Scout page click here:  </span><a href="logout.php" id="logoutBtn">Logout</a></div><br>
            </fieldset>
    </header>
    
    <section id="gallery">
        <form method="post" action="">
        <fieldset>
            <legend><span>All Scouts</span></legend>
            <?php
                $sql = "SELECT * FROM scout;";
                $result = mysql_query($db, $sql);
                $resultCheck = mysql_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysql_fetch_assoc($result)) {
                        echo $row['scout_id, first_name, last_name, user_name, password, email, phone'] . "<br>";
                    }
                }
            ?>
        </fieldset>
            <fieldset>
                <legend><span>Add New Scout</span></legend>
                 <?php echo $_SESSION['username']; ?>
                <div class="row">
                    <div class="column">
                        <label><span>First Name: </span><br>
                            <input name="add_first_name" type="text" value="" id="add_first_name" placeholder="First Name" required>
                        </label><br><br>
                        <label><span>Last Name: </span><br>
                            <input name="add_last_name" type="text" value="" id="add_last_name" placeholder="Last Name" required>
                        </label><br><br>
                        <label><span>Date of Birth: </span><br>
                            <input name="add_date_of_birth" type="text" value="" id="add_date_of_birth" placeholder="YYYY-MM-DD" required>
                        </label><br><br>
                        <label><span>Phone Number: </span><br>
                            <input name="add_phone" type="text" value="" id="add_phone" placeholder="" required>
                        </label><br><br>
                        <!-- <div><a href="logout.php" id="logoutBtn">Logout</a></div><br> -->
                    </div>
                    <div>
                        <label><span>Email: </span><br>
                            <input name="add_email" type="text" value="" id="add_email" placeholder="" required>
                        </label><br><br>
                        <label><span>User Name: </span><br>
                            <input name="add_user_name" type="text" value="" id="add_user_name" placeholder="" required>
                        </label><br><br>
                        <label><span>Password: </span><br>
                            <input name="add_password" type="text" value="" id="add_password" placeholder="" required>
                        </label><br><br>
                    </div>
                    <input type="submit" value="Add Scout" class="getBtn" name="submitted">
                    <input type="hidden" name="action" value="register"><br>
        </form>
            </fieldset>

            <fieldset>
            <legend><span>Edit Scout</span></legend>

            <br><div>To edit Scout, fill out the form with the<br>
                     ID# of the scout you wish to edit </div><br>

            <form action="" method="post">
                    <br><label for="edit">Choose what to edit:</label><br>
                    <select id="edit" name="edit">
                        <option value="none">-</option>
                        <option value="first_name">First Name</option>
                        <option value="last_name">Last Name</option>
                        <option value="date_of_birth">Date of Birth</option>
                        <option value="phone">Phone Number</option>
                        <option value="email">Email</option>
                        <option value="user_name">User Name</option>
                        <option value="password">Password</option>
                        
                    </select><br><br>
                    <br><label><span>New value: </span><br>
                    <input type="text" name="change" id="change"><br><br>
                    <label><span>Scout ID: </span><br>
                    <input type="text" name="scout_id" id="scout_id"><br><br>
                    <input type="submit" value="Edit" class="getBtn" name="update">
                        <input type="hidden" name="action" value=""><br>
                </form>

            </fieldset>

            <fieldset>
            <legend><span>Delete Scout</span></legend>
            <form action="" method="post">

            <br><div>To Permanently delete a Scout, fill out the<br> 
                     Field with the ID# of the scout you wish to <br>
                     delete. * WARNING * this can not be undone. </div><br>

            <label><span>Scout Id: </span><br>
                            <input name="scout_id" type="text" value="" id="scout_id" required>
                        </label><br><br>
                        
                    <input type="submit" value="Delete" class="getBtn" name="delete">
                        <input type="hidden" name="action" value=""><br>
                </form>

            </fieldset>
        </form>
    </section>
    <footer>
        <?php include 'common/footer.php'; ?>
    </footer>
</body>
</html>