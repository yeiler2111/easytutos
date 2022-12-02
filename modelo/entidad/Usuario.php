<?php


/**
 * Usuario
 */
class Usuario
{
    private $id;
    private $nombre;
    private $username;
    private $password;
    private $pp;

    public function __construct($id, $nombre, $username, $password, $pp){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->username = $username;
        $this->password = $password;
        $this->pp = $pp;

    }
    

    public function getId()
    {
        return $this->id;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }


    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPp($pp)
    {
        $this->pp = $pp;
        return $this;
    }

    public function getPp()
    {
        return $this->pp;
    }

        
    public function toArray() {
        $vars = get_object_vars ( $this );
        $array = array ();
        foreach ( $vars as $key => $value ) {
            $array [ltrim ( $key, '_' )] = $value;
        }
        return $array;
    }
}

