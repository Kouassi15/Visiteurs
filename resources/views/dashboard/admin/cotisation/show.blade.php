@extends('layouts.app')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Membres</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Membres</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listes Membres</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
    <div class="col-lg-1 my-3 ">
            <a class="btn btn-success" href="{{ route('cotisation.create') }}">Ajouter</a>
        </div>

    <div class="row ">
        <!-- ============================================================== -->
        <!-- data table rowgroup  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Listes des Membres </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap" >
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Noms & Prenoms</th>
                                    <th>Montant mensuel</th>
                                    <th>Montant total</th>
                                    <th>Mois</th>
                                    <th>Années</th>
                                    <th>Date </th>
                                    <th>status</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cotisations as $cotisation)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$cotisation->membre->nom}}  {{$cotisation->membre->prenom}}</td>
                                    <td>{{$cotisation->montant_mensuel}}</td>
                                    <td>{{$cotisation->montant_total}}</td>
                                    <td>{{$cotisation->mois}}</td>
                                    <td>{{$cotisation->annee}}</td>
                                    <td>{{ $cotisation->date }}</td>
                                    <td class=" m-2">
                                        @if($cotisation->status == "en cours")
                                       <span class="badge bg-warning text-white">En cours</span>
                                       @endif
                                       @if($cotisation->status == "soldé")
                                       <span class="badge bg-success text-white">Soldé</span>
                                       @endif
                                     </td>
                                    {{-- <td>
                                        <form method="POST" action="{{ route('cotisation.delete', $cotisation->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('membre.show', $cotisation->id)}}" class="btn btn-primary"> Voir</a>
                                            <a href="{{ route('membre.edit', $cotisation->id)}}" class="btn btn-success"> Modifier</a>
                                            <button type="submit" class="btn btn-danger"> Supprimer</button>
                                        </form>
                                    </td> --}}
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