<style>
    <?php include __DIR__ . '/template.css'; ?>
</style>
<div class="container">
    <div class='articulos'>
        <div>
            <?php include dirname(__DIR__, 1).'\resumenArticulo\component.php' ?>
        </div>
        <div>
            <?php include dirname(__DIR__, 1).'\resumenArticulo\component.php' ?>
        </div>
        <div>
            <?php include dirname(__DIR__, 1).'\resumenArticulo\component.php' ?>
        </div>
    </div>

    <div class='slide'>
        <button type="submit">Anterior Artículo</button>
        <button type="submit">Siguiente Artículo</button>
    </div>
</div>