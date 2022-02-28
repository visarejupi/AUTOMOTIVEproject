<?php

class auth {
    public $privileges;
    public $user;

    public function __construct($conn) {
        if (isset($_COOKIE["username"]) && isset($_COOKIE["pass_hash"])) {
            $name = $_COOKIE["username"];
            $pass_hash = $_COOKIE["pass_hash"];
            $this->user = $name;
            try {
                $stmt = $conn->prepare("SELECT salted_hash, privileges FROM users WHERE name='$name'");
                $stmt->execute();
        
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $salted_hash = $result["salted_hash"];
                $user_privileges = intval($result["privileges"]);
        
                if (strcmp(hash("sha256", $salted_hash, false), $pass_hash)==0) {
                    $this->privileges = $user_privileges;
                }
                else {
                    $this->privileges = 3;
                }
        
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
                $this->privileges = 3;
            }
        }
        else {
            $this->privileges = 3;
            $this->user = "";
        }
    }
 
}
?>