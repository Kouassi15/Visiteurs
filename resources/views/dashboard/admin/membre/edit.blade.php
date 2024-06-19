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
                <div class="card-body">
                    <form action="{{ route('membre.update',$membre->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                             <label for="nom">Nom</label>
                             <input type="text" name="nom" required placeholder="Entrer le nom" class="form-control" value="{{$membre->nom}}">
                        </div>
                        <div class="form-group">
                             <label for="prenom">Prénom</label>
                             <input type="text" name="prenom" required placeholder="Entrer le prénom" class="form-control" value="{{$membre->prenom}}">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" required placeholder="Entrer le contact" class="form-control" value="{{$membre->contact}}">
                        </div>
                        <div class="form-group">
                            <label for="domicile">Quartier</label>
                            <input type="text" name="domicile" required placeholder="Entrer le quartier" class="form-control" value="{{$membre->domicile}}">
                        </div>
                        <div class="form-group">
                            <label for="poste">Activités de l'église</label>
                            <input type="text" name="poste" required placeholder="Entrer l'activité" class="form-control" value="{{$membre->poste}}">
                        </div> 
                        <div class="form-group">
                            <label for="date_naissance">Date de naissance</label>
                            <input type="date" name="date_naissance" required placeholder="Entrer l'activité" class="form-control" value="{{$membre->date_naissance}}">
                        </div>
                        <div class="form-group">
                            <label for="sexe">Sexe</label>
                            <select class="form-control" name="sexe" required>
                                <option value="" selected disabled hidden>Sélectionner...</option>
                                <option value="Homme"{{ $membre->sexe == 'Homme' ? 'selected' : '' }}>Homme</option>
                                <option value="Femme"{{ $membre->sexe == 'femme' ? 'selected' : '' }}>Femme</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Sélectionner l'image</label>
                            <input type="file" name="image" required class="form-control" value="{{$membre->image}}"><br>
                            <img src="{{asset('assets/images/'.$membre->image)}}"  width="80px" alt="Membre Image">
                        </div>
                        <div class="form-group">
                            <label for="personne_contacte">Personne contactée en cas d'urgence</label>
                            <input type="text" name="personne_contacte" required placeholder="Personne contactée" class="form-control" value="{{$membre->personne_contacte}}">
                        </div>
                        <div class="form-group">
                            <label for="numero_urgent">Numéro en cas d'urgence</label>
                            <input type="text" name="numero_urgent" required placeholder="Numéro urgent" class="form-control" value="{{$membre->numero_urgent}}">
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Enregistrer</button>
                                    <button type="button" onclick="history.back();" class="btn btn-space btn-secondary">Retour</button>
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
