<?php
class Instrument {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM instruments');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $type, $price) {
        $stmt = $this->pdo->prepare('INSERT INTO instruments (name, type, price) VALUES (?, ?, ?)');
        $stmt->execute([$name, $type, $price]);
    }

    public function update($id, $name, $type, $price) {
        $stmt = $this->pdo->prepare('UPDATE instruments SET name = ?, type = ?, price = ? WHERE id = ?');
        $stmt->execute([$name, $type, $price, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM instruments WHERE id = ?');
        $stmt->execute([$id]);
    }
}
?>
