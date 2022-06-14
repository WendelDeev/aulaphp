<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<script>
tinymce.init({
  selector: 'textarea#default'
});
</script>

<body>
    <main>
        <div class="container">
            <legend><b>Inserir</b></legend>
            <div class="mb-3">
                <form action="envia.php" method="POST" enctype="multipart/form-data">
                <label for="disabledTextInput" class="form-label">Titulo</label>
                <input type="title" id="title" class="form-control" placeholder="Digite o titulo" name="title">
            </div>
            <div class="mb-3">
                <form action="envia.php" method="POST" enctype="multipart/form-data">
                <label for="disabledTextInput" class="form-label">Data</label>
                <input type="date" id="data" class="form-control" placeholder="dd/mm/aaaa" name="data">
            </div>
            <div class="mb-3">
                <form action="envia.php" method="POST" enctype="multipart/form-data">
                <label for="disabledTextInput" class="form-label">Texto descritivel</label>
                <textarea id="default" name="description">Hello, World!</textarea>

            </div>
            <div class="mb-3">
                <form action="envia.php" method="POST" enctype="multipart/form-data">

                <input type="file" id="formGroupExampleInput3" placeholder="Insira uma imagem" name="image" />
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Publicar</button>
            </div>
        </div>
    </main>
</body>

</html>