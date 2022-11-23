<?php
class Entity_User
{
    public $username;
    public $Password;

    public function __construct($username, $Password)
    {
        $this->username = $username;
        $this->Password = $Password;
    }
}
?>