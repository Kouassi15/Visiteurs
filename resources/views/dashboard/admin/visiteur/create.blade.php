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
                                            <input id="nom" type="text" name="nom"  required="" placeholder="Entrer nom du visiteur" class="form-control">
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
                                            <label for="quartier">Quartier</label>
                                            <input id="quartier" type="text" name="quartier" placeholder="Entrer le quartier" required="" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <label for="activite">Activite</label>
                                            <input id="activite" type="text" name="activite" placeholder="Entrer l'activite" required="" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                        <label for="sexe">Sexe</label>
                                        <select class="form-control " name="sexe">
                                        <option value="" selected disabled hidden>Sélectionner...</option>
                                            <option value="femme">Femme</option>
                                            <option value="homme">Homme</option>
                                        </select>
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                        <label for="statuts">Statuts</label>
                                        <select class="form-control" name="type_visiteur_id">
                                        <option value="" selected disabled hidden>Sélectionner...</option>
                                         @foreach ($typevisiteurs as $typevisiteur)
                                         <option value="{{ $typevisiteur->id }}">{{ $typevisiteur->libelle }}</option>
                                         @endforeach
                                            
                                        </select>
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                        <label for="statuts">Responsables</label>
                                        <select class="form-control" name="responsable_id">
                                        <option value="" selected disabled hidden>Sélectionner...</option>
                                         @foreach ($responsables as $responsable)
                                         <option value="{{ $responsable->id }}">{{ $responsable->nom }}</option>
                                         @endforeach
                                        </select>
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <label for="motif">Motif de la visite</label>
                                            <textarea id="motif" type="text" name="motif"  placeholder="Entrer le motif" required="" class="form-control"></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <label for="date">Date</label>
                                            <input id="date" type="date" name="date"  required="" placeholder="Entrer nom du visiteur" class="form-control">
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