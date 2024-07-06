@extends('layouts.app')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Acteurs</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Acteurs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listes acteurs</li>
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
            <a class="btn btn-success" href="{{ route('acteur.create') }}">Ajouter</a>
        </div>

    <div class="row ">
        <!-- ============================================================== -->
        <!-- data table rowgroup  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Listes des acteurs </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap" >
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Noms</th>
                                    <th>Prenoms</th>
                                    <th>Contacts</th>
                                    <th>Sexes</th>
                                    <th>Type acteurs</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($acteurs as $acteur)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$acteur->nom}}</td>
                                    <td>{{$acteur->prenom}}</td>
                                    <td>{{$acteur->contact}}</td>
                                    <td>{{$acteur->sexe}}</td>
                                    <td>{{$acteur->TypeActeur->libelle}}</td>
                                    <td >{{$acteur->created_at}}</td>
                                    <td width="180%">
                                    <form method="POST" action="{{ route('acteur.delete', $acteur->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <!-- <a href="{{ route('acteur.show', $acteur->id)}}" class="btn btn-primary"> Voir</a> -->
                                    <a href="{{ route('acteur.edit', $acteur->id)}}" class="btn btn-success"> Modifier</a>
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