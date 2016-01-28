<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="col-md-4"><img src="img/logo.png"/></div>
        <div class="col-md-8">
            <div class="page-header">
                <h1>Brief para diseño de sitio web.
                    <small>Cuestionario de cliente.</small>
                </h1>
            </div>
        </div>
    </div>
</nav>

<div class="container" role="main">
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <form>
        <div class="panel panel-default">
            <div class="panel-heading">Información de la empresa.</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="acercaDeLaEmpresaLabel" class="alert alert-success"><span class="badge">1</span>
                        Cuéntanos
                        acerca de tu empresa.</label>
                    <textarea class="form-control" id="acercaDeLaEmpresa" placeholder=""></textarea>
            <span id="acercaDeLaEmpresahelpBlock" class="help-block">Puntos clave a mencionar podría ser el tamaño de su equipo, cuando se estableció la compañía, si
                    misión y su visión.
                </span>

                </div>
                <div class="form-group">
                    <label for="publicoObjetivoLabel" class="alert alert-success"><span class="badge">2</span> ¿Quién es
                        su
                        público objetivo?</label>
                    <textarea class="form-control" id="publicoObjetivo" placeholder=""></textarea>
            <span id="publicoObjetivohelpBlock" class="help-block">Cada empresa tiene un público objetivo cuéntanos un poco acerca de las características del grupo
                    objetivo de su empresa, por ejemplo: Edad, sexo, sector, necesidades específicas.
                </span>
                </div>
                <div class="form-group">
                    <label for="competenciaLabel" class="alert alert-success"><span class="badge">3</span> ¿Quién es su
                        competencia?</label>
                    <textarea class="form-control" id="competencia" placeholder=""></textarea>
            <span id="competenciahelpBlock" class="help-block">Mencione quién es su competencia, y también la forma en que son diferentes a ellos.
               </span>
                </div>
                <div class="form-group">
                    <label for="objetivoLabel" class="alert alert-success"><span class="badge">4</span> ¿Cuál es el
                        objetivo de
                        este sitio web?</label>
                    <textarea class="form-control" id="objetivo" placeholder=""></textarea>
            <span id="objetivohelpBlock" class="help-block">Si este es su primer sitio web explique qué es lo que desea lograr, por ejemplo: un aumento en
                    las ventas, promover su marca. SI ya cuenta con un sitio web, mencione los puntos fuertes del mismo
                    y que desea conservar, así como las mejoras que espera.
                </span>
                </div>
                <div class="form-group">
                    <label for="competenciaLabel" class="alert alert-success"><span class="badge">5</span> ¿Tiene un
                        sitio web
                        existente?</label>
                    <!--TODO añadir en javascript campo de url solo en caso de ser si -->
                    <textarea class="form-control" id="competencia" placeholder=""></textarea>
           <span id="competenciahelpBlock" class="help-block">Si este es su primer sitio web explique qué es lo que desea lograr, por ejemplo: un aumento en
                    las ventas, promover su marca. SI ya cuenta con un sitio web, mencione los puntos fuertes del mismo
                    y que desea conservar, así como las mejoras que espera.
                </span>
                </div>

            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Preferencias de diseño.</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="competenciaLabel" class="alert alert-success"><span class="badge">5</span> ¿Tiene un sitio web existente?</label>
                    <textarea class="form-control" id="competencia" placeholder=""></textarea>
           <span id="competenciahelpBlock" class="help-block">Si este es su primer sitio web explique qué es lo que desea lograr, por ejemplo: un aumento en
                    las ventas, promover su marca. SI ya cuenta con un sitio web, mencione los puntos fuertes del mismo
                    y que desea conservar, así como las mejoras que espera.
                </span>
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
