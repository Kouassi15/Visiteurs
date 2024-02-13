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
                            <h2 class="pageheader-title">Responsables </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Responsable</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Editer un responsable</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="col-lg-1 my-3 ">
                  <a class="btn btn-primary" href="{{ route('responsable.index') }}">Listes</a>
                  </div>
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Ajouter un responsable</h5>
                                <div class="card-body">
                                    <form action="{{ route('responsable.update',$responsable->id)}}"  method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <input id="nom" type="text" name="nom" value="{{$responsable->nom}}"  required="" placeholder="Entrer nom du visiteur" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom">Prénom</label>
                                            <input id="prenom" type="text" name="prenom" value="{{$responsable->prenom}}" required="" placeholder="Entrer le prenom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">Contact</label>
                                            <input id="contact" type="text" name="contact" value="{{$responsable->contact}}" placeholder="Entrer le contact" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="quartier">Quartier</label>
                                            <input id="quartier" type="text" name="quartier" value="{{$responsable->quartier}}" placeholder="Entrer le quartier" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="activite">Activites</label>
                                            <input id="activite" type="text" name="activite" value="{{$responsable->activite}}" placeholder="Entrer l'activite" required="" class="form-control">
                                        </div>
                                        <!-- <div class="form-group">
                                        <label for="inputSexe">Sexe</label>
                                        <select class="form-control " name="sexe">
                                        <option value="" selected disabled hidden>Sélectionner...</option>
                                            <option value="femme">Femme</option>
                                            <option value="homme">Homme</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputStatuts">Statuts</label>
                                        <select class="form-control" name="statuts">
                                        <option value="" selected disabled hidden>Sélectionner...</option>
                                            <option value="nc">Nouveau convertis</option>
                                            <option value="dc">Déja convertis</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input id="date" type="date" name="date"  required="" placeholder="Entrer nom du visiteur" class="form-control">
                                        </div> -->
                                        <div class="row">
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
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