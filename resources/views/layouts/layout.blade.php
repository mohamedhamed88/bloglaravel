<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="TP de la Formation Développeur 3WA : module PHP 2">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>

<body>
    <header class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand" title="Retour à l'accueil">Le blog de Tante Ursule</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <nav class="collapse navbar-collapse" id="navigation">

            <ul class="navbar-nav ml-auto">

                <a class="nav-link" href="{{ route('admin') }}">
                    <i class="fas fa-pen-nib" aria-hidden="true"></i>
                    Administration
                </a>
                </li>
                <?php
                if (!empty($_SESSION)) :
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><?= $_SESSION['username'] ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="admin_logout.php">Logout</a>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main id='mainprincipale'>
        @yield('content')
    </main>
    <footer class="navbar navbar-dark bg-dark text-center">
        <img class="mx-auto" src="{{ asset('img/3wa.png') }}" alt="3W Academy" width="50">
        <p class="navbar-text w-100 m-0 small">
            <strong><a href="https://3wa.fr/">&copy; 3W Academy</a> - PHP : Module 2 - Formation Développeur WEB -
                Tous&nbsp;droits&nbsp;réservés</strong><br>
            Cet exercice est mis à disposition des stagiaires dans le cadre exclusif de leur apprentissage
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/events.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
