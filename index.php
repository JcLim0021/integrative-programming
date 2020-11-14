<?php

class Acct
{
    public $name;
    public $username;
    public $email;

    function __construct($name, $username, $email)
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
    }
}

class User extends Acct
{
    function addfriend()
    {
        echo "{$this->name}. Added a friend <br>";
    }
    function poststatus()
    {
        echo "{$this->name}. Posted a status";
    }
}

$freedom=new User('JohnChristopher', 'Kazulara2104', 'johnchristopherlim04@gmail.com');
$freedom->addfriend();
$freedom->poststatus();

?>
