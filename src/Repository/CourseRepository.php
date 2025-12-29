<?php
// require '../Database/DatabaseConnection-1.php';
class CourseRepository extends DatabaseConnection_1{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function create($titre, $volumeHoraire)
    {
        $sql = "INSERT INTO courses (titre, volumeHoraire) VALUES ('asas','scasdc')";
        $stmt = $this->conn->prepare($sql)
        ->execute($titre);
        return ;
    }
    public function read()
    {
        $sql = "SELECT * FROM courses";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function update($id, $titre, $volumeHoraire)
    {
        $sql = "UPDATE courses SET titre = ?, volumeHoraire = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM courses WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
}