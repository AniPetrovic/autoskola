<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Unos novog zaposlenog</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>


    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="control_panel.php">Administracija auto-škole</a>


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


                <h1>Unos novog zaposlenog u sistem</h1>
                <hr />
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
                            <span class="input-group-text" id="inputGroup-sizing-default">Radna pozicija:</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="posao">
                    </div>



                    <input class="btn btn-primary btn-lg" type="submit" name="unos" value="Ubaci" />
                </form>
                <?php
                if (isset($_POST["unos"])) {
                    //Prikupljanje podataka sa forme
                    $flag = 0;
                    //provera forme da li je uneta postojeca pozicija
                    if ($_POST['posao'] == "Instruktor" || $_POST['posao'] == "Predavac" || $_POST['posao'] == "Sekretar" || $_POST['posao'] == "Racunovodja") {
                        $flag = 1;
                    }
                    if (isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['posao']) && $flag == 1) {
                        $ime = $_POST['ime'];
                        $prezime = $_POST['prezime'];
                        $posao = $_POST['posao'];

                        //Operacije nad bazom
                        include "konekcija.php";

                        $sql = "INSERT INTO zaposleni (ime, prezime, posao) VALUES ('" . $ime . "', '" . $prezime . "', '" . $posao . "');";
                        if ($mysqli->query($sql)) {
                            echo "<p>Zaposleni je uspešno ubačen</p>";
                        } else {
                            echo "<p>Nastala je greška pri ubacivanju </p>" . $mysqli->error;
                        }
                    } else {
                        //Ako POST parametri nisu prosleđeni
                        echo "Nisu prosleđeni parametri ili ste uneli nepostojecu poziciju!";
                    }
                    if ($flag == 1) {
                        $mysqli->close();
                    }
                }
                ?>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>






</body>

</html>