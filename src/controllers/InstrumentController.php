<?php
require 'src/models/Instrument.php';

class InstrumentController {
    private $instrumentModel;

    public function __construct($pdo) {
        $this->instrumentModel = new Instrument($pdo);
    }

    public function index() {
        $instruments = $this->instrumentModel->getAll();
        require 'src/views/instruments/index.php';
    }

    public function create($name, $type, $price) {
        $this->instrumentModel->create($name, $type, $price);
        header('Location: index.php');
    }

    public function update($id, $name, $type, $price) {
        $this->instrumentModel->update($id, $name, $type, $price);
        header('Location: index.php');
    }

    public function delete($id) {
        $this->instrumentModel->delete($id);
        header('Location: index.php');
    }
}
?>
