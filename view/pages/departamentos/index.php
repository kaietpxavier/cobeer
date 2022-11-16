<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="../../layout/layout.css">
  <title>DEPARTAMENTOS</title>
</head>

<body>
  <div class="layout">

    <div class="header">pàgina departament
      <?php include '../../../components/header/component.php' ?>
    </div>

    <div class="main">
      <div class="nomdepartament">
        <h1>NOM DEL DEPARTAMENT</h1>
      </div>

      <div>
        <h2>ARTICLES DESTACATS</h2>
      </div>
      <div class="slide">
        <?php include '../../../components/articulosDestacados/component.php' ?>
      </div>

      <div class="articulos">
        <div>
          <?php include '../../../components/articulo_departamento/component.php' ?>
        </div>

        <div>
          <?php include '../../../components/articulo_departamento/component.php' ?>
        </div>
      </div>

    </div>

    <div class="footer">
      <?php include '../../../components/footer/component.php' ?>
    </div>
  </div>
</body>

</html>