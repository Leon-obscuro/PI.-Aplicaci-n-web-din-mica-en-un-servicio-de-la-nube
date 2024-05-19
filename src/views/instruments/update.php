<?php require 'src/views/templates/header.php'; ?>
<h1>Actualizar Instrumento</h1>
<form method="post" action="update.php?id=<?= $instrument['id'] ?>">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" value="<?= $instrument['name'] ?>" required>
    <label for="type">Tipo:</label>
    <input type="text" id="type" name="type" value="<?= $instrument['type'] ?>" required>
    <label for="price">Precio:</label>
    <input type="number" id="price" name="price" value="<?= $instrument['price'] ?>" required>
    <button type="submit">Actualizar</button>
</form>
<?php require 'src/views/templates/footer.php'; ?>
