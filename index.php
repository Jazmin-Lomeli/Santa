<?php
$procesos = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $procesos = $procesos + $_POST["new"];

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Santa</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

  <div class="container mt-3 mb-2">
    <div class="row">
      <div class="mx-auto">
        <h2>
          Santa
        </h2>
      </div>


      <div class="container mt-4 mx-0 border rounded shadow">
        <div class="row justifi-conten-center align-items-center pt-3">

          <div class="col-lg-4 form-group text-center pb-2">

            <form method="post" id="formulario">
              <h4> <label for="new">Agregar procesos</label></h4>

              <input type="number" id="new" name="new" value="<?php echo $procesos ?>" min="<?php echo $procesos ?>"
                max="200">

              <abbr title="Agregar">
                <button type="submit" class="px-2 btn btn-success"><i class="bi bi-plus-square"></i></button>
              </abbr>

            </form>

          </div>


          <div class="col-lg-4 form-group text-center pb-2">

            <form method="post" id="formulario">
              <h4> <label for="new">Eliminar procesos</label></h4>

              <input type="number" id="new" name="new" value="<?php echo $procesos ?>" min="0"
                max="<?php echo $procesos ?>">

              <abbr title="Elminar procesos">
                <button type="submit" class="px-2 btn btn-danger"><i class="bi bi-trash3"></i></button>
              </abbr>

            </form>
          </div>
          <div class="col-lg-4 text-center">
            <h5> Procesos corriendo <br> <strong>
                <?php echo $procesos; ?>
              </strong> </h5>

          </div>
        </div>
      </div>
    </div>

















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
</body>

</html>