<?php 

class User{
    
    private $id;
    private $name;
    private $email;
    private $password;
    private $created_at;

    public function __contruct(string $name, string $email, string $password){
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getCreatedAt(){
        return $this->created_at;
    }

    public function setCreatedAt($date){
        $this->created_at = $date; 
    }

    public function findByPk($id){
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM users WHERE id = :ID", array(":ID"=>$id));
        if(count($result) > 1){
            return "Usuário não encontrado";
        }
        $row = $result[0];
        $this->setName($row['name']);
        $this->setEmail($row['email']);
        $this->setCreatedAt(new DateTime($row['created_at']));
        $this->setId($row['id']);
        $this->setPassword($row['password']);

        return $this->__toString();
    }

    public function __toString(){
        return json_encode(array(
            "name"=>$this->getName(),
            "email"=>$this->getEmail(),
            "created_at"=>$this->getCreatedAt()->format('d/m/Y H:i:s'),
            "id"=>$this->getId(),
            "password"=>$this->getPassword()
        ));
    }
}


?>