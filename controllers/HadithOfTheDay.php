<?php

class HadithOfTheDay {
    private $conn;

    public function __construct() {
        $db = new DBConnection;
        $this->conn = $db->conn;
    }

    public function getHadith() {
        // Get a random Hadith from the database
        $query = "SELECT * FROM ahadith ORDER BY RAND() LIMIT 1";
        $result = $this->conn->query($query);
        $hadith = mysqli_fetch_assoc($result);
        return $hadith;
    }

    public function printHadith() {
        // Print the Hadith
        $hadith = $this->getHadith();
        echo "{$hadith['hadith']}";
    }
}

?>
