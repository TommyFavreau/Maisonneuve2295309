@extends('app')
@section('title', 'Mettre a jour')
@section('content')

<div class="form-body">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">
                <h1 class="display-one mr-3">
                    Mettre a jour les informations d'un étudiant
                </h1>

                <div class="form-items border-thick-rounded">

                    <form  method="post">
                        @csrf
                        @method('put')

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="name">Nom </label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" class="form-control" value="{{ $etudiant->name}}" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="address">Adresse</label>
                            <div class="col-sm-10">
                                <input type="text" id="address" name="address" class="form-control" value="{{ $etudiant->address}}" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="email">Courriel</label>
                            <div class="col-sm-10">
                                <input type="text" id="email" name="email" class="form-control" value="{{ $etudiant->email}}" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="phone">Téléphone</label>
                            <div class="col-sm-10">
                                <input type="tel" id="phone" name="phone" class="form-control mt-3" value="{{ $etudiant->phone}}" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="birthday">Naissance</label>
                            <div class="col-sm-10">
                                <input type="date" id="birthday" name="birthday" class="form-control mt-3" value="{{ $etudiant->birthday}}" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="ville_id"> Ville </label>
                            <div class="col-sm-10">
                                <select class="form-select" name="ville_id" id="ville_id" required>
                                    <option value="{{ $etudiant->etudiantHasVille->id }}">{{ $etudiant->etudiantHasVille->name }}</option>
                                    @foreach($villes as $ville)
                                    <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-button mt-3 my-auto">
                            <input type="submit" value="Mettre a jour" class="btn btn-outline-success">
                            <a href="{{ route('index')}}" class="btn btn-outline-danger m-2 justify-self-end">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection