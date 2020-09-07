<?php 

class User{
    
    private string $name;
    private string $email;
    private string $password;

    public function __contruct(string $name, string $email, string $password){
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getPassword():string
    {
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }
}

?>