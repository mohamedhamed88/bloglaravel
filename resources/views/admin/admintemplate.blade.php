@extends('layouts.layout')

@section('content')
    <div class="flex-grow-1 d-md-flex align-items-stretch">
        <nav class="col-md-2 py-3 bg-light">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link navside" href="{{ route('admin') }}">
                        <i class="fas fa-newspaper" aria-hidden="true"></i>
                        Gestion des articles
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link navside " href="{{ route('admincategory') }}">
                        <i class="fas fa-tags" aria-hidden="true"></i>
                        Gestion des catégories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navside " href="{{ route('adminauthor') }}">
                        <i class="fas fa-users" aria-hidden="true"></i>
                        Gestion des auteurs
                    </a>
                </li>
            </ul>
        </nav>

        @yield('admincontent')
    </div>
@endsection
