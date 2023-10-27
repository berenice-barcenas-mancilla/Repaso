@extends('layouts.app')
@section('titulo', 'Registrar')
@section('content')
    <div class="container mt-5 mb-5">   
        <div class="container mt-2 mb-2">
            
        </div>
        <form class="row g-3 needs-validation" novalidate method="POST" action="/save">
            @csrf
            <div class="col-md-6">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" min="13" max="13" class="form-control" placeholder="Ingresa el ISBN" name="isbn" id="isbn" value="" required>
                <div class="valid-feedback">
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Ingresa el autor del libro" value="" required>
                <div class="valid-feedback">

                </div>
            </div>

            <div class="col-md-6">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa el titulo del libro" value="" required>
                <div class="valid-feedback">

                </div>
            </div>

            <div class="col-md-6">
                <label for="paginas" class="form-label">Páginas</label>
                <input type="text" class="form-control" id="paginas" name="paginas" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-10">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Ingresa el nombre de la editorial" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-10">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa el email de la editorial" required>
                <div class="invalid-feedback">

                </div>
            </div>
           
            <div class="col-12">
                <button class="btn btn-outline-secondary" type="submit">Guardar</button>
            </div>
        </form>
    </div>

@endsection
