<?php require 'src/views/templates/header.php'; ?>
<h1>Lista de Instrumentos</h1>
<a href="create.php">Agregar Instrumento</a>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($instruments as $instrument): ?>
        <tr>
            <td><?= $instrument['name'] ?></td>
            <td><?= $instrument['type'] ?></td>
            <td><?= $instrument['price'] ?></td>
            <td>
                <a href="update.php?id=<?= $instrument['id'] ?>">Editar</a>
                <a href="delete.php?id=<?= $instrument['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php require 'src/views/templates/footer.php'; ?>
