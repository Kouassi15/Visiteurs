@extends('layouts.app')
@section('content')

<!-- <div class="dashboard-wrapper"> -->
            <div class="container-fluid  dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Total personnes</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tota personnes</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Editer le nombre de personne</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Editer le nombre de personne</h5>
                                <div class="card-body">
                                    <form action="{{ route('fidele.update', $fidele->id)}}"  method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nombre_enfants">Nombre enfants</label>
                                            <input id="nombre_enfants" type="text" name="nombre_enfants" value="{{$fidele->nombre_enfants}}"  required="" placeholder="Entrer nombre d'enfant" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre_femmes">Nombre des femme</label>
                                            <input id="nombre_femmes" type="text" name="nombre_femmes" value="{{$fidele->nombre_femmes}}" required="" placeholder="Entrer le nombre des femmes" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre_hommes">Nombre des hommes</label>
                                            <input id="nombre_hommes" type="text" name="nombre_hommes" value="{{$fidele->nombre_hommes}}" placeholder="Entrer le nombre des hommes" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre_visiteurs">Nombre des visiteurs</label>
                                            <input id="nombre_visiteurs" type="text" name="nombre_visiteurs" value="{{$fidele->nombre_visiteurs}}" placeholder="Entrer le nombre des visiteurs" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input id="date" type="date" name="date" value="{{$fidele->date}}" required="" placeholder="Entrer nom du visiteur" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="total_fidele">Total personne</label>
                                            <input id="total_fidele" type="text" name="total_fidele" value="{{$fidele->total_fidele}}" readonly placeholder="Entrer le total de fidele" required="" class="form-control">
                                        </div> 
                                        <div class="row">
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Enregistrer</button>
                                                    <button class="btn btn-space btn-secondary">Retour</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
                        
                    </div>
            </div>
        <!-- </div> -->
        <script>
    var nombreEnfantsInput = document.getElementById('nombre_enfants');
    var nombreFemmesInput = document.getElementById('nombre_femmes');
    var nombreHommesInput = document.getElementById('nombre_hommes');
    var nombreVisiteursInput = document.getElementById('nombre_visiteurs');
    var totalFideleInput = document.getElementById('total_fidele');

    [nombreEnfantsInput, nombreFemmesInput, nombreHommesInput, nombreVisiteursInput].forEach(input => {
        input.addEventListener('input', calculerNombreTotal);
    });

    function calculerNombreTotal() {
        var nombreEnfants = parseInt(nombreEnfantsInput.value) || 0;
        var nombreFemmes = parseInt(nombreFemmesInput.value) || 0;
        var nombreHommes = parseInt(nombreHommesInput.value) || 0;
        var nombreVisiteurs = parseInt(nombreVisiteursInput.value) || 0;

        var totalFidele = nombreEnfants + nombreFemmes + nombreHommes + nombreVisiteurs;
        totalFideleInput.value = totalFidele;
    }
</script>

@endsection