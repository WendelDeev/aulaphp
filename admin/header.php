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
    <title>View</title>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
                    <h2>Bom dia, Wendel </h2>
                    <p><a href="#">Deslogar</a></p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="" class="nav-item">Controlar Posts</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-item">Controlar Slides</a>
                        </li>
                    </ul>
                    <p><a href="?sair">Deslogar</a></p>
                </nav>
            </div>
        </div>
    </main>
    <main>
        <div class="container">

            <h1 id="main-title">Meus Posts</h1>

            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">id</td>
                        <td scope="row">Título</td>
                        <td scope="row">Descrição</td>
                        <td class="actions">
                            <a href="">
                                Ver
                                <!-- use um ícone -->
                            </a>
                            <a href="">
                                X
                                <!-- use um ícone -->
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <?php foreach ($results as $post) : ?>
                        <tr>
                            <td scope="row"><?= $post["id"] ?></td>
                            <td scope="row"><?= $post["title"] ?></td>
                            <td scope="row"><?= $post["description"] ?></td>
                            <td class="actions">
                                <a href="viewBlog.php?id=<?= $post["id"] ?>">
                                    <i class="fas fa-eye check-icon">Ver</i>
                                </a>
                                <a href="editar.php?id=<?= $post["id"] ?>">
                                    <i class="fas fa-eye check-icon">Editar</i>
                                </a>
                                <a href="delete.php?id=<?= $post["id"] ?>">X</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </main>
</body>

</html>