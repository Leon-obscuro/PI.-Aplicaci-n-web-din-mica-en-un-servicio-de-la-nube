<?php require '../templates/header.php'; ?>

<h2>Eliminar Instrumento</h2>
<p>¿Estás seguro de que quieres eliminar este instrumento?</p>
<form method="post" action="delete.php">
    <button type="submit">Eliminar</button>
    <a href="index.php">Cancelar</a>
</form>

<?php require '../templates/footer.php'; ?>
