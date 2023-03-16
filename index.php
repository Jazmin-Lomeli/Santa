<!DOCTYPE html>
<html>
  <head>
    <title>Santa Claus</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>

 

  <div class="card" style="box-shadow: 0px 0px 10px gray; background-image: url('https://i.gifer.com/7t5M.gif');"> 
    <div class="card-body">
    <h1 class="card-title text-center font-weight-bold" style="color: white;">Santa Claus</h1>
    </div>
    </div>

    <br>

    <div class="container" style="ma-width: 100%">

 

      <div class="row">

 
        <div class="col-sm-12 col-md-4">
        <div class="card" style="box-shadow: 0px 0px 10px gray"> 
            <div class="card-body">

            <div class="row">
                <div class="col-md-8">
          <h2 class="card-title">Renos</h2>
                </div>

                <div class="col-md-4">
          <h2  class="font-weight-bold" id="contador_reno">0</h2>
                </div>
            </div>

          <img src="https://i.pinimg.com/originals/88/bb/97/88bb97748362baa4c1b116b3ee1a589d.gif" class="img-fluid" alt="Renos Navideños">
          <button type="button" class="btn btn-primary btn-block  btn_renos"  id="btn_renos" onclick="contador_renos()">Agregar proceso de Reno</button>
          </div>
          </div>
            <br>
            <div class="card" style="box-shadow: 0px 0px 10px gray">
            <div class="card-body">
         

            <div class="row">
                <div class="col-md-8">
          <h2 class="card-title">Duendes</h2>
                </div>

                <div class="col-md-4">
          <h2 class="font-weight-bold"  id="contador_duende">0</h2>
                </div>
            </div>

          <img src="https://usagif.com/wp-content/uploads/2022/hqgif/christmas-elves-21-dancing-elfs-tranpsarent-background.gif" class="img-fluid" alt="Duendes Navideños">
          <button type="button" class="btn btn-primary btn-block btn_duendes"  id="btn_duendes" onclick="contador_duendes()">Agregar proceso de Duende</button>
          </div>
          </div>
        </div>
       
        <div class="col-md-15">
        <div class="card" style="margin: 50px;box-shadow: 0px 0px 10px gray">
            <div class="card-body">
            
          <h2 id="estatus_santa">Santa Claus Durmiendo</h2>
       

          <img src="https://i.gifer.com/origin/ac/ac6384a6e036b6d80d0c733fee379bd6.gif" class="img-fluid santa_dormido" id="santa_dormido" alt="Santa Claus Dormido">

          <img src="https://www.gratistodo.com/wp-content/uploads/2021/12/Santa-Claus-3.gif" class="img-fluid santa_trineo" id="santa_trineo" hidden = "true" alt="Santa Claus Dormido">

          <img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExYmRkOWFlZTZmZmViMTFhNDk3MzQ2YmIyODc3YjBhNmEzZWNhNjhhMyZjdD1n/2ghnQsSzssPB8J1A3e/giphy.gif" class="img-fluid santa_ayudando" id="santa_ayudando" hidden = "true" alt="Santa Claus Dormido">


          


          </div>
          </div>

        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>

    //funcion de contador de renos
      function contador_renos(){
        var contador_duende = document.getElementById("contador_duende").innerHTML; //contador duendes
        var contador_reno = document.getElementById("contador_reno").innerHTML;  //contador renos

        var btn_duendes = document.getElementById("btn_duendes");  //boton de duendes
         var btn_renos = document.getElementById("btn_renos");  //boton de renos
         var santa_ayudando = document.getElementById("santa_ayudando");  //gif de santa ayudando

         var santa_dormido = document.getElementById("santa_dormido");  //gif de santa dormido

var santa_trineo = document.getElementById("santa_trineo");  //gif de santa en el trineo  


      
        $('#contador_duende').html(0); 
        contador_reno++;

        //if para cambiar los estados de los procesos
          if(contador_reno==9){
        btn_renos.disabled = true;
         $('#contador_duende').html(0); 
         btn_duendes.disabled = true;

         $('#estatus_santa').html("Santa Claus Chambeando"); 
         santa_dormido.hidden = true;
santa_ayudando.hidden = true; 

santa_trineo.hidden = false;

contador_reno=0;

   var intervalID = setInterval(santa_durmiendo, 15000);

      }else{
        $('#contador_duende').html(0); 
        btn_duendes.disabled = true;

      }

      $('#contador_reno').html(contador_reno); 


      }




      //funcion de contador de duendes
      function contador_duendes(){
        var contador_duende = document.getElementById("contador_duende").innerHTML; //contador duendes
        var contador_reno = document.getElementById("contador_reno").innerHTML;  //contador renos

          var btn_duendes = document.getElementById("btn_duendes");  //boton de duendes
          var btn_renos = document.getElementById("btn_renos");  //boton de renos



          var santa_dormido = document.getElementById("santa_dormido");  //gif de santa dormido

var santa_trineo = document.getElementById("santa_trineo");  //gif de santa en el trineo  

var santa_ayudando = document.getElementById("santa_ayudando");  //gif de santa ayudando

          $('#contador_reno').html(0); 

         contador_duende++;
        
          //if para cambiar los estados de los procesos
      if(contador_duende==3){
        btn_duendes.disabled = true;
         $('#contador_reno').html(0); 
         btn_renos.disabled = true;

         $('#estatus_santa').html("Santa Claus ayudando"); 

         santa_dormido.hidden = true;

      santa_trineo.hidden = true;

      santa_ayudando.hidden = false;

      contador_duende=0;

         var intervalID = setInterval(santa_durmiendo, 15000);

      }else{
      
        $('#contador_reno').html(0); 
         btn_renos.disabled = true;
      }

       

      $('#contador_duende').html(contador_duende); 


      }



      function santa_durmiendo(){

        var contador_duende = document.getElementById("contador_duende").innerHTML; //contador duendes
        var contador_reno = document.getElementById("contador_reno").innerHTML;  //contador renos



        var btn_duendes = document.getElementById("btn_duendes");  //boton de duendes
          var btn_renos = document.getElementById("btn_renos");  //boton de renos

        var santa_dormido = document.getElementById("santa_dormido");  //gif de santa dormido
        var santa_trineo = document.getElementById("santa_trineo");  //gif de santa en el trineo
        var santa_ayudando = document.getElementById("santa_ayudando");  //gif de santa ayudando

        $('#estatus_santa').html("Santa Claus Durmiendo"); 

        btn_duendes.disabled = false;
        btn_renos.disabled = false;


        santa_dormido.hidden = false;
        santa_trineo.hidden = true;
        santa_ayudando.hidden= true;

        contador_duende=0;
        contador_reno=0;

        $('#contador_reno').html(0); 
        $('#contador_duende').html(0); 

      }


      
    </script>

  </body>
</html>
