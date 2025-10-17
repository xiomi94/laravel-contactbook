@extends('layout')

@section('content')
    <div class="form-container">
        <h1>Crear un nuevo contacto</h1>
        <form method="POST" action="{{ route('contacts.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Escriba un nombre">
            </div>
            <div class="form-group">
                <label for="phoneNumber">Teléfono</label>
                <input type="text" name="phoneNumber" class="form-control" id="phoneNumber"
                    placeholder="Escriba un teléfono">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Escriba un email">
            </div>
            <button type="submit" class="btn-primary">Enviar</button>
        </form>
    </div>
@endsection

