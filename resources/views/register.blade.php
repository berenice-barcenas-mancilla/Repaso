@extends('layouts.app')
@section('titulo', 'Registrar')
@section('content')
    <div class="container mt-5 mb-5">   
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'correcto',
                    text: 'Libro {{ session('success') }}',
                });
            </script>
        @endif
        
        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('error') }}',
                });
            </script>
        @endif
    
    
        <form method="POST" action="/save">
            @csrf
            <div class="col-md-6">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" min="13" max="13" class="form-control" placeholder="Ingresa el ISBN" name="isbn" id="isbn" value="{{ old('isbn') }}" >
                <p class="text-danger">{{ $errors->first('isbn') }}</p>
            </div>
            
            <div class="col-md-6">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Ingresa el autor del libro" value="{{ old('autor') }}" >
                <p class="text-danger">{{ $errors->first('autor') }} </p>
            </div>

            <div class="col-md-6">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa el titulo del libro" value="{{ old('titulo') }}" >
                <p class="text-danger">{{ $errors->first('titulo') }} </p>
            </div>

            <div class="col-md-6">
                <label for="paginas" class="form-label">Páginas</label>
                <input type="text" class="form-control" id="paginas" name="paginas" value="{{ old('paginas') }}" >
                <p class="text-danger">{{ $errors->first('paginas') }}</p>
            </div>
            <div class="col-md-10">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" value="{{ old('editorial') }}" id="editorial" name="editorial" placeholder="Ingresa el nombre de la editorial" >
                <p class="text-danger">{{ $errors->first('editorial') }}</p>
            </div>
            <div class="col-md-10">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Ingresa el email de la editorial" >
                <p class="text-danger">{{ $errors->first('email') }}</p>
            </div>
           
            <div class="col-12">
                <button class="btn btn-outline-secondary" type="submit">Guardar</button>
            </div>
        </form>
    </div>

@endsection
