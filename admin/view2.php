<?php
include_once('../config/connection.php');

include('session.php');

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('header.php');

?>

<main class="col-md-9 col-lg-10">
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
                    </table>
            </div>
</main>

