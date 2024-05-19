<?php require 'src/views/templates/header.php'; ?>
<h1>Agregar Nuevo Instrumento</h1>
<form method="post" action="store.php">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required>
    <label for="type">Tipo:</label>
    <input type="text" id="type" name="type" required>
    <label for="price">Precio:</label>
    <input type="number" id="price" name="price" required>
    <button type="submit">Agregar</button>
</form>
<?php require 'src/views/templates/footer.php'; ?>
