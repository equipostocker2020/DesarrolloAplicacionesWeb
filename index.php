<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TP Nº1 Desarrollo de Aplicaciones Web</title>
</head>

<body>
    <h2 class="texto-decorado text-center mt-4 font-weight-bold">Envio de Email por PHP</h4>
        <hr>
        <div class="container">


            <div class="container py-8 mt-3  ">
                <div class="row justify-content-center">

                    <div class="col-lg-6  ">
                        <form>
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email del Usuario" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="asunto" class="form-control" placeholder="Asunto" required>
                            </div>
                            <div class="form-group">
                                <textarea name="mensaje" class="form-control" rows="5" placeholder="Cuerpo del mensaje..."></textarea>
                            </div>
                            <button type="submit" onclick="enviar()" class="btn btn-secondary btn-lg btn-block">Enviar Correo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3 texto-decorado">© 2020 Copyright:
                <p class="texto-decorado">Figueras Gonzalo, Galarza Agustin, Gutierrez Marcelo</p>
            </div>

        </footer>
</body>
<script type="text/javascript">
    function enviar() {
        alert("Gracias!, su correo se envio satisfactoriamente");


    }
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>