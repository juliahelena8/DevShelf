<?php
class HomeController
{
    public function index()
    {
        $userModel = new UserModel();
        
        $user = $userModel->getUserById(1);

        global $user;
        
        require_once __DIR__ . '/../views/pages/home.php';
    }
}S