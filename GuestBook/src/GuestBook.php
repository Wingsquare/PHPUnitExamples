<?php
class GuestBook{
    
    public function addGuest($name, $address, $phone){
        $dbhost = "localhost";
        $dbname = "guestbook";
        $dbuser = "root";
        $dbpass = "mysql";
        $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "insert into guestbook(name, address, phone) values ( ?, ?, ?)";
        if($stmt = $mysqli->prepare($sql)){
            if($stmt->bind_param("sss", $name, $address, $phone)){
                if($stmt->execute()){
                    $stmt->close();
                    $mysqli->close();
                }
            }
        }
    }
}