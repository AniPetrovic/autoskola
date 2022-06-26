<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="sugerisi.js" type="text/javascript"></script>
  <script type="text/javascript">
    function place(ele) {
      document.getElementById('txt').value = ele.innerHTML;
      document.getElementById("livesearch").style.display = "none";
    }
  </script>

<link rel="stylesheet" type="text/css" href="style.css">

  
</head>

<body onload="document.getElementById('txt').focus()">


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
        <h1>Provera</h1>
        <form>
          <input type="text" id="txt" size="32" onkeyup="sugestija(this.value)">
          <div id="livesearch"></div>

        </form>
      </div>
      <div class="col-sm">

      </div>
    </div>
  </div>




</body>

</html>