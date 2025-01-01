<?php

include_once __DIR__ . "/database.class.php";

class Faculties extends Database
{

    public function getFaculties()
    {
        $sql = "SELECT * FROM faculties";
        $result = $this->Connection()->query($sql);
        $result->execute();
        return $result->fetAll(PDO::FETCH_ASSOC);
    }
}
