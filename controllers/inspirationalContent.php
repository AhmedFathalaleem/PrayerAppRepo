<?php

class inspirationalContent {
    private $conn;

    public function __construct() {
        $db = new DBConnection;
        $this->conn = $db->conn;
    }

    public function getContent() {
        // Get a random Hadith from the database
        $query = "SELECT * FROM inspireContent ORDER BY RAND() LIMIT 1";
        $result = $this->conn->query($query);
        $content = mysqli_fetch_assoc($result);
        return $content;
    }

    public function printContent() {
        // Print the Hadith
        $content = $this->getContent();
        echo "{$content['content']}";
    }
}

?>
