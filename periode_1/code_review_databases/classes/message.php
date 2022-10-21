<?php

class Message {
    public function __construct() {

    }
    public function insert (string $name, string $email, string $message): bool {
        $sql = "SELECT name, email, message FROM message";
        $mysqli = new mysqli('localhost', 'root', 'root', 'keukenboer');
        $stmt = $mysqli->prepare($sql);
        if($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_object()) {
                echo "{$row->name} ($row->email) ==> {$row->message}<br>";
            }
            return true;
        }
        return false;
    }
}