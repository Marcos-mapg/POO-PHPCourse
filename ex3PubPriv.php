<?php
class Server{
    public $serverName = "NO_SERVER_NAME";
    public $userName = "NO_USER_NAME";
    private $password = "UNDEFINED";

    public function __construct($serverName, $userName, $password){
        $this->serverName = $serverName;
        $this->userName = $userName;
        $this->password = $password;
        //echo "SERVERNAME"-$serverName."-USERNAME-".$userName."-PASSWORD-".$password;
    }

    private function formatPasswordPreview(){
        $formated_password = $this->password;
        if ($this->password != "UNDEFINED"){
            $half_pass = intval(strlen( $this->password )/2)*-1;
            $formated_password = "[***]".substr($this->password,$half_pass);
        }

        return $formated_password;
    }

    private function format(){
        $message = "Server name : " . $this->serverName . "\n".
            "User name: " . $this->userName . "\n" .
            "Password: " . $this->formatPasswordPreview();
        return $message;
    }

    public function showData(){
        echo $this->format();
    }
}
    $server = new Server("S-Unix2", "JuanPerez", "123456");
    echo "-SERVER_NAME : " . $server->serverName . "\n";
    echo "-USER_NAME : " . $server->userName . "\n";
    //echo "PASSWORD : " . $server->password . "\n"; //Exception no accesible private property
    $server->showData();


?>