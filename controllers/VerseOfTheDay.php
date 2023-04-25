<?php

class VerseOfTheDay {
    private $conn;

    public function __construct() {
        $db = new DBConnection;
        $this->conn = $db->conn;
    }

    public function getVerse() {
        // Get a random verse from the database
        $query = "SELECT * FROM verses ORDER BY RAND() LIMIT 1";
        $result = $this->conn->query($query);
        $verse = mysqli_fetch_assoc($result);
        return $verse;
    }

    public function printVerse() {
        // Print the verse
        $verse = $this->getVerse();
        echo "{$verse['verse']}";
    }
}

?>
