<?php
if (isset($_COOKIE["username"]) && isset($_COOKIE["pass_hash"])) {
    $name = $_COOKIE["username"];
    $pass_hash = $_COOKIE["pass_hash"];

    try {
        $stmt = $conn->prepare("SELECT salted_hash, privileges FROM users WHERE name='$name'");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $salted_hash = $result["salted_hash"];
        $user_privileges = intval($result["privileges"]);

        if (strcmp(hash("sha256", $salted_hash, false), $pass_hash)==0) {
            $privileges = $user_privileges;
        }
        else {
            $privileges = 3;
        }

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        $privileges = 3;
    }
}
else {
    $privileges = 3;
}
?>