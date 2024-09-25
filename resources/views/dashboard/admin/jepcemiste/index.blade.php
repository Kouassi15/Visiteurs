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
            <a class="btn btn-success" href="{{ route('jepcemiste.create') }}">Ajouter</a>
        </div>

    <div class="row ">
        <!-- ============================================================== -->
        <!-- data table rowgroup  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Listes des Jepcemistes </h5>
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
                                    <th>Quartier</th>
                                    <th >Activite</th>
                                    <th>Profession</th>
                                    <!-- <th>Sexes</th>
                                    <th>Personne contactée en cas urgence</th>
                                    <th>Numero en cas urgence</th>
                                    <th >Date de naissance</th> -->
                                    <th>Photos</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jepcemistes as $jepcemiste)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$jepcemiste->nom}}</td>
                                    <td>{{$jepcemiste->prenom}}</td>
                                    <td>{{$jepcemiste->contact}}</td>
                                    <td >{{$jepcemiste->activite}}</td>
                                    <td>{{$jepcemiste->quartier}}</td>
                                    <td>{{$jepcemiste->profession}}</td>
                                    <td><img src="{{asset('assets/images/photos/'.$jepcemiste->photo)}}"  width="40px" alt="Photo jepcemiste"></td>
                                    <td width="180%">
                                    <form method="POST" action="{{ route('membre.delete', $jepcemiste->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('cotisation.show', $jepcemiste->id)}}" class="btn btn-primary"> Voir mes cotisations</a>
                                    <a href="{{ route('membre.edit', $jepcemiste->id)}}" class="btn btn-success"> Modifier</a>
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