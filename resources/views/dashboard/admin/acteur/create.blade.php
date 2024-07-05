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
                            <h2 class="pageheader-title">Visiteurs </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Visiteurs</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Enregistrer un nouveau Visiteur</li>
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
                                <h5 class="card-header">Ajouter un visiteur</h5>
                                <div class="card-body">
                                    <form action="{{ route('visiteur.store')}}" class="row g-3"  method="post">
                                        @csrf
                                        <div class="col-md-6 mb-3 form-group">
                                            <label for="nom">Nom</label>
                                            <input id="nom" type="text" name="nom"  required="" placeholder="Entrer nom" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <label for="prenom">Prénom</label>
                                            <input id="prenom" type="text" name="prenom" required="" placeholder="Entrer le prenom" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <label for="contact">Contact</label>
                                            <input id="contact" type="text" name="contact" placeholder="Entrer le contact" required="" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                        <label for="sexe">Sexe</label>
                                        <select class="form-control " name="sexe">
                                        <option value="" selected disabled hidden>Sélectionner...</option>
                                            <option value="femme">Femme</option>
                                            <option value="homme">Homme</option>
                                        </select>
                                        </div>
                                        <div class="col-md-12 mb-3 form-group">
                                        <label for="statuts">Type acteurs</label>
                                        <select class="form-control" name="typeActeur_id">
                                        <option value="" selected disabled hidden>Sélectionner...</option>
                                         @foreach ($typeacteurs as $typeacteur)
                                         <option value="{{ $typeacteur->id }}">{{ $typeacteur->libelle }}</option>
                                         @endforeach
                                            
                                        </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right d-flex m-4">
                                                    <button type="submit" class="btn btn-space btn-primary">Enregistrer</button>
                                                    <button class="btn btn-space btn-secondary">Retour</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
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