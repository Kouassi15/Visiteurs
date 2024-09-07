@extends('layouts.app')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Annonces</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Annonces</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listes Annonces</li>
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
            <a class="btn btn-success" href="{{ route('annonce.create') }}">Ajouter</a>
        </div>

    <div class="row ">
        <!-- ============================================================== -->
        <!-- data table rowgroup  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Listes des annonces </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap" >
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Dirigeant</th>
                                    <th>Orateur</th>
                                    <th>Texte</th>
                                    <th>Theme</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Annonce de JEPCMA</th>
                                    <th>Annonce de l'AFECMA</th>
                                    <th>Annonce de la FECI</th>
                                    <th>Annonce de RECMACI</th>
                                    <th>Annonce de la Nationale</th>
                                    <th>Annonce de l'Ecole deDimanche</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($annonces as $annonce)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$annonce->dirigeant}}</td>
                                    <td>{{$annonce->orateur}}</td>
                                    <td>{{$annonce->texte}}</td>
                                    <td>{{$annonce->theme}}</td>
                                    <td>{{$annonce->description}}</td>
                                    <td>{{$annonce->date}}</td>
                                    <td>{{$annonce->annonceDepartement->annonceJepcma}}</td>
                                    <td>{{$annonce->annonceDepartement->annonceAfecmaci }}</td>
                                    <td>{{$annonce->annonceDepartement->annonceFeci }}</td>
                                    <td>{{$annonce->annonceDepartement->annonceRecmaci }}</td>
                                    <td>{{$annonce->annonceDepartement->annonceNational }}</td>
                                    <td>{{$annonce->annonceDepartement->annonceecoleDimanche }}</td>
                                    <!-- <td><img src="{{asset('assets/images/img/'.$annonce->image)}}"  width="80px" alt="Annonce Image"></td> -->
                                    <td width="180%">
                                    <form method="POST" action="{{ route('annonce.delete', $annonce->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('annonce.show', $annonce->id)}}" class="btn btn-primary"> Voir</a>
                                    <a href="{{ route('annonce.annoncePdf', $annonce->id)}}" class="btn btn-primary"> Voir</a>
                                    <a href="{{ route('annonce.edit', $annonce->id)}}" class="btn btn-success"> Modifier</a>
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