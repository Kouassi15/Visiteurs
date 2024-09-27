@extends('layouts.app')
@section('content')

<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Editer Activites</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Activite</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editer une Activite</li>
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
                <h5 class="card-header">Ajouter une activite</h5>
                <div class="card-body p-4">
                    <form action="{{ route('activite.update', $activite->id) }}" method="post" class="row g-3">
                        @csrf

                        <div class="col-md-6 mb-3 form-group">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" required placeholder="Entrer le titre" class="form-control" value="{{$activite->titre}}">
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                             <label for="date">Date</label>
                             <input type="date" name="date" required class="form-control" value="{{$activite->date}}">
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                             <label for="description">Description</label>
                             <textarea type="text" name="description"cols="2" rows="2" placeholder="Entrer le description" class="form-control" value="">{{$activite->description}}
                             </textarea>
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
