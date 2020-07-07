<?php 

if (isset($_POST['submit'])) {

    $name_tmp = $_FILES['file']['tmp_name']; 
    $musica = $_FILES['file']['name'];
    $carpeta = "musica/";
    //$direccion = $carpeta.$newFileName;


    if (move_uploaded_file($name_tmp, $carpeta.$musica)) {
        header("Location: index.php");
    }else {
        echo "Error";
    }
    

}



?>