<?php
namespace customer;
class customer
{
    private $firstname;
    private $lastname;
    private $email;

    public function getho(){
        return $this->firstname;
    }
    public function getten(){
        return $this->lastname;
    }
    public function getemail(){
        return $this->email;
    }
    public function setinfo($ho,$ten,$mail){
        $this->firstname = $ho;
        $this->lastname = $ten;
        $this->email = $mail;
    }
    public function getinfo(){
        echo " họ : {$this->getho()} <br>
               tên : {$this->getten()} <br>
               email: {$this->getemail()}<br>";
    }
}

?>