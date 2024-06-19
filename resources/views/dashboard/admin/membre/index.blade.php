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
            <a class="btn btn-success" href="{{ route('membre.create') }}">Ajouter</a>
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
                                    <th>Noms</th>
                                    <th>Prenoms</th>
                                    <th>Contacts</th>
                                    <th>Quartier</th>
                                    <th>Activites de l'église</th>
                                    <th>Sexes</th>
                                    <th>Personne contactée en cas urgence</th>
                                    <th>Numero en cas urgence</th>
                                    <th >Date de naissance</th>
                                    <th>Images</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($membres as $membre)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$membre->nom}}</td>
                                    <td>{{$membre->prenom}}</td>
                                    <td>{{$membre->contact}}</td>
                                    <td>{{$membre->domicile}}</td>
                                    <td>{{$membre->poste}}</td>
                                    <td>{{$membre->sexe}}</td>
                                    <td>{{$membre->personne_contacte}}</td>
                                    <td>{{$membre->numero_urgent}}</td>
                                    <td >{{$membre->date_naissance}}</td>
                                    <td><img src="{{asset('assets/images/'.$membre->image)}}"  width="40px" alt="Archive Image"></td>
                                    <td width="180%">
                                    <form method="POST" action="{{ route('membre.delete', $membre->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('membre.show', $membre->id)}}" class="btn btn-primary"> Voir</a>
                                    <a href="{{ route('membre.edit', $membre->id)}}" class="btn btn-success"> Modifier</a>
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