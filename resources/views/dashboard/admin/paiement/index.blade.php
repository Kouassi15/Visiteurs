@extends('layouts.app')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Paiements</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="{{route('membre.show', $cotisation->id)}}" class="breadcrumb-link">Cotisation</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listes Paiements</li>
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
                Ajouter
            </button>
        </div>

        <div class="col-12 collapse" id="editInfosForm">
            <div class="card">
                <h5 class="card-header">Ajouter une cotisation</h5>
                <div class="card-body">
                     <form id="formationForm" class="row g-3" method="POST" action="{{ route('paiement.store') }}">
                        @csrf
                        <input class="" type="hidden" name="cotisation_id" value="{{ $cotisation->id}}" placeholder="">
                        <div class="col-md-6 mb-3 form-group">
                            <label for="montant_verse" class="form-label">Montant versé</label>
                            <input type="number" class="form-control @error('montant_verse') is-invalid @enderror" id=""
                                placeholder="Entrer le montant" name="montant_verse" value="{{ old('montant_verse') }}" />
                            @error('montant_verse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                         <div class="col-md-6 mb-3 form-group">
                            <label for="mode_paiement" class="form-label">Mode de paiement</label>
                            <select id="mode_paiement" name="mode_paiement" class="form-control @error('mode_paiement') is-invalid @enderror">
                                <option value="" selected disabled>Selectionner....</option>
                                <option value="mobile">Mobile</option>
                                <option value="espece">Espèce</option>
                            </select>
                            @error('mois')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                         <div class="col-md-6 mb-3 form-group">
                            <label for="mois" class="form-label">Mois: </label>
                            <select id="mois" name="mois" class="form-control @error('mois') is-invalid @enderror">
                                <option value="" selected disabled>Selectionner....</option>
                                <option value="janvier">Janvier</option>
                                <option value="fevrier">Février</option>
                                <option value="mars">Mars</option>
                                <option value="avril">Avril</option>
                                <option value="mai">Mai</option>
                                <option value="juin">Juin</option>
                                <option value="juillet">Juillet</option>
                                <option value="aout">Août</option>
                                <option value="septembre">Septembre</option>
                                <option value="octobre">Octobre</option>
                                <option value="novembre">Novembre</option>
                                <option value="decembre">Décembre</option>
                            </select>
                            @error('mois')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="date_paiement" class="form-label">Date paiement</label>
                            <input type="date" class="form-control @error('date_paiement') is-invalid @enderror"
                                id="" placeholder="Entrer la date fin" name="date_paiement"
                                value="{{ old('date_paiement') }}" />
                            @error('date_paiement')
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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Listes des paiements</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap" >
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Versement</th>
                                    <th>Mode de paiement</th>
                                    <th>Date paiement</th>
                                    <th>Mois payé</th>
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($paiements as $paiement)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$paiement->montant_verse}}</td>
                                    <td>{{$paiement->mode_paiement}}</td>
                                    <td>{{$paiement->date_paiement}}</td>
                                    <td>{{$paiement->mois}}</td>
                                    <td class=" m-2">
                                        <!-- <a href="{{ route('membre.show', $paiement->id)}}" class="btn btn-primary"> Voir</a> -->
                                        <a href="{{ route('membre.edit', $paiement->id)}}" class="btn btn-success"> Modifier</a>
                                         <button type="submit" class="btn btn-danger"> Supprimer</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end data table rowgroup  -->
        <!-- ============================================================== -->
    </div>
</div>

@endsection