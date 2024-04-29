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
                            <h2 class="pageheader-title">Adéhrents</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Adéhrents</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Enregistrer un nouveau adéhrent</li>
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
                                <h5 class="card-header">Ajouter un adéhrent</h5>
                                <div class="card-body">
                                    <form action="{{ route('membre.store')}}"  method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <input type="text" name="nom"  required="" placeholder="Entrer le nom " class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom">Prénom</label>
                                            <input type="text" name="prenom" required="" placeholder="Entrer le prenom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">Contact</label>
                                            <input  type="text" name="contact" placeholder="Entrer le contact" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="quartier">Quartier</label>
                                            <input  type="text" name="quartier" placeholder="Entrer le quartier" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="activite">Activites</label>
                                            <input type="text" name="activite" placeholder="Entrer l'activite" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="sexe">Sexe</label>
                                        <select class="form-control " name="sexe">
                                        <option value="" selected disabled hidden>Sélectionner...</option>
                                            <option value="femme">Femme</option>
                                            <option value="homme">Homme</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="images">Selectionner l'image</label>
                                            <input id="image" type="file" name="images"  required="" class="form-control">
                                        </div>
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