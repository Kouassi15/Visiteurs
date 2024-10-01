@extends('layouts.app')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Cotisations</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Cotisations</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listes Cotisations</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
        <div class="col-lg-1 my-3">
            <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#editInfosForm" aria-expanded="false" aria-controls="editInfosForm">
                <em class="fa-solid fa-pen"></em>
                Editer
            </button>
        </div>

        <div class="col-12 collapse" id="editInfosForm">
            <div class="card">
                <h5 class="card-header">Ajouter une cotisation</h5>
                <div class="card-body">
                     <form id="formationForm" class="row g-3" method="POST" action="{{ route('cotisation.update',$cotisation->id) }}">
                        @csrf
                        @method('PUT')
                        <input class="" type="hidden" name="membre_id"  value="{{ $cotisation->membre->id}}" placeholder="">
                        <div class="col-md-6 mb-3 form-group">
                            <label for="libelle" class="form-label">Libellé</label>
                            <input type="text" class="form-control @error('libelle') is-invalid @enderror" id=""
                                placeholder="Entrer le montant" name="libelle" value="{{ $cotisation->libelle }}" />
                            @error('libelle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                         <div class="col-md-6 mb-3 form-group">
                            <label for="libelle" class="form-label">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id=""
                                placeholder="Entrer le montant" name="description" value="{{ $cotisation->description }}" />
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="date_debut" class="form-label">Date debut </label>
                            <input type="date" class="form-control @error('date_debut') is-invalid @enderror" id=""
                                placeholder="Entrer la date debut" name="date_debut" value="{{ $cotisation->date_debut }}" />
                            @error('date_debut')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="date" class="form-label">Date fin </label>
                            <input type="date" class="form-control @error('date_fin') is-invalid @enderror"
                                id="" placeholder="Entrer la date fin" name="date_fin"
                                value="{{ $cotisation->date_fin }}" />
                            @error('date_fin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3 float-end">
                                <button type="submit" class="btn btn-primary px-4 m-4">Enregistrer</button>
                                <a href="" type="reset"
                                    class="btn btn-danger px-4">Annuler</a>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>


    {{-- tableau --}}
    <div class="row ">
        <!-- ============================================================== -->
        <!-- data table rowgroup  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- end data table rowgroup  -->
        <!-- ============================================================== -->
    </div>
</div>

@endsection