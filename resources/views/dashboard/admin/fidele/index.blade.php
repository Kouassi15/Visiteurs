@extends('layouts.app')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Nombre de personnes</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Nombre des personnes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listes des personnes présentes </li>
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
            <a class="btn btn-success" href="{{ route('fidele.create')}}">Ajouter</a>
        </div>

    <div class="row ">
        <!-- ============================================================== -->
        <!-- data table rowgroup  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Listes des personnes présentes </h5>
                    <!-- <p>This example shows DataTables and the RowGroup extension being used with Bootstrap 4 providing
                        the styling.</p> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre des enfants</th>
                                    <th>Nombre des femmes</th>
                                    <th>Nombre des hommes</th>
                                    <th>Nombre des visiteurs</th>
                                    <th>Total des personnes</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fideles as $fidele)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$fidele->nombre_enfants}}</td>
                                    <td>{{$fidele->nombre_femmes}}</td>
                                    <td>{{$fidele->nombre_hommes}}</td>
                                    <td>{{$fidele->nombre_visiteurs}}</td>
                                    <td>{{$fidele->total_fidele}}</td>
                                    <td>{{$fidele->date}}</td>
                                    <td>
                                    <form method="POST" action="{{ route('fidele.delete', $fidele->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('fidele.show', $fidele->id)}}" class="btn btn-primary"> View</a>
                                    <a href="{{ route('fidele.edit', $fidele->id)}}" class="btn btn-success"> Edit</a>
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