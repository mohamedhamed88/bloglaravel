@extends('admin.admintemplate')

@section('admincontent')
    <div style="display: block">
        <h3>Ajouter un article</h3>
        <div>
            <form action="{{ route('addarticle') }}" method="post">
                @csrf
                <select name="category_id" id="">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }} </option>
                    @endforeach
                </select>
                <br>
                <select name="author_id" id="">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->firstname }} {{ $author->lastname }}</option>
                    @endforeach
                </select>
                <br>
                <input type="text" class="form-controll" name="title" placeholder="Titre">
                <br>
                <textarea name="content" placeholder="Contenu"></textarea>
                <input type="submit" value="envoyer ">
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Article</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post->content }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
