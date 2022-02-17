@extends('admin.admintemplate')

@section('admincontent')
    <div style="display: block">
        <h3>Ajouter une categorie</h3>
        <div>
            <form action="{{ route('addcategory') }}" method="post">
                @csrf
                <input type="text" class="form-controll" name="category">
                <br>
                <input type="submit" value="envoyer ">
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Categorie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            {{ $category->name }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
