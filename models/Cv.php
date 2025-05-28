<?php
class Cv {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function save($data, $userId) {
        $stmt = $this->pdo->prepare("
        INSERT INTO cvs (user_id, name, email, phone, summary, experience, education, template, profile_picture)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
        return $stmt->execute([
            $userId,
            $data['name'],
            $data['email'],
            $data['phone'],
            $data['summary'],
            $data['experience'],
            $data['education'],
            $data['template'],
            isset($data['profile_picture']) ? $data['profile_picture'] : null
        ]);
    }


    public function getAllByUser($userId) {
        $stmt = $this->pdo->prepare("SELECT * FROM cvs WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }

    public function getById($id, $userId) {
        $stmt = $this->pdo->prepare("SELECT * FROM cvs WHERE id = ? AND user_id = ?");
        $stmt->execute([$id, $userId]);
        return $stmt->fetch();
    }
}
