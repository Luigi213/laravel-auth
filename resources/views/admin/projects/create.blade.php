@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('admin.projects.store')}}">
                    @csrf 
                    
                    <div class="form-group my-2">
                        <label class="fs-2 fw-semibold" for="title">Titolo</label>
                        <input type="text" class="form-control" name="titolo" id="title" placeholder="Inserire Titolo">
                    </div>
                    <div class="form-group my-2">
                        <label class="fs-2 fw-semibold" for="description">Descrizione</label>
                        <textarea type="password" class="form-control" name="descrizione" id="description" placeholder="Inserire Descrizione"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection