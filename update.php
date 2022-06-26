<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="sugerisi_id.js" type="text/javascript"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>


  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="control_panel.php">Administracija autoskole</a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <div class="col-sm">

      </div>
      <div class="col-sm">
        <h1> UPDATE </h1>
        <form method="post" action="">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Ime i prezime:</span>
            </div>
            <input type="text" aria-label="First name" class="form-control" name="ime">
            <input type="text" aria-label="Last name" class="form-control" name="prezime">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Radno mesto:</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="posao">
          </div>

          
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">ID:</span>
                        </div>
                        
                        <input type="number" name="id_zap" class="form-control"onkeyup="sugestija(this.value)" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <div id="livesearch"></div>
                      </div>













          <!-- ID: <input type="number" name="id_zap" /><br /> -->


          <input class="btn btn-primary btn-lg" type="submit" name="unos" value="Izmeni" />
        </form>
        <?php
        if (isset($_POST["unos"])) {
          //Prikupljanje podataka sa forme

          if (isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['posao']) && isset($_POST['id_zap'])) {
            $ime = $_POST['ime'];
            $prezime = $_POST['prezime'];
            $posao = $_POST['posao'];
            $id_zap = $_POST['id_zap'];

            //Operacije nad bazom
            include "konekcija.php";
//            $sql = "UPDATE zaposleni (ime, prezime, posao) VALUES ('" . $ime . "', '" . $prezime . "', '" . $posao . "');";
            $sql = "UPDATE zaposleni SET ime='" . $ime . "', prezime='" . $prezime . "', posao='" . $posao . "' WHERE id_zap=" . $id_zap;
            if ($mysqli->query($sql)) {
              echo "<p>Podaci o zaposlenom su uspesno izmenjeni</p>";
            } else {
              echo "<p>Nastala je greška pri promeni </p>" . $mysqli->error;
            }
          } else {
            //Ako POST parametri nisu prosleđeni
            echo "Nisu prosleđeni parametri!";
          }
          $mysqli->close();
        }
        ?>


      </div>
      <div class="col-sm">

      </div>
    </div>
  </div>















</body>

</html>