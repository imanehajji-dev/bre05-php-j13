<?php

class AuthController extends AbstractController
{
    public function login() : void
    {
        if(empty($_POST))
        {
            $this->render("login", []);
        }
        else 
        {
            if(isset($_POST["email"]))
            {
                $email = htmlspecialchars($_POST["email"]);
                var_dump($email);
            }
        }
    }
    
     public function notFound() : void
    {
        $this->render("notFound", [
        
        ]);
    }
}


?>
