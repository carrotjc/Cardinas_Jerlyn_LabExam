<?php

session_start();

class LoginProcess {

    private array $accounts = [];

    public function __construct($accounts) {
        $this->accounts = $accounts;
    }

    public function authenticate($email, $password) {
        foreach ($this->accounts as $account) {
            if ($account['email'] === $email && $account['password'] === $password) {
                return $account;
            }
        }
        return false;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    
    if (empty($email) || empty($password)) {
        header('Location: login.php?error=empty_fields');
        exit();
    }
    
    $accounts = $_SESSION['accounts'] ?? [];
    
    $login = new LoginProcess($accounts);
    
    $user = $login->authenticate($email, $password);
    
    if ($user) {
        
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['login_success'] = "Welcome back, " . $user['firstname'] . "!";
        
        header('Location: login.php');
        exit();
    } else {
        header('Location: login.php?error=invalid_credentials');
        exit();
    }
}
?>