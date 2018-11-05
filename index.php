<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> lista de ramais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="#" width="30" height="30" class="d-inline-block align-top" alt="">
    teste rodrigo
  </a>
</nav>
<div class="table-responsive-xl">
<div class="container">
<span id="conteudo"></span>
</div>
</div>
<script>

    $(document).ready(function () {
        $.post('listar_usuario.php', function (retorna) {
            //substitui o valor  no seletor id = "conteudo"
            $("#conteudo").html(retorna);
        });

    });
</script>
<!-- Footer -->
<footer class="page-footer font-small blue fixed-bottom">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> teste rodrigo	</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html> 