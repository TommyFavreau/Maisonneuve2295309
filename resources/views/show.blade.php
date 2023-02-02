@extends('app')
@section('title', 'Liste des étudiants')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="{{ route('index') }}" class="btn btn-outline-info btn-sm mt-4">Retour à la liste</a>
            <h4 class="display-one mt-2 py-4 text-uppercase">
                {{ $etudiant->name }}
            </h4>
            <div class="d-md-inline-flex border-thick-rounded p-4">
                <div class="col-6">
                    <p><span class="text-white-50 text-uppercase">Courriel :</span> {{ $etudiant->email }} </p>
                    <p><span class="text-white-50">Téléphone : </span> {{ $etudiant->phone }} </p>
                    <p><span class="text-white-50">Date de naissance : </span> {{ $etudiant->birthday }} </p>
                    <p><span class="text-white-50">Adresse : </span>  {{ $etudiant->address }} </p>
                    <p><span class="text-white-50">Ville : </span> {{ $etudiant->etudiantHasVille->name}} </p>
                </div>
                <div class="col-6">
                    <div class="col-6 m-5 d-grid justify-content-center">
                        <a href="{{route('edit', $etudiant->id)}}" class="btn btn-outline-warning mt-1 justify-content-end">Modifier</a>
                    </div>
                    <div class="col-6 m-5 d-flex justify-content-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger mt-1 justify-content-end" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            Effacer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark-theme p-3">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header no-border justify-content-center">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">SUPPRIMER UN ÉTUDIANT</h1>
            </div>
            <div class="modal-body no-border justify-content-center">
                Êtes-vous certain de vouloir retirer cet étudiant du registre ?
            </div>
            <div class="modal-footer no-border justify-content-center">
                <button type="button" class="btn btn-outline-info mx-2" data-bs-dismiss="modal">Annuler</button>
                <form action="{{ route('edit', $etudiant->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-outline-danger mx-2" value="Effacer">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection