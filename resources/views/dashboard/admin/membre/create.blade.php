@extends('layouts.app')
@section('content')

<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Adhérents</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Adhérents</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Enregistrer un nouveau adhérent</li>
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
                <h5 class="card-header">Ajouter un adhérent</h5>
                <div class="card-body p-4">
                    <form action="{{ route('membre.store') }}" method="post" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6 mb-3 form-group">
                             <label for="nom">Nom</label>
                             <input type="text" name="nom" required placeholder="Entrer le nom" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="prenom">Prénom</label>
                             <input type="text" name="prenom" required placeholder="Entrer le prénom" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" required placeholder="Entrer le contact" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="domicile">Quartier</label>
                            <input type="text" name="domicile" required placeholder="Entrer le quartier" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="poste">Profession</label>
                            <input type="text" name="poste" required placeholder="Entrer l'activité" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="sexe">Sexe</label>
                            <select class="form-control" name="sexe" required>
                                <option value="" selected disabled hidden>Sélectionner...</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div> 
                        <div class="col-md-6 mb-3 form-group">
                            <label for="lieu">Lieu de naissance</label>
                            <input type="text" name="lieu" required placeholder="Entrer le lieu" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="date_naissance">Date de naissance</label>
                            <input type="date" name="date_naissance" required placeholder="Entrer l'activité" class="form-control">
                        </div>
                       
                        <div class="col-md-6 mb-3 form-group">
                            <label for="image">Sélectionner l'image</label>
                            <input type="file" name="image" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="personne_contacte">Nom de la personne contactée en cas d'urgence</label>
                            <input type="text" name="personne_contacte" required placeholder="Personne contactée" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                            <label for="numero_urgent">Numéro de la personne contactée en cas d'urgence</label>
                            <input type="text" name="numero_urgent" required placeholder="Numéro urgent" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pl-0 ">
                                <p class="text-right d-flex m-4">
                                    <button type="submit" class="btn btn-space btn-primary m-2">Enregistrer</button>
                                    <button type="button" onclick="history.back();" class="btn btn-space btn-secondary m-2">Retour</button>
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

@endsection
