!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>League Of Legends</title>
<style> 
.header-fondo {
    background-color:darkred;
}
.nav-fondo{
    background-color:   black;
}
.contenido-fondo{
    background-color: dimgray;
}
</style>
</head>
<body class="header-fondo">
<div>FORMULARIO DE: ARATH ERNESTO MORENO AMADOR<div>
<nav class="nav-fondo"> 
<p> <center>  </center> </p>
<ul> 

</ul>
</nav>
<div class="contenido-fondo">
<p> <center>

<form action="capturarGhoul" method="POST">
{{csrf_field()}}
        <div class="mb-3">
            <label for="ghoul" class="form-label">Campeon</label>
            <input type="text" class="form-control" name="ghoul" id="ghoul" >
        </div>
        <div class="mb-3">
            <label for="claseGhoul" class="form-label">Dificultad</label>
            <input type="text" class="form-control" name"claseGhoul" id="claseGhoul">
        </div>
        <button type="guardar" class="btn btn-primary">REGISTRAR</button>
    </form>

<center> </p>
<p> <center>Camepones de difcultad facil a dificil.<center> </p>
</div>
</body>
</html>