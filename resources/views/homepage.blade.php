@extends('layouts.layout')

@section('content')
    <main class="pb-5">
        <header class="jumbotron main-header">
            <h1 class="display-4">Accueil du blog</h1>
            <p class="lead">Les derniers articles postés</p>
            <hr class="my-4">

        </header>

        <section class="container-fluid">
            <h2 class="text-center">Les nouvelles de Tante URSULE</h2>
            <div class="d-lg-flex flex-wrap p-2">
                <?php foreach ($posts as $post) : ?>
                <article class="card shadow m-2 d-flex flex-column">
                    <header class="card-header bg-warning flex-grow-1">
                        <h3 class="h4">
                            <a class="text-white font-weight-bold" href="show_post.php?id=<?= intval($post['Id']) ?>"
                                title="Consulter l'article">
                                <?= htmlspecialchars($post['Title']) ?>
                            </a>
                        </h3>
                        <p class="m-0">
                            Dans la catégorie :
                            <strong class="badge badge-dark">
                                <?= htmlspecialchars($post['CategoryName']) ?>
                            </strong>
                        </p>
                    </header>
                    <div class="card-body flex-grow-0 bg-light text-dark">
                        <div class="card-text">
                            <?= htmlspecialchars($post['Body']) ?> [...]
                        </div>
                        <p class="mt-5 card-text text-right">
                            <a class="btn btn-warning" href="show-post.php?post_id=<?= $post['Id'] ?>"
                                title="Consulter l'article">Lire la suite</a>
                        </p>
                    </div>
                    <footer class="card-footer text-white bg-secondary small">
                        Rédigé par
                        <strong>
                            <?= htmlspecialchars($post['FirstName']) ?>
                            <?= htmlspecialchars($post['LastName']) ?>
                        </strong>
                        le
                        <time>
                            <?= htmlspecialchars($post['DateMaj']) ?>
                        </time>
                    </footer>
                </article>
                <?php endforeach; ?>
            </div><!-- Fin row -->
        </section>

    </main>
@endsection
