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
                Ajouter
            </button>
        </div>

        <div class="col-12 collapse" id="editInfosForm">
            <div class="card">
                <h5 class="card-header">Ajouter une cotisation</h5>
                <div class="card-body">
                     <form id="formationForm" class="row g-3" method="POST" action="{{ route('cotisation.store') }}">
                        @csrf
                        <input class="" type="hidden" name="membre_id"  value="{{ $membre->id}}" placeholder="">
                        <div class="col-md-6 mb-3 form-group">
                            <label for="libelle" class="form-label">Libellé</label>
                            <input type="text" class="form-control @error('libelle') is-invalid @enderror" id=""
                                placeholder="Entrer le libellé" name="libelle" value="{{ old('libelle') }}" />
                            @error('libelle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                         <div class="col-md-6 mb-3 form-group">
                            <label for="libelle" class="form-label">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id=""
                                placeholder="Entrer la description" name="description" value="{{ old('description') }}" />
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="date_debut" class="form-label">Date debut </label>
                            <input type="date" class="form-control @error('date_debut') is-invalid @enderror" id=""
                                placeholder="Entrer la date debut" name="date_debut" value="{{ old('date_debut') }}" />
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
                                value="{{ old('date_fin') }}" />
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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Listes des cotisation </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap" >
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Libellé</th>
                                    <th>Description</th>
                                    <th>Date debut</th>
                                    <th>Date fin</th>
                                    <th>Montant Payés</th>
                                    <th>status</th>
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cotisations as $cotisation)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$cotisation->libelle}}</td>
                                    <td>{{$cotisation->description}}</td>
                                    <td>{{$cotisation->date_debut}}</td>
                                    <td>{{$cotisation->date_fin}}</td>
                                    <td>{{$cotisation->montant_total }}</td>
                                    <td class=" m-2">
                                        @if($cotisation->status == "en cours")
                                       <span class="badge bg-warning text-white">En cours</span>
                                       @endif
                                       @if($cotisation->status == "soldé")
                                       <span class="badge bg-success text-white">Soldé</span>
                                       @endif
                                    </td>
                                    <td class=" m-2">
                                        <form method="POST" action="{{ route('cotisation.delete', $cotisation->id)}}">
                                         @csrf
                                         @method('DELETE')
                                         <a href="{{ route('cotisation.show.paiement', $cotisation->id)}}" class="btn btn-primary"> Voir et un versement</a>
                                         <a href="{{ route('cotisation.edit', $cotisation->id)}}" class="btn btn-success"> Modifier</a>
                                         <button type="submit" class="btn btn-danger"> Supprimer</button>
                                        </form>
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