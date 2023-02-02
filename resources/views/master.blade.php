@extends('app')
@section('title', 'Liste des Étudiants')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one text-white">
                {{ config('app.name')}}
            </h1>

            <div class="row">

                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('create')}}" class="btn btn-outline-info">
                        Ajouter un étudiant
                    </a>
                </div>
            </div>

        </div>


        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section text-white">Liste des Étudiants</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 border-thick-rounded p-4">
                    <div class="table-wrap ">
                        <table class="table text-white">
                            <thead>
                                <tr class="text-white">
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Birthday</th>
                                    <th>City Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($etudiants as $etudiant)
                                <tr>
                                    <th><a href="{{ route('show', $etudiant->id)}}" class="text-decoration-none text-warning">{{ $etudiant->name }}</a></th>
                                    <td>{{ $etudiant->address }}</td>
                                    <td>{{ $etudiant->email }}</td>
                                    <td>{{ $etudiant->phone }}</td>
                                    <td>{{ $etudiant->birthday }}</td>
                                    <td>{{ $etudiant->etudiantHasVille->name }}</td>
                                    <td>
                                        <a href="{{ route('edit', $etudiant->id)}}" class="btn btn-outline-warning mt-1"> Modifier </a>
                                    </td>
                                </tr>
                                @empty
                                <td class="text-danger">Aucun étudiant incscrit au registre</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




@endsection