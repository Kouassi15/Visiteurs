@extends('layouts.app')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Responsables</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Responsables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listes des responsabls</li>
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
            <a class="btn btn-success" href="{{ route('responsable.create') }}">Ajouter</a>
        </div>

    <div class="row ">
        <!-- ============================================================== -->
        <!-- data table rowgroup  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Listes des responsables </h5>
                    <!-- <p>This example shows DataTables and the RowGroup extension being used with Bootstrap 4 providing
                        the styling.</p> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Noms</th>
                                    <th>Prenoms</th>
                                    <th>Contacts</th>
                                    <th>Quartiers</th>
                                    <th>Activites</th>
                                    <th>Sexes</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($responsables as $responsable)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$responsable->nom}}</td>
                                    <td>{{$responsable->prenom}}</td>
                                    <td>{{$responsable->contact}}</td>
                                    <td>{{$responsable->quartier}}</td>
                                    <td>{{$responsable->activite}}</td>
                                    <td>{{$responsable->sexe}}</td>
                                    <td>
                                    <form method="POST" action="{{ route('responsable.delete', $responsable->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('responsable.show', $responsable->id)}}" class="btn btn-primary"> View</a>
                                    <a href="{{ route('responsable.edit', $responsable->id)}}" class="btn btn-success"> Edit</a>
                                    <button type="submit" class="btn btn-danger"> Delete</button>
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