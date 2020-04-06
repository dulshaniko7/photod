<?php

class Session
{

    private $sign_in = false;
    public $user_id;

    function __construct()
    {
        session_start();
        $this->check_is_login();
       // echo "user id ".$_SESSION['user_id'];
    }

    public function is_signed_in(){
        return $this->sign_in;
    }

    public function check_is_login(){
        if(isset($_SESSION['user_id'])){
            $this->user_id = $_SESSION['user_id'];
            $this->sign_in = true;
        }
        else{
            unset($this->user_id);
            $this->sign_in= false;
        }
    }


    public function login($user){
        if($user){
                    $this->user_id = $_SESSION['user_id'] = $user->id;
                    $this->sign_in=true;
        }

    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->sign_in = false;
    }

}

$session = new Session();
