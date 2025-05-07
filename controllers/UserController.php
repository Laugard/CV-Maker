<?php
// controllers/UserController.php

class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->userModel->login($_POST['email'], $_POST['password'])) {
                header('Location: index.php'); // ✅ relative
                exit;
            } else {
                $error = "Login failed.";
                require dirname(__DIR__) . '/views/auth/login.php';
            }
        } else {
            require dirname(__DIR__) . '/views/auth/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->userModel->register($_POST['email'], $_POST['password']);
            header('Location: index.php?page=login'); // ✅ relative
            exit;
        } else {
            require dirname(__DIR__) . '/views/auth/register.php';
        }
    }

    public function logout() {
        $this->userModel->logout();
        header('Location: index.php?page=login'); // ✅ relative
    }
}
