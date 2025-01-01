<?php

include_once __DIR__ . "/database.class.php";

class Schedule extends Database
{

    public function getSchedule($departmentId, $title)
    {

        $stmt = $this->Connection()->prepare("SELECT * FROM schedule WHERE department_id = :deptId AND tltle = :title");
        $stmt->bindParam(":deptId", $departmentId);
        $stmt->bindParam(":title", $title);

        if (!$stmt->execute()) {
            print_r($stmt->errorInfo()); //displays any SQL errors
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
