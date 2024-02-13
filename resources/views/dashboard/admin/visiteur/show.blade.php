@extends('layouts.app')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Visiteurs</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Visiteurs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listes Visiteurs</li>
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
            <a class="btn btn-success" href="{{ route('visiteur.index') }}">Listes</a>
        </div>

    <div class="row ">
        <!-- ============================================================== -->
        <!-- data table rowgroup  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Listes des visiteurs </h5>
                    <!-- <p>This example shows DataTables and the RowGroup extension being used with Bootstrap 4 providing
                        the styling.</p> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Noms</th>
                                    <th>Prenoms</th>
                                    <th>Contacts</th>
                                    <th>Activites</th>
                                    <th>Sexes</th>
                                    <th>Responsables</th>
                                    <th>Type visiteurs</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$visiteur->nom}}</td>
                                    <td>{{$visiteur->prenom}}</td>
                                    <td>{{$visiteur->contact}}</td>
                                    <td>{{$visiteur->quartier}}</td>
                                    <td>{{$visiteur->activite}}</td>
                                    <td>{{$visiteur->sexe}}</td>
                                    <td>{{$visiteur->responsable->nom}}</td>
                                    <td>{{$visiteur->type_visiteur->libelle}}</td>
                                    <td>{{$visiteur->date}}</td>
                                    
                                </tr>
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