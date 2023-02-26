<?php
session_start();
require 'databaseconnect.php';

class Login {
    private $conn;
    private $username;
    private $password;
    private $errors;

    public function __construct($conn) {
        $this->conn = $conn;
      
        $this->errors = array();
    }

    public function login() {
        if (isset($_POST['loginsubmit'])) {
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];

            if (empty($this->username)) {
                $this->errors['username'] = "Username required";
                echo"username required";
            }

            if (empty($this->password)) {
                $this->errors['password'] = "Password required";
                echo "password required";
            }

            if (empty($this->errors)) {
                $query = "SELECT * FROM login WHERE name='$this->username' AND password='$this->password'";
                $results = mysqli_query($this->conn, $query);
   
                if (mysqli_num_rows($results) == 1) {
                    $row = mysqli_fetch_assoc($results);
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] = $this->username;
                    $_SESSION['user_type'] = $row['role'];
                    if ($row['role'] == 'admin') {
                        $_SESSION['success'] = "You are now logged in as an admin";
                        header('location: dashboard.php');
                    } else {
                        $_SESSION['success'] = "You are now logged in";
                        header('location: products.php');
                    }
                } else {
                    $this->errors['login_fail'] = "Wrong username/password combination";
                    echo 'wrong username or password';
                }
            }
        }
    }

    public function getErrors() {
        return $this->errors;
    }
}

$login = new Login($conn);
$login->login();


