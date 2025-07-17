<?php

//Base class
class User {
    protected $name;
    protected $email;

    public function __construct($name, $email) {
        $this->name  = $name;
        $this->email = $email;
    }

    // Encapsulation: getters and setters
    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getDetails() {
        return "User: {$this->name}, Email: {$this->email}";
    }
}

//Subclass (Inheritance)
class Admin extends User {
    private $adminLevel;

    public function __construct($name, $email, $adminLevel = 1) {
        parent::__construct($name, $email);
        $this->adminLevel = $adminLevel;
    }

    public function getDetails() {
        return "Admin: {$this->name}, Level: {$this->adminLevel}";
    }
}

//A manager class (composition)
class UserManager {
    private $users = [];

    public function addUser(User $user) {
        $this->users[] = $user;
    }

    public function showAllUsers() {
        foreach ($this->users as $user) {
            echo $user->getDetails() . "<br>";
        }
    }
}

//Testing the OOP setup
$u1 = new User("Praroop", "praroop@example.com");
$u2 = new User("Alice", "alice@example.com");
$admin = new Admin("Bob", "bob@example.com", 3);

// Managing users
$manager = new UserManager();
$manager->addUser($u1);
$manager->addUser($u2);
$manager->addUser($admin);

//Show all user details
$manager->showAllUsers();
?>
