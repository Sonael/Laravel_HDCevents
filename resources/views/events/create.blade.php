@extends('layouts.main')

@section('title',"Criar Evento")


@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu Evento</h1>

    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="Image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>

        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>

        <div class="form-group">
            <label for="title">Privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" placeholder="Descrição do Evento"  class="form-control"></textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>

</div>

@endsection