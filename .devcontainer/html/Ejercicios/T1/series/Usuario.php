<?php

class Usuario
{
    public $email;
    public $password;
    public function __construct($email, $password, )
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function __sleep(): array
    {
        return ['email', 'password'];
    }

    public function __wakeup(){
        $this->email = $email;
        $this->password = $password;
    }
}

?>