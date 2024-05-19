<?php include 'includes/header.php'; ?>
<?php include 'config/db.php'; ?>

<div class="container">
    <h1>Bienvenido a la Tienda de Instrumentos Musicales</h1>
    <p>Aquí podrás encontrar los mejores instrumentos musicales a los mejores precios.</p>

    <?php
    $sql = "SELECT * FROM instrumentos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='instrumento'>";
            echo "<h2>" . $row["nombre"] . "</h2>";
            echo "<p>Marca: " . $row["marca"] . "</p>";
            echo "<p>Precio: $" . $row["precio"] . "</p>";
            echo "<p>" . $row["descripcion"] . "</p>";
            echo "<img src='" . $row["imagen"] . "' alt='" . $row["nombre"] . "'>";

            // Enlace para ver la imagen
            echo "<a href='" . $row["imagen"] . "' target='_blank'>Ver Imagen</a>";

            // Enlace para ver el video de YouTube
            $youtube_link = "https://www.youtube.com/watch?v=Rbm6GXllBiw";
            echo "<a href='" . $youtube_link . "' target='_blank'>Ver en YouTube</a>";

            // Enlaces para editar y eliminar
            echo "<a href='crud.php?edit=" . $row["id"] . "'>Editar</a> | ";
            echo "<a href='crud.php?delete=" . $row["id"] . "'>Eliminar</a>";
            
            echo "</div>";
        }
    } else {
        echo "No hay instrumentos disponibles";
    }
    ?>

</div>

<?php include 'includes/footer.php'; ?>
