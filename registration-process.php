<?php
session_start();

class Accounts {
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;

    public function __construct($firstname, $lastname, $email, $password) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }
}

class Registration_process {
    private array $accounts = [];

    public function register($firstname, $lastname, $email, $password) {
        
        foreach ($this->accounts as $account) {
            if ($account->email === $email) {
                return false;
            }
        }
        
        $newAccount = new Accounts($firstname, $lastname, $email, $password);
        $this->accounts[] = $newAccount;
        return true;
    }
    
    public function getAccounts() {
        return $this->accounts;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
    $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        header('Location: ../register.php?error=empty_fields');
        exit();
    }
    
    $registration = new Registration_process();
    
    if ($registration->register($firstname, $lastname, $email, $password)) {
        
        if (!isset($_SESSION['accounts'])) {
            $_SESSION['accounts'] = [];
        }
        $_SESSION['accounts'][] = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $password
        ];
        
        $_SESSION['register_success'] = "Account created successfully! Please log in.";
        
        header('Location: register.php?success=registered');
        exit();
    } else {
        header('Location: register.php?error=email_exists');
        exit();
    }
}
?>