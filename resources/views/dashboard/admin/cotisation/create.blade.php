@extends('layouts.app')
@section('content')

<!-- <div class="dashboard-wrapper"> -->
<div class="container-fluid  dashboard-content ">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Cotisations </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Cotisations</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Enregistrer une cotisation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic form -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Ajouter une cotisation</h5>
                <div class="card-body">
        
                     <form id="formationForm" class="row g-3" method="POST" action="{{ route('cotisation.store') }}">
                        @csrf

                        <div class="col-md-6 mb-3 form-group">
                            <label for="membre_id" class="form-label">Nom : </label>
                            <select class="form-control @error('membre_id') is-invalid @enderror" name="membre_id">
                                <option value="" selected disabled>Selectionner....</option>
                                @foreach($membres as $membre)
                                <option value="{{$membre->id}}">{{$membre->nom}}</option>
                                @endforeach
                            </select>
                            @error('membre_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="montant_mensuel" class="form-label">Montant Versé par mois: </label>
                            <input type="number" class="form-control @error('montant_mensuel') is-invalid @enderror" id=""
                                placeholder="Entrer le montant" name="montant_mensuel" value="{{ old('montant_mensuel') }}" />
                            @error('montant_mensuel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="mois" class="form-label">Mois: </label>
                            <input type="text" class="form-control @error('mois') is-invalid @enderror" id=""
                                placeholder="Entrer le mois" name="mois" value="{{ old('mois') }}" />
                            @error('mois')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="annee" class="form-label">Années: </label>
                            <input type="text" class="form-control @error('annee') is-invalid @enderror" id=""
                                placeholder="Entrer le montant" name="annee" value="{{ old('annee') }}" />
                            @error('annee')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                            <label for="date" class="form-label">Date: </label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror"
                                id="" placeholder="Entrer la date" name="date"
                                value="{{ old('date') }}" />
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3 float-end">
                                <button type="submit" class="btn btn-primary px-4 m-4">Enregistrer</button>
                                <a href="" type="reset"
                                    class="btn btn-danger px-4">Annuler</a>
                            </div>
                        </div>
                    </form> 
                    <!-- <form id="formationForm" class="row g-3" method="POST" action="{{ route('membre.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-6 mb-3 form-group">
                            <label for="membre_id" class="form-label">Nom : </label>
                            <select class="form-control @error('membre_id') is-invalid @enderror" name="membre_id">
                                <option value="" selected disabled>Selectionner....</option>
                                @foreach($membres as $membre)
                                    <option value="{{ $membre->id }}" {{ old('membre_id') == $membre->id ? 'selected' : '' }}>{{ $membre->nom }}</option>
                                @endforeach
                            </select>
                            @error('membre_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="no_cotisation" class="form-label">Numéro de cotisation : </label>
                            <input type="text" class="form-control @error('no_cotisation') is-invalid @enderror" id="no_cotisation"
                                name="no_cotisation" placeholder="Entrer le numéro de cotisation" value="{{ old('no_cotisation') }}" />
                            @error('no_cotisation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="montant_mensuel" class="form-label">Montant versé par mois : </label>
                            <input type="number" class="form-control @error('montant_mensuel') is-invalid @enderror"
                                name="montant_mensuel" placeholder="Entrer le montant" value="{{ old('montant_mensuel') }}" />
                            @error('montant_mensuel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3 form-group">
                            <label for="date" class="form-label">Date : </label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" 
                                name="date" placeholder="Entrer la date" value="{{ old('date') }}" />
                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3 form-group">
                            <label for="status" class="form-label">Statut : </label>
                            <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                                <option value="" selected disabled>Selectionner....</option>
                                <option value="en cours" {{ old('status') == 'en cours' ? 'selected' : '' }}>En cours</option>
                                <option value="soldé" {{ old('status') == 'soldé' ? 'selected' : '' }}>Soldé</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3 float-end">
                                <button type="submit" class="btn btn-primary px-4 m-4">Enregistrer</button>
                                <a href="{{ route('membre.index') }}" class="btn btn-danger px-4">Annuler</a>
                            </div>
                        </div>
                    </form> -->

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic form -->
        <!-- ============================================================== -->
    </div>
</div>
<!-- </div> -->

@endsection