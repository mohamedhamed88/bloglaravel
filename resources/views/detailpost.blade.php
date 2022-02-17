@extends('layouts.layout')

@section('content')
    <main class="d-flex flex-column">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">{{ $post->category->name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
            </ol>
        </nav>
        <article class="flex-grow-1 d-lg-flex align-items-stretch">
            <div class="col-lg-7 p-5">
                <header class="jumbotron " style="background-image: uploads/3wa.jpg">
                    <h1>
                        {{ $post->title }}
                    </h1>
                    <hr class="my-4">
                    <p class="m-0">Dans la catégorie : <span
                            class="badge badge-dark">{{ $post->category->name }}</span></p>
                    <small>
                        Rédigé par
                        {{ $post->author->firstname }}
                        {{ $post->author->lastname }}
                        le
                        <time datetime="{{ $post->created_at }}">
                            {{ \Carbon\Carbon::create($post->created_at)->diffForHumans() }}
                        </time>
                    </small>
                </header>
                <div class="px-5">

                    <img src="{{ asset('imagepost/' . $post->image) }}" style="width:150px;height:150px">

                    {{ $post->content }}
                </div>
            </div>
            <aside id="commentList" class="col-lg-5 p-5 bg-secondary text-light">

                @if (count($post->comments) > 0)
                    <h2 class="h4 text-center">
                        Liste des commentaires

                        <small>({{ count($post->comments) }})</small>

                    </h2>

                    <ul class="list-group text-white">
                        @foreach ($post->comments as $comment)
                            <li class="list-group-item bg-dark">
                                <i class="fa fa-comment" aria-hidden="true"></i>
                                Rédigé par
                                <strong>{{ $comment->user->name }}</strong>
                                <div class="py-2">{{ $comment->content }}</div>
                            </li>
                        @endforeach
                    </ul>

                @else
                    <p>Cet article n'a pas encore de commentaire</p>
                @endif
                @auth
                    <!-- Formulaire de saisie d'un nouveau commentaire pour cet article -->
                    <form id="new-comment-form" class="py-5" action="/add_comment" method="post">
                        @csrf
                        <!-- Utilisation d'un champ caché pour spécifier à quel article rattacher le commentaire -->
                        <input type="hidden" id="postId" name="postId" value="<?= $post['Id'] ?>">

                        <fieldset class="bg-warning text-dark pt-4 px-4 rounded">
                            <legend class="h4 p-2 bg-dark rounded text-white text-center">Nouveau commentaire</legend>
                            <ul class="list-unstyled">

                                <li class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="comment">Commentaire </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                                    </div>
                                </li>
                                <li class="text-right">
                                    <button id="add-comment" class="btn btn-dark" type="submit">Ajouter</button>
                                    <a class="btn btn-secondary" href="index.php">Annuler</a>
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                @endauth
                <p class="text-center">
                    <a href="https://sql.sh/cours/insert-into" class="btn btn-dark">SQL INSERT</a>
                    <a href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/hidden"
                        class="btn btn-dark">input type hidden</a>
                </p>
            </aside>
        </article>
    </main>
@endsection
