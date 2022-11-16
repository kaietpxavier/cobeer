<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../layout/layout.css">
    <title>Cobeer</title>
</head>
<body>
<div class="layout">

    <header>
        <!-- Componente header -->
        <?php include '../../../components/header/component.php' ?>
    </header>

    <main>
        <!-- Componente buscador -->
        <?php include '../../../components/buscador/component.php' ?>
        
        <section>
            <!-- Componente artículos -->
            <?php include '../../../components/articulosDestacados/component.php' ?>
        </section>

    </main>
    
    <footer>
        <!-- Componente footer -->
        <?php include '../../../components/footer/component.php' ?>
    </footer>

</body>
</html>