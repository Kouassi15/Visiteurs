@extends('layouts.app')
@section('content')

<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Collaborateurs</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Collaborateurs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Enregistrer un nouveau collaborateur</li>
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
                <h5 class="card-header">Ajouter un Responsable d'activité</h5>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('collaborateur.update',$collaborateur->id)}}" class="row g-3">
                                      @csrf
                                      @method('PUT')
                                            <div class="form-group col-md-6">
                                                <label class="name">Nom</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nom" value="{{ $collaborateur->nom }}">
                                            @error('name')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="prenon">Prénom</label>
                                                <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" placeholder="Prénom(s)" value="{{ $collaborateur->prenom}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="email">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $collaborateur->user->email}}">
                                                @error('email')
                                              <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                              </span>
                                              @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="password">Mot de passe</label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{$collaborateur->password}}">
                                                @error('password')
                                              <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                              </span>
                                               @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="contact">Contact</label>
                                                <input type="number" class="form-control @error('contact') is-invalid @enderror" name="contact" placeholder="Contact" value="{{ $collaborateur->contact}}">
                                                @error('contact')
                                             <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="poste">Resposabilité</label>
                                                <input type="text" class="form-control @error('poste') is-invalid @enderror" name="poste" placeholder="poste" value="{{ $collaborateur->poste}}">
                                                @error('poste')
                                             <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                            </div>
                                       <br>
                                            
                                        <button type="submit" class="btn btn-primary m-2">Enregistrer</button>
                                        <a href="{{route('collaborateur.index')}}" class="btn btn-danger m-2">Retour</a>
                                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic form -->
        <!-- ============================================================== -->
    </div>
</div>

@endsection
