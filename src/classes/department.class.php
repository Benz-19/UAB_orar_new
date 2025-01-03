<?php

include_once __DIR__ . "/database.class.php";

class Department extends Database
{
    public function getDepartment($facultyId)
    {
        $sql = $this->Connection()->prepare("SELECT * FROM department WHERE faculty_id = :faculty_id");
        $sql->bindParam(":faculty_id", $facultyId);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC); //
    }

    public function getDepartmentId($departmentName)
    {
        $stmt = $this->Connection()->prepare("SELECT * FROM department WHERE name = :deptname");
        $stmt->bindParam(":deptname", $departmentName);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row ? $row['id'] : null;
    }
}
