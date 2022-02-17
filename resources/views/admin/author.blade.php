@extends('admin.admintemplate')

@section('admincontent')
<div style="display: block">
    <h3>Ajouter un auteur</h3>
    <div>
        <form action="{{ route('addauthor') }}" method="post">
            @csrf
            <input type="text" class="form-controll" name="firstname" placeholder="prénom">
            <br>
            <input type="text" class="form-controll" name="lastname" placeholder="nom">
            <br>
            <input type="submit" value="envoyer ">
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
            <tr>
                <td>
                    {{ $author->lastname }}
                </td>
                <td>
                    {{ $author->firstname }}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>
@endsection
