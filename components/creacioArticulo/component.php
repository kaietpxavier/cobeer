<style> <?php include __DIR__.'/template.css'; ?> </style>
<div class="crearArticulo">
    <!-- ESTO SE PODRA MEJORAR CON PHP  -->
    <!-- Deberia cambiar el nombre de esta class, a algo como fotoCreacionArt -->
    <div class="foto">
        <!-- FALTA ESPECIFICAR DONDE SE GUARDARA ESTA IMAGEN CUANDO SE HAGA SUBMIT -->
        <form action="XXXXX.php">
            <input type="file" id="myFile" name="imgCrearArticulo">
            <input type="submit">
        </form>
        <img src=«mifoto.php» />
    </div>
    <div class="texto">
        <form action="xxxx.php">
            Titulo del artículo: <input type="text" name="tituloArti"><br>
            <textarea id="noticia" name="noticia" rows="20" cols="50"></textarea>
            <br>
            Tag al que asociar: <input type="text" name="nombreTag"><br>
            <input type="submit" value="Guardar">
        </form>
    </div>
</div>
