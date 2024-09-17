@extends('layouts.app')
@section('content')

<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Annonces</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Annonce</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Enregistrer une nouvelle annonce</li>
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
                <h5 class="card-header">Editer une annonce</h5>
                <div class="card-body p-4">
                    <form action="{{ route('annonce.update',$annonce->id) }}" method="post" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- <div class="col-md-6 mb-3 form-group">
                             <label for="titre">Titre</label>
                             <input type="text" name="titre" required placeholder="Entrer le titre" class="form-control" value="{{$annonce->titre}}">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="image">Sélectionner l'image</label>
                            <input type="file" name="image" required class="form-control"><br>
                            <img src="{{asset('assets/images/img/'.$annonce->image)}}"  width="80px" alt="Annonce Image">
                        </div> -->
                        <div class="col-md-6 mb-3 form-group">
                            <label for="dirigeant">Dirigeant</label>
                            <input type="text" name="dirigeant" required placeholder="Nom dirigeant" class="form-control" value="{{ $annonce->dirigeant }}">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="orateur">Orateur</label>
                            <input type="text" name="orateur" required placeholder="Nom orateur" class="form-control" value="{{ $annonce->orateur }}">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="texte">Texte</label>
                             <input type="text" name="texte" required placeholder="Entrer le texte" class="form-control" value="{{ $annonce->texte }}">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="theme">Theme</label>
                             <input type="text" name="theme" required placeholder="Entrer le theme" class="form-control" value="{{ $annonce->theme }}">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="fidele_id">Nombre de fideles</label>
                            <select class="form-control" name="fidele_id">
                                <option value="" selected disabled hidden>Sélectionner...</option>
                                @foreach ($fideles as $fidele)
                                <option value="{{ $fidele->id }}" {{ $annonce->fidele->id == $fidele->id ? 'selected' : '' }}>{{ $fidele->total_fidele }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="date">Date</label>
                             <input type="date" name="date" required class="form-control" value="{{ $annonce->date }}">
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                             <label for="description">Description</label>
                             <textarea type="text" name="description"cols="5" rows="5" required placeholder="Entrer le description" class="form-control">{{$annonce->description}}
                             </textarea>
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                            <h1>Annonces par departements</h1>
                        </div>
                        <br>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceJepcma">Annonce de JEPCMA</label>
                             <textarea type="text" name="annonceJepcma"cols="5" rows="5"  placeholder="Annonce JEPCMA" class="form-control">{{$annonce->annonceDepartement->annonceJepcma}}
                             </textarea>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceAfecmaci">Annonce de l'AFECMACI</label>
                             <textarea type="text" name="annonceAfecmaci"cols="5" rows="5"  placeholder="Annonce AFECMACI" class="form-control">{{$annonce->annonceDepartement->annonceAfecmaci}}
                             </textarea>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceFeci">Annonce de FECI</label>
                             <textarea type="text" name="annonceFeci"cols="5" rows="5" placeholder="Annonce FECI" class="form-control">{{$annonce->annonceDepartement->annonceFeci}}
                             </textarea>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceRecmaci">Annonce de RECMACI</label>
                             <textarea type="text" name="annonceRecmaci"cols="5" rows="5"  placeholder="Annonce RECMACI" class="form-control">{{$annonce->annonceDepartement->annonceRecmaci}}
                             </textarea>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceNational">Annonce de la national</label>
                             <textarea type="text" name="annonceNational"cols="5" rows="5" placeholder="Annonce national" class="form-control">{{$annonce->annonceDepartement->annonceNational}}
                             </textarea>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceecoleDimanche">Annonce del'ecole de dimanche</label>
                             <textarea type="text" name="annonceecoleDimanche"cols="5" rows="5" placeholder="Annonce école dimanche" class="form-control">{{$annonce->annonceDepartement->annonceecoleDimanche}}
                             </textarea>
                        </div>
                        <br>
                        <hr>
                        <div class="col-md-12 mb-3 form-group">
                            <h1>Programmes de l'église</h1>
                        </div>
                        <br>
                        <br>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="enseignementFemme">Enseignement des femme</label>
                            <input type="text" name="enseignementFemme"  placeholder="enseignement de femme" class="form-control" value="{{ $annonce->programme->enseignementFemme}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heureEnseignementFemme">Heure du debut </label>
                            <input type="time" name="heureEnseignementFemme" placeholder="2ieme culte" class="form-control"value="{{ $annonce->programme->heureEnseignementFemme}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heurefinEnseignementFemme">Heure de fin </label>
                            <input type="time" name="heurefinEnseignementFemme" placeholder="2ieme culte" class="form-control"value="{{ $annonce->programme->heurefinEnseignementFemme}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="enseignementBiblique">Enseignement Biblique</label>
                            <input type="text" name="enseignementBiblique"  placeholder="Enseignement Biblique" class="form-control" value="{{ $annonce->programme->enseignementBiblique}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heureEnseignementBiblique">Heure du debut enseignements Bibliques </label>
                            <input type="time" name="heureEnseignementBiblique" placeholder="2ieme culte" class="form-control" value="{{ $annonce->programme->heureEnseignementBiblique}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heurefinEnseignementBiblique">Heure du fin enseignements Bibliques </label>
                            <input type="time" name="heurefinEnseignementBiblique" placeholder="2ieme culte" class="form-control" value="{{ $annonce->programme->heurefinEnseignementBiblique}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="premierCulte">Premier Culte</label>
                            <input type="text" name="premierCulte" placeholder="premier Culte" class="form-control" value="{{ $annonce->programme->premierCulte}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heureCulte1">Heure du debut 1er culte</label>
                            <input type="time" name="heureCulte1"  placeholder="heure Culte1" class="form-control" value="{{ $annonce->programme->heureCulte1}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heurefinCulte1">Heure de fin du 1er culte</label>
                            <input type="time" name="heurefinCulte1"  placeholder="heure Culte1" class="form-control" value="{{ $annonce->programme->heurefinCulte1}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="deuxiemeCulte">Deuxieme Culte</label>
                            <input type="text" name="deuxiemeCulte"  placeholder="Deuxieme Culte" class="form-control" value="{{ $annonce->programme->deuxiemeCulte}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heureCulte2">Heure du debut de 2ieme culte </label>
                            <input type="time" name="heureCulte2" placeholder="2ieme culte" class="form-control" value="{{ $annonce->programme->heureCulte2}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heurefinCulte2">Heure de fin de 2ieme culte </label>
                            <input type="time" name="heurefinCulte2" placeholder="2ieme culte" class="form-control" value="{{ $annonce->programme->heurefinCulte2}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="culteJumele">culte Jumele</label>
                            <input type="text" name="culteJumele" placeholder="culteJumele" class="form-control" value="{{ $annonce->programme->culteJumele}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heureCulteJumele">Heure du Culte Jumele</label>
                            <input type="time" name="heureCulteJumele" placeholder="heure Culte Jumele" class="form-control" value="{{ $annonce->programme->heureCulteJumele}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heurefinCulteJumele">Heure de fin du Culte Jumele</label>
                            <input type="time" name="heurefinCulteJumele" placeholder="heure Culte Jumele" class="form-control" value="{{ $annonce->programme->heurefinCulteJumele}}">
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
