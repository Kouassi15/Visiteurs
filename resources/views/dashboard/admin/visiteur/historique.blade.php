@extends('layouts.app')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Historique des visiteurs</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Historiques</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Historique des viisiteurs</li>
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
            <a class="btn btn-success" href="{{ route('visiteur.create') }}">Ajouter</a>
        </div>

    <div class="row ">
        <!-- ============================================================== -->
        <!-- data table rowgroup  -->
        <!-- ============================================================== -->
        <form action="{{ route('filter.date') }}" method="get" >
            @csrf
        <!--<div class="col-xl-12 mx-auto"> -->
        <div class="card-body d-flex align-items-center">
         <div class=" col-md-5 m-5 p-2">
            <div class="form-group">
             <label for="start_date">Date debut</label>
             <input id="start_date" type="date" name="start_date"  value="{{ old('start_date') }}" required="" class="form-control">
            </div>
        </div>
        <div class=" col-md-5 m-5 p-2">
            <div class="form-group">
             <label for="end_date">Date fin</label>
             <input id="end_date" type="date" name="end_date"  value="{{ old('end_date') }}"  required=""  class="form-control">
            </div>
        </div>
        <div class=" col-md-2 mt-4 p-2">
            <div class="form-group">
             <!-- <label for="date">Date debut</label> -->
             <button id="" type="submit" class="btn btn-success">Recherche</div>
            </div>
        </div>
     </div>
     </form>
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
                                    <th>#</th>
                                    <th>Noms</th>
                                    <th>Prenoms</th>
                                    <th>Contacts</th>
                                    <th>Activites</th>
                                    <th>Sexes</th>
                                    <th>Responsables</th>
                                    <th>Type visiteurs</th>
                                    <th>Date</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($visiteurs as $visiteur)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$visiteur->nom}}</td>
                                    <td>{{$visiteur->prenom}}</td>
                                    <td>{{$visiteur->contact}}</td>
                                    <td>{{$visiteur->activite}}</td>
                                    <td>{{$visiteur->sexe}}</td>
                                    <td>{{$visiteur->responsable->nom}}</td>
                                    <td>{{$visiteur->type_visiteur->libelle}}</td>
                                    <td>{{$visiteur->date}}</td>
                                    <!-- <td>
                                    <form method="POST" action="{{ route('visiteur.delete', $visiteur->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('visiteur.show', $visiteur->id)}}" class="btn btn-primary"> View</a>
                                    <a href="{{ route('visiteur.edit', $visiteur->id)}}" class="btn btn-success"> Edit</a>
                                    <button type="submit" class="btn btn-danger"> Delete</button>
                                   </form>
                                    </td> -->
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