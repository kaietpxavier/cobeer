<style>
    <?php include __DIR__ . '/template.css'; ?>
</style>

<div class="departamento">
        <div class='artDestacados'>
            <?php include '..\..\components\articulosDestacados\component.php' ?>
            <button>Añadir</button>
            <button>Editar</button>
        </div>

        <div class='articuloDepartamento'>>
            <div>
                <?php include '..\..\components\resumenArticulo\component.php' ?>
                <button type='submit'>Añadir</button>
                <button type='submit'>Editar</button>
            </div>

            <div>
                <?php include '..\..\components\resumenArticulo\component.php' ?>
                <button type='submit'>Añadir</button>
                <button type='submit'>Editar</button>
            </div>
        </div>
    <div class='confirmarCambios'>
        <button>Confirmar cambios</button>
    </div>
</div>