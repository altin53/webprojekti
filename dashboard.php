<?php
session_start();
require 'databaseconnect.php';

// Check if user is logged in as an admin
if (!isset($_SESSION['username']) || $_SESSION['user_type'] !== 'admin') {
    $_SESSION['error'] = "You are not authorized to view this page";
    header('location: login.php');
}

// Delete user if delete button is clicked
if (isset($_POST['delete_user'])) {
    $user_id = $_POST['user_id'];
    $query = "DELETE FROM login WHERE id='$user_id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $_SESSION['success'] = "User deleted successfully";
    } else {
        $_SESSION['error'] = "Failed to delete user";
    }
}

// Get all user data from the login table
$query = "SELECT id, name, email FROM login";
$result = mysqli_query($conn, $query);

// Get all contact form data from the contact table
$query_contact = "SELECT  name, email, textarea FROM contact";
$result_contact = mysqli_query($conn, $query_contact);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Dashboard</title>
</head>
<body>
    <h1 class="heading">Dashboard</h1>
    <?php if (isset($_SESSION['success'])) : ?>
        <div>
            <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION['error'])) : ?>
        <div>
            <?php 
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            ?>
        </div>
    <?php endif ?>

    <table class="tabela">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="user_id" value="<?php echo $row['id'] ?>">
                        
                        <button type="submit" class="deletebutton" name="delete_user">Delete</button>
                       
                    
                    </form>
                </td>
            </tr>
        <?php endwhile ?>
    </table>

    <h2  class="usercontactxt">Contact Form Submissions</h2>
    <table class="tabela">
        <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        <?php while ($row_contact = mysqli_fetch_assoc($result_contact)) : ?>
            <tr>
  
                <td><?php echo $row_contact['name'] ?></td>
                <td><?php echo $row_contact['email'] ?></td>
                <td><?php echo $row_contact['textarea'] ?></td>
            </tr>

            <?php endwhile ?>
       </table>
                  <a class="logoutbutton" href="logout.php"  name="logout" >Log Out</a>

                  <h1 class="opa"></h1>
        </body>
    </html>
