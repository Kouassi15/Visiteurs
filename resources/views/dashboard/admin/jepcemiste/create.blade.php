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
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Jepcemistes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Enregistrer un nouveau jepcemiste</li>
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
                <h5 class="card-header">Ajouter un jepcemiste</h5>
                <div class="card-body p-4">
                    <form action="{{ route('jepcemiste.store') }}" method="post" class="row g-3" enctype="multipart/form-data">
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
                            <label for="activite">Activite</label>
                            <input type="text" name="activite" required placeholder="Entrer l'activite" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="quartier">Quartier</label>
                            <input type="text" name="quartier" required placeholder="Entrer le quartier" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="profession">Profession</label>
                            <input type="text" name="profession" required placeholder="Entrer la profession" class="form-control">
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
                            <label for="photo">Sélectionner l'image</label>
                            <input type="file" name="photo" required class="form-control">
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
