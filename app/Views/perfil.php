<?= view('headprin'); ?>

<style>
    .user-details-container {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: auto; /* Agregamos overflow para permitir el desplazamiento */
        max-height: 300px; /* Altura máxima para el desplazamiento, ajusta según sea necesario */
    }

    .user-details-container h2 {
        color: #333;
    }

    .user-details-container ul {
        list-style: none;
        padding: 0;
    }

    .user-details-container li {
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 10px;
        padding: 10px;
    }
</style>

<div class="user-details-container">
    <?php $session = session()->get('usuario'); ?>
    <h2>Datos del Usuario</h2>
    <p>Nombre: <?= $session['nombre']; ?></p>
    <p>Apellido: <?= $session['apellido']; ?></p>
    <p>Correo: <?= $session['correo']; ?></p>
    <p>Teléfono: <?= $session['telefono']; ?></p>
</div>

<div class="user-details-container">
    <h2>Historial de Compra</h2>
    <?php if (!empty($historialEnvios)) : ?>
        <ul>
            <?php foreach ($historialEnvios as $envio) : ?>
                <li>
                    <p>Provincia: <?= $envio['provincia']; ?></p>
                    <p>Ciudad: <?= $envio['ciudad']; ?></p>
                    <p>Calle: <?= $envio['calle']; ?></p>
                    <p>Piso: <?= $envio['piso']; ?></p>
                    <p>Observaciones: <?= $envio['observaciones']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No hay historial de envíos.</p>
    <?php endif; ?>
</div>

<?= view('footer'); ?>
