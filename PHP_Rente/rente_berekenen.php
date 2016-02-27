<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Interest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main_css.css">
    <!--Bootstrap CSS & JS-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body style="background-color: #efefef">
<?php
$startgeld = $_POST['startgeld']; //HTML -> startgeld
$rente = $_POST['rente']; //HTML -> jaarlijkse rente
$jaar = $_POST['jaar']; //HTML -> Aantal jaar sparen
$rentebereken = $rente /100;
?>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="font-family: Lucida Calligrap" class="navbar-brand" href="#">Whitetail</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href=rente.html>Calculate Interest</a></li>
                    <li class="active"><a href="rente_berekenen.php">Interest<span class="sr-only">(current)</span></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <table class="table">
        <thead>
            <tr>
                <th>Year</th>
                <th>Euro's</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $startgeld = $_POST['startgeld']; //HTML -> startgeld
            $rente = $_POST['rente']; //HTML -> jaarlijkse rente
            $jaar = $_POST['jaar']; //HTML -> Aantal jaar sparen
            $rentebereken = $rente /100;

        for($loopnummer = 1; $loopnummer<=$jaar; $loopnummer++) {
            $startgeld = $startgeld + ($startgeld * $rentebereken);
            echo "<tr>" .
                "<td>" . ($loopnummer) . "</td>" .
                "<td>" . round($startgeld, 2) . "</td>" .
                "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<!--Bootstrap js-->
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/npm.js"></script>
</body>
</html>