<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<style>
    .container-fluid{
        
        background: linear-gradient(to right, #dbc051, white, #dbc051);
        width:97.7%;
        margin: 1rem;

    }
    .Titulo{
        /* background:white; */
        /* margin:2rem; */
        text-align:center;
        padding-top:15%;
        padding-bottom:15%;
    }
    .imagen1{
        position:absolute;
        left:-2rem;
        /* padding:0% */
        margin-top:-2%;
        /* width: 100%;
        height:100%; */
        /* max-width: 30%; */
    }
    .imagen2{
        position:absolute;
        /* padding:0%; */
        /* float:right; */
        right: 0rem;
        margin-top: -6%;
        
    }
    .btn:hover { 
        background:green;
        box-shadow: inset 0 0 20px rgba(49, 138, 172, 0.5), 0 0 20px rgba(49, 138, 172, 0.4);
        outline-color: rgba(49, 138, 172, 0);
        outline-offset: 80px;
        text-shadow: 1px 1px 6px #fff; 
        } 
</style>

<body>
    <div class="container-fluid">
        <div class="imagen1">
            <img src="img-index/Decoracion.png" >
        </div>

        <div class="Titulo">
            <h1>Santa Claus Algoritmo Sobre Hilos</h1>
            <br><br><br><br>
            <a href="santa-claus.php" type="button" class="btn btn-danger">Iniciar con el algoritmo</a>
            
            <div class="imagen2">
                <img src="img-index/Decoracion2.png" style="width: 360px;height: 302px;">
            </div>
        </div>

        
    </div>
</body>
</html>