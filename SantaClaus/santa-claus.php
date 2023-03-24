<!DOCTYPE html>
<html>
  <head>
    <title>Santa Claus</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    
  </head>
  <body>

 

  <div class="card" style="box-shadow: 0px 0px 10px gray; background-image: url('https://i.gifer.com/7t5M.gif');"> 
    <div class="card-body">
    <h1 class="card-title text-center font-weight-bold" style="color: white;">Santa Claus</h1>
    </div>
    </div>

  <button type="button" class="btn btn-info rounded-circle" data-toggle="modal" data-target="#exampleModal"  style="margin:10px;width:50px; height: 50px;"> <i class="fa fa-info"></i> </button>

    <br>

    <div class="container" >

 

      <div class="row">

 
        <div class="col-sm-12 col-md-4">
        <div class="card" style="box-shadow: 0px 0px 10px gray"> 
            <div class="card-body">

            <div class="row">
                <div class="col-md-8">
          <h2 class="card-title"> <button type="button" class="btn btn-info rounded-circle" data-toggle="modal" data-target="#RenoModal"  style="width:35px; height: 35px;"> <i class="fa fa-info"></i> </button> Renos</h2>
                </div>

                <div class="col-md-4">
          <h2  class="font-weight-bold" id="contador_reno">0</h2>
                </div>
            </div>

            <img src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExNzM0NGRlYTQ3OWU5NTM0MDUxMDBhZWU0ZTJlMjFhNTQyZWM3OTllMCZjdD1z/mDYNBM8FAr1BXJJpT7/giphy.gif" style="height: 35vh;" id="renos_durmiendo" alt="Renos durmiendo">

          <img src="https://i.pinimg.com/originals/88/bb/97/88bb97748362baa4c1b116b3ee1a589d.gif" class="img-fluid" id="renos_chambeando" hidden="true" alt="Renos Navideños">
          <button type="button" class="btn btn-primary btn-block  btn_renos"  id="btn_renos" onclick="contador_renos()">Agregar proceso de Reno</button>
          <button type="button" class="btn btn-danger btn-block btn_renos_despertar"  id="btn_renos_despertar" onclick="despertar_renos_santa()"  hidden="true">Despertar a santa</button>
         
          </div>
          </div>
            <br>
            <div class="card" style="box-shadow: 0px 0px 10px gray">
            <div class="card-body">
         

            <div class="row">
                <div class="col-md-8">
          <h2 class="card-title"> <button type="button" class="btn btn-info rounded-circle" data-toggle="modal" data-target="#DuendeModal"  style="width:35px; height: 35px;"> <i class="fa fa-info"></i> </button> Duendes</h2>
                </div>

                <div class="col-md-4">
          <h2 class="font-weight-bold"  id="contador_duende">0</h2>
                </div>
            </div>

          <img src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExNzM0NGRlYTQ3OWU5NTM0MDUxMDBhZWU0ZTJlMjFhNTQyZWM3OTllMCZjdD1z/mDYNBM8FAr1BXJJpT7/giphy.gif" style="height: 35vh;" id="duendes_durmiendo" alt="Duendes durmiendo">


          <img src="https://usagif.com/wp-content/uploads/2022/hqgif/christmas-elves-21-dancing-elfs-tranpsarent-background.gif" class="img-fluid" id="duendes_chambeando" hidden="true" alt="Duendes Navideños">
          <button type="button" class="btn btn-primary btn-block btn_duendes"  id="btn_duendes" onclick="contador_duendes()">Agregar proceso de Duende</button>
           <button type="button" class="btn btn-danger btn-block btn_duendes_despertar"  id="btn_duendes_despertar" onclick="despertar_duendes_santa()" hidden="true">Despertar a santa</button>
         
        </div>
          </div>
        </div>
       
        <div class="col-md-15">

        <h1 class="font-weight-bold" style="margin-left:40px;">Hilos corriendo</h1>
        <h3 style="margin-left:40px;" id="hilos_corriendo">Ninguno</h3>

        <div class="card" style="margin: 50px;box-shadow: 0px 0px 10px gray">


            <div class="card-body">
              <div  class="row">
                <div class="col-sm-1">
              <button type="button" class="btn btn-info rounded-circle" data-toggle="modal" data-target="#SantaModal"  style="width:35px; height: 35px;"> <i class="fa fa-info"></i> </button>
            </div>

              <div class="col-md-9">
              <h2 id="estatus_santa">Santa Claus Durmiendo</h2>
            </div>
          </div>

          <img src="https://i.gifer.com/origin/ac/ac6384a6e036b6d80d0c733fee379bd6.gif" class="img-fluid santa_dormido" id="santa_dormido" alt="Santa Claus Dormido">

          <img src="https://www.gratistodo.com/wp-content/uploads/2021/12/Santa-Claus-3.gif" class="img-fluid santa_trineo" id="santa_trineo" hidden = "true" alt="Santa Claus Dormido">

          <img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExYmRkOWFlZTZmZmViMTFhNDk3MzQ2YmIyODc3YjBhNmEzZWNhNjhhMyZjdD1n/2ghnQsSzssPB8J1A3e/giphy.gif" class="img-fluid santa_ayudando" id="santa_ayudando" hidden = "true" alt="Santa Claus Dormido">


          


          </div>
          </div>

        </div>
      </div>
    </div>


       <!-- Modal de información del equipo-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Información del equipo</h5>
        </div>
        <div class="modal-body text-center pt-2">

          <h5>Universidad de Guadalajara</h5>
          <h6> Centro Universitario de los Altos</h6>

          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Escudo_UdeG.svg/441px-Escudo_UdeG.svg.png"
            class="rounded mx-auto d-block pt-2" alt="..." style="width:10em;height:12rem">

          <h5>Sistemas Concurrentes y Distribuidos</h5>
          <h6> Integrantes: </h6>

          <div style="list-style-type:square; line-height: 20%; ">

            <h6> Jazmin</h6>
            <h6> Aarón Yael</h6>
            <h6> Jacky </h6>
            <h6> Cielo </h6>


          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

        <!-- Modal de Reno-->
        <div class="modal fade" id="RenoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hilo de Renos</h5>
              </div>
              <div class="modal-body text-center pt-2">
      
             
                  <h6> Este es el hilo de renos, deben de llegar a 9 renos para poder llamar a Santa y repartir regalos </h6>
      
      
                </div>
      
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

            <!-- Modal de Duendes-->
            <div class="modal fade" id="DuendeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hilo de Duendes</h5>
                  </div>
                  <div class="modal-body text-center pt-2">
          
                 
                      <h6> Este es el hilo de duendes, deben de llegar a 3 duendes para poder llamar a Santa para que les ayude a crear regalos </h6>
          
          
                    </div>
          
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>


            
            <!-- Modal de Santa-->
            <div class="modal fade" id="SantaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hilo de Santa Claus</h5>
                  </div>
                  <div class="modal-body text-center pt-2">
          
                 
                      <h6> Este es el hilo de santa, normalmente está durmiendo, pero se pone a chambear cuando llegan los 9 renos y tambien ayuda a los duendes cuando son por lo menos 3 que necesitan de su ayuda para hacer regalos </h6>
          
          
                    </div>
          
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <!--Script con todos los procedimientos del programa de santa-->
    <script>

    //funcion de contador de renos
      function contador_renos(){
        var contador_duende = document.getElementById("contador_duende").innerHTML; //contador duendes
        var contador_reno = document.getElementById("contador_reno").innerHTML;  //contador renos

        var btn_duendes = document.getElementById("btn_duendes");  //boton de duendes
         var btn_renos = document.getElementById("btn_renos");  //boton de renos
         var santa_ayudando = document.getElementById("santa_ayudando");  //gif de santa ayudando

         var renos_durmiendo = document.getElementById("renos_durmiendo");  //gif de renos durmiendo
          var renos_chambeando = document.getElementById("renos_chambeando");  //gif de renos chambeando

         var santa_dormido = document.getElementById("santa_dormido");  //gif de santa dormido

var santa_trineo = document.getElementById("santa_trineo");  //gif de santa en el trineo  

 var btn_renos_despertar = document.getElementById("btn_renos_despertar");  //boton de despertar a santa con renos

      
        $('#contador_duende').html(0); //mostrar contador de duende a 0
        contador_reno++;

        renos_durmiendo.hidden= true;
        renos_chambeando.hidden= false;

        //if para cambiar los estados de los procesos
          if(contador_reno==9){
        btn_renos.disabled = true; 
         btn_renos_despertar.disabled = false;
        btn_renos_despertar.hidden = false;

      }else{
        $('#contador_duende').html(0); 
        btn_duendes.disabled = true;

      }

      $('#hilos_corriendo').html("Renos"); 

      $('#contador_reno').html(contador_reno); // se muestra el contador en el contador de renos


      }

      //función para despertar a santa para chambear en los trineos
      function despertar_renos_santa(){
 $('#contador_duende').html(0); 
         btn_duendes.disabled = true;
           btn_renos_despertar.disabled = true;

           
           $('#hilos_corriendo').html("Santa y Renos"); 

         $('#estatus_santa').html("Santa Claus Chambeando"); 
         santa_dormido.hidden = true;
santa_ayudando.hidden = true; 

santa_trineo.hidden = false;

contador_reno=0;

  

setTimeout(santa_durmiendo, 15000); // llama la funcion al pasar 15 segundos

      }



      //funcion de contador de duendes
      function contador_duendes(){
        var contador_duende = document.getElementById("contador_duende").innerHTML; //contador duendes
        var contador_reno = document.getElementById("contador_reno").innerHTML;  //contador renos

          var btn_duendes = document.getElementById("btn_duendes");  //boton de duendes
          var btn_renos = document.getElementById("btn_renos");  //boton de renos

          

          var duendes_durmiendo = document.getElementById("duendes_durmiendo");  //gif de duendes durmiendo
          var duendes_chambeando = document.getElementById("duendes_chambeando");  //gif de duendes chambeando

          var santa_dormido = document.getElementById("santa_dormido");  //gif de santa dormido

var santa_trineo = document.getElementById("santa_trineo");  //gif de santa en el trineo  

var santa_ayudando = document.getElementById("santa_ayudando");  //gif de santa ayudando


var btn_duendes_despertar = document.getElementById("btn_duendes_despertar");  //boton de despertar a santa con duendes


          $('#contador_reno').html(0); 

         contador_duende++; // contador de duendes

         duendes_durmiendo.hidden= true;
         duendes_chambeando.hidden= false;
        
          //if para cambiar los estados de los procesos
      if(contador_duende==3){
        btn_duendes.disabled = true;
        btn_duendes_despertar.disabled = false;
       btn_duendes_despertar.hidden = false;

      }else{
      
        $('#contador_reno').html(0); 
         btn_renos.disabled = true;
      }

       
      $('#hilos_corriendo').html("Duendes"); 
      $('#contador_duende').html(contador_duende); //se muestra el contador en contador de duendes


      }

      //funcion para despertar a santa para ayudar a los duendes
    function despertar_duendes_santa(){
  $('#contador_reno').html(0); 
         btn_duendes_despertar.disabled = true;
btn_renos.disabled = true;

$('#hilos_corriendo').html("Santa y Duendes"); 

         $('#estatus_santa').html("Santa Claus ayudando"); 

         santa_dormido.hidden = true;

      santa_trineo.hidden = true;

      santa_ayudando.hidden = false;

      contador_duende=0;

       

       setTimeout(santa_durmiendo, 15000); // llama la funcion al pasar 15 segundos
    }



      function santa_durmiendo(){

        var contador_duende = document.getElementById("contador_duende").innerHTML; //contador duendes
        var contador_reno = document.getElementById("contador_reno").innerHTML;  //contador renos



        var btn_duendes = document.getElementById("btn_duendes");  //boton de duendes
          var btn_renos = document.getElementById("btn_renos");  //boton de renos
          var btn_renos_despertar = document.getElementById("btn_renos_despertar");  //boton de despertar a santa con renos
          var btn_duendes_despertar = document.getElementById("btn_duendes_despertar");  //boton de despertar a santa con duendes

          var renos_durmiendo = document.getElementById("renos_durmiendo");  //gif de renos durmiendo
          var renos_chambeando = document.getElementById("renos_chambeando");  //gif de renos chambeando
          var duendes_durmiendo = document.getElementById("duendes_durmiendo");  //gif de duendes durmiendo
          var duendes_chambeando = document.getElementById("duendes_chambeando");  //gif de duendes chambeando
        var santa_dormido = document.getElementById("santa_dormido");  //gif de santa dormido
        var santa_trineo = document.getElementById("santa_trineo");  //gif de santa en el trineo
        var santa_ayudando = document.getElementById("santa_ayudando");  //gif de santa ayudando

        $('#estatus_santa').html("Santa Claus Durmiendo"); 

        // los valores se cambian por a valores por defecto y empezar de nuevo con el programa de santa
        btn_duendes.disabled = false;
        btn_renos.disabled = false;

        btn_duendes_despertar.hidden = true;
        btn_renos_despertar.hidden = true;
        santa_dormido.hidden = false;
        santa_trineo.hidden = true;
        santa_ayudando.hidden= true;

        duendes_durmiendo.hidden = false;
        duendes_chambeando.hidden= true;

        renos_durmiendo.hidden = false;
        renos_chambeando.hidden= true;

        contador_duende=0;
        contador_reno=0;

        $('#hilos_corriendo').html("Ninguno"); 
        $('#contador_reno').html(0); 
        $('#contador_duende').html(0); 

      }


      
    </script>


  

  </body>
</html>