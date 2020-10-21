<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Mailer</title>


    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    <link rel="stylesheet" href="style.css">

</head>


<!-- PHP MAILER COM AJAX -->

<body class="body-principal">

    <!-- Conteudo do formulario -->
    <main class="main-principal">
        <section class="section-contato" id="contato">
            <div class="container">
                <div class="form-principal">
                    <h1 class="titulo-contato">Contato</h1>
                    <div class="d-flex">
                        <div class="p-2 flex-fill animate__animated animate__slideInLeft">
                            <h3>
                                Fale conosco
                            </h3>

                            <form class="formulario" id="ajax_form" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome (obrigatório)</label>
                                    <input type="text" name="nome" class="form-control" id="exampleFormControlInput1"
                                        placeholder="nome">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">E-mail (Obrigatório)</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="nome@exemplo.com">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Assunto</label>
                                    <input type="text" name="assunto" class="form-control" id="exampleFormControlInput1"
                                        placeholder="assunto">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">menssagem</label>
                                    <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1"
                                        rows="10" placeholder="Mensagem"></textarea>
                                </div>
                                <input class="botaoEnviar" type="submit" name="Reservar">
                                <div class="loading"></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Mensagem utilizando sweetalert2  -->
    <div class="mostrar">
        <?php include 'enviar.php'; ?>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {?>
        <script>
        $(document).ready(function() {
            swal("Sucesso", "Sua mensagem foi enviada", "success");
        });
        </script>
        <?php } ?>
    </div>

    <!-- Importações -->
    <script src="./bootstrap/js/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="sweetalert.js"></script>
    <script src="ajax.js"></script>

</body>
</html>