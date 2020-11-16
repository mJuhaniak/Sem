<html>
<head>
    <title>Super úžasná stránka</title>

    <link rel="stylesheet" href="http://localhost/Sem/public/css.css">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style = "background-color: #1B263B">
    <a class="navbar-brand" href="?c=home">Úvod</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="?c=home&a=news">Ubytovanie <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="?c=home&a=gallery">Galéria</a>
            <a class="nav-item nav-link" href="?c=home&a=calendar">Kalendár</a>
            <a class="nav-item nav-link" href="?c=home&a=contact">Kontakt</a>
            <a class="nav-item nav-link" href="?c=reservation">Rezervacie</a>
        </div>
    </div>
</nav>

<div class="web-content">
    <?= $contentHTML ?>
</div>
</body>
</html>

