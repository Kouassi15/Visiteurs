@extends('layouts.app')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Activites</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Activites</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listes des activites</li>
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
            <a class="btn btn-success" href="{{ route('activite.create') }}">Ajouter</a>
        </div>

    <div class="row ">
        <!-- ============================================================== -->
        <!-- data table rowgroup  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Listes des activites </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap" >
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($activites as $activite)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$activite->titre}}</td>
                                    <td>{{$activite->description}}</td>
                                    <td>{{$activite->date}}</td>
                                    <td width="180%">
                                    <form method="POST" action="{{ route('activite.delete', $activite->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('activite.show', $activite->id)}}" class="btn btn-primary"> Voir</a>
                                    <a href="{{ route('activite.edit', $activite->id)}}" class="btn btn-success"> Modifier</a>
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