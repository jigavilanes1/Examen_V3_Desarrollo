<?php
class Usuario{
    private $id;
    private $usuario;
    private $password;

    public function __construct()
    {
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    
    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function Guardar(){
        $conn = new DataBase();
        $sql = "insert into usuarios(id, usuario, password) values (null,?,?)";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("ss", $this->usuario, $this->password);
        $stmt->execute();
        $id = $stmt->insert_id;
        return ($id);
    }


}

?>