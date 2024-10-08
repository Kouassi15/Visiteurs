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
                <h5 class="card-header">Ajouter une annonce</h5>
                <div class="card-body p-4">
                    <form action="{{ route('annonce.store',$fidele->id) }}" method="post" class="row g-3" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="fidele_id" value="{{$fidele->id}}">
                        <div class="col-md-6 mb-3 form-group">
                            <label for="dirigeant">Dirigeant</label>
                            <input type="text" name="dirigeant" required placeholder="Nom dirigeant" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="orateur">Orateur</label>
                            <input type="text" name="orateur" required placeholder="Nom orateur" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="texte">Texte</label>
                             <input type="text" name="texte" required placeholder="Entrer le texte" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="theme">Theme</label>
                             <input type="text" name="theme" required placeholder="Entrer le theme" class="form-control">
                        </div>
                        
                        <div class="col-md-6 mb-3 form-group">
                             <label for="date">Date</label>
                             <input type="date" name="date" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="nettoyage">Nettoyage du temple</label>
                             <input type="text" name="nettoyage"  placeholder="Entrer le groupe" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                             <label for="description">Description</label>
                             <textarea type="text" name="description"cols="2" rows="2" placeholder="Entrer le description" class="form-control">
                             </textarea>
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                            <h3>Interventions et remerciements</h1>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="remerciement">Remerciements</label>
                             <input type="text" name="remerciement" placeholder="Entrer" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="intervention">Interventions</label>
                             <input type="text" name="intervention"  placeholder="Entrer" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                            <h3>Annonces par departements</h1>
                        </div>
                        <br>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceJepcma">Annonce de JEPCMA</label>
                             <textarea type="text" name="annonceJepcma"cols="5" rows="5"  placeholder="Annonce JEPCMA" class="form-control">
                             </textarea>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceAfecmaci">Annonce de l'AFECMACI</label>
                             <textarea type="text" name="annonceAfecmaci"cols="5" rows="5"  placeholder="Annonce AFECMACI" class="form-control">
                             </textarea>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceFeci">Annonce de FECI</label>
                             <textarea type="text" name="annonceFeci"cols="5" rows="5" placeholder="Annonce FECI" class="form-control">
                             </textarea>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceRecmaci">Annonce de RECMACI</label>
                             <textarea type="text" name="annonceRecmaci"cols="5" rows="5"  placeholder="Annonce RECMACI" class="form-control">
                             </textarea>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceNational">Annonce de la national</label>
                             <textarea type="text" name="annonceNational"cols="5" rows="5" placeholder="Annonce national" class="form-control">
                             </textarea>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="annonceecoleDimanche">Annonce del'ecole de dimanche</label>
                             <textarea type="text" name="annonceecoleDimanche"cols="5" rows="5" placeholder="Annonce école dimanche" class="form-control">
                             </textarea>
                        </div>
                        <br>
                        <hr>
                        <div class="col-md-12 mb-3 form-group">
                            <h3>Programme de l'église</h1>
                        </div>
                        <br>
                        <br>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="enseignementFemme">Enseignement destiné aux femmes</label>
                            <input type="text" name="enseignementFemme"  placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heureEnseignementFemme">Heure du debut </label>
                            <input type="time" name="heureEnseignementFemme" placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heurefinEnseignementFemme">Heure de fin </label>
                            <input type="time" name="heurefinEnseignementFemme" placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="enseignementBiblique">Enseignement Biblique</label>
                            <input type="text" name="enseignementBiblique"  placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heureEnseignementBiblique">Heure du debut  </label>
                            <input type="time" name="heureEnseignementBiblique" placeholder="2ieme culte" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heurefinEnseignementBiblique">Heure du fin </label>
                            <input type="time" name="heurefinEnseignementBiblique" placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="premierCulte">Premier Culte</label>
                            <input type="text" name="premierCulte" placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heureCulte1">Heure du debut 1er culte</label>
                            <input type="time" name="heureCulte1"  placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heurefinCulte1">Heure de fin du 1er culte</label>
                            <input type="time" name="heurefinCulte1"  placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="deuxiemeCulte">Deuxieme Culte</label>
                            <input type="text" name="deuxiemeCulte"  placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heureCulte2">Heure du debut de 2ieme culte </label>
                            <input type="time" name="heureCulte2" placeholder="2ieme culte" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heurefinCulte2">Heure de fin de 2ieme culte </label>
                            <input type="time" name="heurefinCulte2" placeholder="2ieme culte" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="culteJumele">culte Jumele</label>
                            <input type="text" name="culteJumele" placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heureCulteJumele">Heure du Culte Jumele</label>
                            <input type="time" name="heureCulteJumele" placeholder="" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label for="heurefinCulteJumele">Heure de fin du Culte Jumele</label>
                            <input type="time" name="heurefinCulteJumele" placeholder="" class="form-control">
                        </div>
                        <br>
                        <hr>
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
