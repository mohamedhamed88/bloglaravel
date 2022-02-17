@extends('admin.admintemplate')

@section('admincontent')
    <div style="display: block">
        <h3><button id="addform"> Ajouter un article</button></h3>
        <div id="add" style="display:none">
            <form action="{{ route('addarticle') }}" method="post" enctype="multipart/form-data">
                @csrf
                <select name="category_id" id="">
                    @foreach ($categories as $category)
                        <option value="{{ $category->Id }}">{{ $category->name }} </option>
                    @endforeach
                </select>
                <br>
                <select name="author_id" id="">
                    @foreach ($authors as $author)
                        <option value="{{ $author->Id }}">{{ $author->firstname }} {{ $author->lastname }}</option>
                    @endforeach
                </select>
                <br>
                <input type="text" class="form-controll" name="title" placeholder="Titre">
                <br>
                <textarea name="content" placeholder="Contenu"></textarea>
                <br>
                <input type="file" name="file">
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

    <script>
        var btn = document.getElementById('addform');
        btn.addEventListener('click', function() {
            var div = document.getElementById('add');
            div.style.display = "block";
        })
    </script>
@endsection
