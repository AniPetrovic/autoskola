<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script type="text/javascript" src="obrisi.js"></script>
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
                <h1>Brisanje zaposlenog</h1>
                <?php
                include "konekcija.php";
                $sql = "SELECT id_zap, ime, prezime, posao FROM zaposleni";
                if (!$q = $mysqli->query($sql)) {
                    die("Nastala je greška pri izvođenju upita<br/>" . $mysqli->error);
                }
                if ($q->num_rows == 0) {
                    echo "Nema zaposlenih";
                } else {
                    //prelazi se u HTML ispis
                    ?>
                    <table id="ta" width="600" border="1" cellpadding="5" cellspacing="2" style="text-align:center ">

                        <tr>
                            <td><b>Ime</b></td>
                            <td><b>Prezime</b></td>
                            <td><b>Radno mesto:</b></td>

                            <td><b><i>Akcija</i></b></td>
                        </tr>
                        <?php
                            while ($zaposleni = $q->fetch_object()) {
                                ?>
                            <tr>
                                <td><?php echo $zaposleni->ime; ?></td>
                                <td><?php echo $zaposleni->prezime; ?></td>
                                <td><?php echo $zaposleni->posao; ?></td>

                                <td><a href="#" onclick="obrisi('<?php echo $zaposleni->id_zap; ?>',this.parentNode.parentNode.rowIndex)">Obriši zaposlenog</a></td>
                            <?php
                                }
                                ?>
                    </table>
                <?php
                }
                $mysqli->close();
                ?>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>



</body>

</html>