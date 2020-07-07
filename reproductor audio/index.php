<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="externos/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Reproductor</title>
</head>
<script src="externos/vue.js"></script>
<body>
    <div class="container">
        <center>
        <div id="reproductor"> 
            <div class="audio">
                <h1>{{cancion}}</h1>
                <audio v-bind:src="direccion + cancion" preload="none" id="audio"></audio>
                <br><br>
                <button v-if="icon=='fa fa-play'" v-on:click="reproducir()"><i v-bind:class="icon"></i></button>
                <button v-else v-on:click="pausar()"><i v-bind:class="icon"></i></button>
            </div>
            <h1>{{titulo}}</h1>
            <br><br>
            <button v-on:click="titulo='Canciones'">Canciones</button>
            <button v-on:click="titulo='Agregar cancion'">Agregar cancion</button>
            <br><br><br>
            <div class="lista" v-show="titulo=='Canciones'">
                <ul>
                    <?php
                    $direccion="musica/";
                    $open = opendir($direccion);

                    while ($archivos = readdir($open)) {
                        if ($archivos != "." && $archivos != "..") {
                    ?>
                    <li><a href="#" v-on:click="cancion='<?php echo $archivos; ?>'"><?php echo $archivos; ?></a></li>
                    <?php } } ?>
                </ul>
            </div>
            <div class="form" v-show="titulo=='Agregar cancion'" >
                <form action="inserMusica.php" method="post"     enctype="multipart/form-data">
                    <input type="file" name="file" id="">
                    <br><br><br>
                    <input type="submit" value="Agregar cancion" name="submit" >
                </form>
            </div>
        </div>
        </center>
    </div>
    <script src="externos/logica.js"></script>
</body>
</html>