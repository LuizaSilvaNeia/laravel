@extends('layouts.base')

@section('content')
    <form action="{{ route('usuario.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label class="form-label" for="name">Nome*</label>
                <input class="form-control" type="text" name="name" id="name"   required>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">E-mail*</label>
                <input class="form-control" type="email" name="email" id="email" required >
            </div>

            <div class="col-md-6">
                <label for="password" class="form-label">Senha*</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Confirma Senha*</label>
                <input class="form-control" type="password" name="" id="" required>
            </div>

            <div class="col-md-2">
                <input class="btn btn-outline-success" type="submit" value="Cadastrar">
            </div>

        </div>
    </form>

@endsection
