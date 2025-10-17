<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agenda de contactos</title>
</head>

<body>
  <h1>Lista de contactos</h1>
  <ul>
    @foreach ($contacts as $contact)
      <li>{{ $contact->name }} {{ $contact->phoneNumber }} {{ $contact->email }}</li>
    @endforeach
  </ul>
</body>

</html>
