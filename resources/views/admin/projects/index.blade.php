@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-primary" href="{{route('admin.projects.create')}}">Add project</a>
            </div>
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message')}}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Azione</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{{ $project->titolo }}</td>
                            <td>{{ $project->descrizione }}</td>
                            <td>
                                <a class="btn-sm btn btn-primary" href="{{route('admin.projects.show', $project->titolo)}}"><i class="fas fa-eye"></i></a>
                                <a class="btn-sm btn btn-warning" href="{{route('admin.projects.edit', $project->titolo)}}"><i class="fas fa-edit"></i></a>
                                <form class="d-inline" action="{{route('admin.projects.destroy', $project->titolo)}}" method="POST">
                                    @csrf
                                    
                                    @method('DELETE')
                                    <button type="submit" class="btn-sm btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>                 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection