<?php
/* iNICIALIZAR VARIABLES */
$duendes = 0;
$renos = 0;
$hilos_corriendo = " ";
$despertar_a_santa = "FALSE";

/* SI SE PRESIONA ALGUN BOTON */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $renos = $_POST["new_reno"];
  $duendes = $_POST["new_duende"];
  $despertar_a_santa = $_POST["desp_santa"];
  $hilos_corriendo = $_POST["procesos"];

}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Santa Claus</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>

<body style="padding: 0; margin:0;">

  <!-- Header  -->
  <div class="card" style="box-shadow: 0px 0px 10px gray; background-image: url('https://i.gifer.com/7t5M.gif');">
    <div class="card-body">
      <h1 class="card-title text-center font-weight-bold" style="color: white;">Santa Claus</h1>
    </div>
  </div>
  <!-- Header  -->

  <br>
  <!-- Button trigger modal -->
  <div class="px-2">
    <abbr title="Informacion del Equipo">
      <button type="button" class="btn btn-primary rounded-circle border border-3 border-dark " data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        &nbsp; i &nbsp;
      </button>
    </abbr>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        </div>
        <div class="modal-body text-center pt-2">

          <h5>Universidad de Guadaljara</h5>
          <h6> Centro Universitario de los Altos</h6>

          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Escudo_UdeG.svg/441px-Escudo_UdeG.svg.png"
            class="rounded mx-auto d-block pt-2" alt="..." style="width:10em;height:12rem">

          <h5>Sistemas Concurrentes y Distribuidos</h5>
          <h6> Integrantes </h6>

          <div style="list-style-type:square; line-height: 20%; ">

            <h6> Jazmin</h6>
            <h6>Áaron </h6>
            <h6> Jacky </h6>
            <h6> Cielo </h6>


          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <div class="container" style="ma-width: 100%">



    <div class="row text-center">

      <!-- SANTA -->
      <div class="col-12 col-md-7 ">
        <div class="text-center pt-3">
          <h4> <strong> Hilos corriendo </strong> <br>
            <?php echo $hilos_corriendo; ?>
          </h4>

        </div>
        <div class="card" style="margin: 20px;box-shadow: 0px 0px 10px gray">
          <div class="card-body justify-conten-center align-items-center">
            <div class="text-center">
              <h2>Santa Claus Durmiendo</h2>
            </div>
            <?php
            if ($despertar_a_santa == "FALSE") { /* Santa esta mimido */
              ?>
              <img src="https://i.gifer.com/origin/ac/ac6384a6e036b6d80d0c733fee379bd6.gif"
                class="img-fluid mx-auto d-block" alt="Santa Claus Dormido">

              <?php
            } else {
              ?>
              <?php
              if ($despertar_a_santa == "TRUE" && $hilos_corriendo == "Duedes y Santa") { /* Hilo de santa y duendes */
                ?>

                AQUI VAN LOS DUENDES Y SANTA
                <?php
              } else { /* Hilo de renos y santa */
                ?>
                AQUI VAN LOS RENOS Y SANTA

                <?php
              }
              ?>
              <?php
            } /* Santa no esta mimido */
            ?>
          </div>
        </div>
      </div>
      <!-- FIN DE SANTA -->
      <!-- INICIO DE DUEDES -->
      <div class="col-12 col-md-5">
        <section>

          <div class="card" style="box-shadow: 0px 0px 10px gray">
            <div class="card-body pt-3 pb-0">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-12 text-center">
                  <h4 class="card-title">Duendes:
                    <?php echo $duendes; ?>
                  </h4>
                </div>


              </div>
              <?php
              if ($duendes == 0) { /* Si ningun duende esta chambeando  (MIMIDOS)*/
                ?>
                <img
                  src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExZGQxYTg4ODM3NGE5OTAzMjIyYTk4MmYyMWIyMWFiNmI4ZTVlZGQxMCZjdD10cw/4a64Wj7716mVnNgOIU/giphy.gif"
                  class="img-fluid mx-auto d-block" alt="Duendes Navideños" style="width:15em;height:10rem">

                <?php
              } else { /* Si hay duendes chambeando  (NO MIMIDOS) */
                ?>

                <img
                  src="https://usagif.com/wp-content/uploads/2022/hqgif/christmas-elves-21-dancing-elfs-tranpsarent-background.gif"
                  class="img-fluid mx-auto d-block" alt="Duendes Navideños" style="width:15em;height:10rem">

                <?php
              } /* Si aun no excede el numero de duendes para despertar a santa */
              ?>

              <div class="container row form-group text-center">
                <?php
                /* IF para ver  que formulario se coloca */
                if ($duendes < 3) { /* Si aun no excede el numero de duendes para despertar a santa */
                  ?>
                  <form method="post" id="formulario" class="col-12">
                    <div class="">

                      <h6> <label for="new">Agregar/Elminar Duendes</label></h6>
                      <!-- Mientras el numero de duendes sea menor a 3 mostrar este formulario -->
                      <input type="number" id="new_duende" name="new_duende" value="<?php echo $duendes ?>" min="0"
                        max="3">
                      <input id="new_reno" name="new_reno" type="hidden" value="0">
                      <input id="procesos" name="procesos" type="hidden" value="Duedes">
                      <input id="desp_santa" name="desp_santa" type="hidden" value="FALSE">

                      <abbr title="Agregar/Elminar procesos">
                        <button type="submit" class="btn btn-primary">ADD</button>
                      </abbr>
                    </div>
                  </form>
                  <?php
                } else { /* Ya se puede despertar a santa */
                  ?>
                  <form method="post" id="formulario" class="col-12">
                    <div class="">
                      <!-- Si el numero de duendes es 3, preguntar si desea pedir ayuda a santa -->
                      <h5> <label for="new">¿Pedir ayuda a Santa?</label></h5>

                      <input type="hidden" type="number" id="new_duende" name="new_duende" value="<?php echo $duendes ?>"
                        min="0" max="3">
                      <input id="new_reno" name="new_reno" type="hidden" value="0">
                      <input id="procesos" name="procesos" type="hidden" value="Duedes y Santa">
                      <!-- Mostrar opciones -->
                      <select name="desp_santa">
                        <option value="TRUE">Despertar Ahora</option>
                        <option value="FALSE" selected>Por ahora no</option>
                        <option value="FALSE">NEL</option>
                      </select>
                      <abbr title="Elegir la opcion seleccionada">
                        <button type="submit" class="btn btn-primary">Seleccionar</button>
                      </abbr>
                    </div>
                  </form>
                  <?php
                }

                ?>
              </div>
            </div>
        </section>
        <!-- FIN DE DUEDES -->

        <section class="border pt-2">

          <div class="card" style="box-shadow: 0px 0px 10px gray">
            <div class="card-body pt-3 pb-0">
              <div class="row justify-conten-center align-items-center">
                <div class="col-md-12 text-center">
                  <h4 class="card-title">Renos:
                    <?php echo $renos; ?>
                  </h4>
                </div>
                <?php
                if ($renos == 0) { /* Si ningun reno esta chambeando  (MIMIDOS)*/
                  ?>
                  <img
                    src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExNzM0NGRlYTQ3OWU5NTM0MDUxMDBhZWU0ZTJlMjFhNTQyZWM3OTllMCZjdD1z/mDYNBM8FAr1BXJJpT7/giphy.gif"
                    class="img-fluid mx-auto d-block" alt="Renos Navideños" style="width:15em;height:10rem">
                  <?php
                } else { /* Si hay renos chambeando (NO MIMIDOS)*/
                  ?>
                  <img src="https://i.pinimg.com/originals/88/bb/97/88bb97748362baa4c1b116b3ee1a589d.gif"
                    class="img-fluid mx-auto d-block" alt="Renos Navideños" style="width:15em;height:10rem">
                  <?php
                } /* Si aun no excede el numero de duendes para despertar a santa */
                ?>

                <div class="container row form-group text-center">
                  <?php
                  /* IF para ver  que formulario se coloca */
                  if ($renos < 9) { /* Si aun no excede el numero de duendes para despertar a santa */
                    ?>
                    <!-- Mientras el numero de RENOS sea menor a 9 mostrar este formulario -->
                    <form method="post" id="formulario" class="col-12">
                      <div class="">
                        <h6> <label for="new">Número de procesos de Reno</label></h6>

                        <input type="number" id="new_reno" name="new_reno" value="<?php echo $renos ?>" min="0" max="9">
                        <input id="new_duende" name="new_duende" type="hidden" value="0">
                        <input id="procesos" name="procesos" type="hidden" value="Renos">
                        <input id="desp_santa" name="desp_santa" type="hidden" value="FALSE">
                        <abbr title="Agregar/Elminar procesos">
                          <button type="submit" class="btn btn-primary">ADD</button>
                        </abbr>
                      </div>
                    </form>
                    <?php
                  } else { /* Ya se puede despertar a santa */
                    ?>
                    <form method="post" id="formulario" class="col-12">
                      <div class="">
                        <!-- Si el numero de RENOS es 9 preguntar si desea enganchar el trineo -->

                        <h5> <label for="new">¿Enganchar el trineo?</label></h5>

                        <input type="hidden" type="number" id="new_reno" name="new_reno" value="<?php echo $renos ?>"
                          min="0" max="3">
                        <input id="new_duende" name="new_duende" type="hidden" value="0">
                        <input id="procesos" name="procesos" type="hidden" value="Renos y santa">
                        <!-- Mostrar opciones -->
                        <select name="desp_santa">
                          <option value="TRUE">Despertar Ahora</option>
                          <option value="FALSE" selected>Por ahora no</option>
                          <option value="FALSE">NEL</option>
                        </select>
                        <abbr title="Elegir la opcion seleccionada">
                          <button type="submit" class="btn btn-primary">Seleccionar</button>
                        </abbr>
                      </div>
                    </form>
                    <?php
                  } /* Ya se puede despertar a santa */
                  ?>
                </div>
              </div>
            </div>
        </section>
      </div>
    </div>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>