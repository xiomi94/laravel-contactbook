<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda de contactos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1 class="title">Lista de contactos</h1>

    <ul class="card-grid">
        @foreach ($contacts as $contact)
            <li class="card">
                <div class="card-text">
                    <p><strong>{{ $contact->name }}</strong></p>
                    <p><strong>Teléfono: </strong>{{ $contact->phoneNumber }}</p>
                    <p><strong>Email: </strong>{{ $contact->email }}</p>
                </div>

                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

    <div style="text-align:center; margin-top: 20px;">
        <a href="{{ route('contacts.create') }}">
            <button type="submit" class="btn btn-primary">Añadir contacto</button>
        </a>
    </div>
</body>

</html>
