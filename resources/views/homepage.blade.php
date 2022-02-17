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
                @foreach ($posts as $post)
                    <article class="card shadow m-2 d-flex flex-column">
                        <header class="card-header bg-warning flex-grow-1">
                            <h3 class="h4">
                                <a class="text-white font-weight-bold" href="{{ route('detailpost', $post->Id) }}"
                                    title="Consulter l'article">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="m-0">
                                Dans la catégorie :
                                <strong class="badge badge-dark">
                                    {{ $post->category->name }}
                                </strong>
                            </p>
                        </header>
                        <div class="card-body flex-grow-0 bg-light text-dark">
                            <div class="card-text">
                                {{ Str::limit($post->content, $limit = 150, $end = '...') }}

                            </div>
                            <p class="mt-5 card-text text-right">
                                <a class="btn btn-warning" href="{{ route('detailpost', $post->Id) }}"
                                    title="Consulter l'article">Lire la suite</a>
                            </p>
                        </div>
                        <footer class="card-footer text-white bg-secondary small">
                            Rédigé par
                            <strong>
                                {{ $post->author->firstname }}
                                {{ $post->author->lastname }}
                            </strong>
                            il y a
                            <time>
                                {{ \Carbon\Carbon::create($post->created_at)->diffForHumans() }}
                            </time>
                        </footer>
                    </article>
                @endforeach
                {{ $posts->links() }}
            </div><!-- Fin row -->
        </section>

    </main>
@endsection
