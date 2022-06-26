<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="sugerisi.js" type="text/javascript"></script>

<style>
.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
</style>

  <script type="text/javascript">
    function place(ele) {
      document.getElementById('txt').value = ele.innerHTML;
      document.getElementById("livesearch").style.display = "none";
    }
  </script>
  <style type="text/css">
    #livesearch {
      margin: 5px;
      width: 220px;
    }

    #txt {
      border: solid #A5ACB2;
      margin: 5px;
    }
  </style>


  <title>Kontrolna tabla</title>
</head>

<body onload="document.getElementById('txt').focus()">

  <!-- deo za navbar-->
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Administracija auto-škole</a>
    

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
      <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Ubaci novog zaposlenog</h5>
            <p class="card-text">Ovde možete pristupiti bazi i dodati novog zaposlenog.</p>
            <a href="ubaci_strana_zap.php" class="btn btn-primary btn-lg">UBACI</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Izbriši</h5>
            <p class="card-text">Ovde možete pristupiti bazi i izbrisati postojećeg zaposlenog.</p>
            <a href="brisanje_zaposlenog.php" class="btn btn-primary btn-lg">IZBRISI</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Proveri da li postoji u bazi</h5>
            <p class="card-text">Servis vrši proveru da li postoji zaposleni pod određenim imenom u bazi.</p>
            <a href="auto_provera.php" class="btn btn-primary btn-lg">PROVERI</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Izmeni podatke</h5>
            <p class="card-text">Ova funkcionalnost pruža uslugu izmene podataka svih zaposlenih u bazi.</p>
            <a href="update.php" class="btn btn-primary btn-lg">IZMENI</a>
          </div>
        </div>
      </div>
      <div class="col">

    <ul class="list-unstyled">
  <li class="media">
  
    <div class="media-body">
      <h5 class="mt-0 mb-1">Beograd</h5>
      Kruševačka 2
    </div>
  </li>
  <li class="media my-4">
   
    <div class="media-body">
      <h5 class="mt-0 mb-1">Novi Sad</h5>
      Dositeja Obradovića 16
    </div>
  </li>
  <li class="media">
  
    <div class="media-body">
      <h5 class="mt-0 mb-1">Požarevac</h5>
     Prilepska 13
    </div>
  </li>
</ul>
    </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>