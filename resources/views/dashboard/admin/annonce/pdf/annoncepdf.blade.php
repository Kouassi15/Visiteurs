<!DOCTYPE html>
<html>
<head>
    <title>PV du culte précèdent</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            position: relative;
            margin-bottom: 100px; /* Espace pour le pied de page */
            
        }
        h1 {
            text-align: center;
        }
        .section {
            margin-bottom: 5px;
            margin-left: 80px;
           
        }
        .section h2 {
            font-size: 16px;
            margin-bottom: 2px;
        }
        .section p {
            font-size: 14px;
        }

        /* Styles pour le pied de page */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            border-top: 1px solid #ccc;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Rappel du PV du culte précèdent</h1>

    <div class="section">
        <h2>Dirigeant :{{ $annonce->dirigeant }}</h2>
        <!-- <p>{{ $annonce->dirigeant }}</p> -->
    </div>

    <div class="section">
        <h2>Orateur :{{ $annonce->orateur }}</h2>
        <!-- <p>{{ $annonce->orateur }}</p> -->
    </div>

    <div class="section">
        <h2>Texte :{{ $annonce->texte }}</h2>
        <!-- <p>{{ $annonce->texte }}</p> -->
    </div>

    <div class="section">
        <h2>Thème :{{ $annonce->theme }}</h2>
        <!-- <p>{{ $annonce->theme }}</p> -->
    </div>

    <div class="section">
        <h2>Auditoire :</h2>
        <!-- <p>{{ $annonce->auditoire }}</p> -->
    </div>

    <div class="section">
        <h2>Date : {{ $annonce->date }}</h2>
        <!-- <p>{{ $annonce->date }}</p> -->
    </div>
    <h1>Les annonces de la semaine</h1>
    <div class="section">
        <h2>Annonce de JEPCMA : {{ $annonce->annonceDepartement->annonceJepcma }}</h2>
    </div>
    <div class="section">
        <h2>Annonce de l'AFECMACI : {{ $annonce->annonceDepartement->annonceAfecmaci }}</h2>
    </div>
    <div class="section">
        <h2>Annonce de la FECI : {{ $annonce->annonceDepartement->annonceFeci }}</h2>
    </div>
    <div class="section">
        <h2>Annonce de la RECMACI : {{ $annonce->annonceDepartement->annonceRecmaci }}</h2>
    </div>
    <div class="section">
        <h2>Annonce de la nationale : {{ $annonce->annonceDepartement->annonceNational }}</h2>
    </div>
    <div class="section">
        <h2>Annonce de l'école de Dimanche : {{ $annonce->annonceDepartement->annonceecoleDimanche }}</h2>
    </div>
    <h1>Le programme de l'eglise</h1>
    <div class="section">
        <h2>Enseignement destiné aux femmes tout les mercredi :de {{ $annonce->programme->heureEnseignementFemme }} à {{ $annonce->programme->heurefinEnseignementFemme }}</h2>
    </div>
    <div class="section">
        <h2>Enseignement Biblique tout les vendredi :de {{ $annonce->programme->heureEnseignementBiblique }} à {{ $annonce->programme->heurefinEnseignementBiblique }}</h2>
    </div>

    <!-- Pied de page -->
    <div class="footer">
        <p>PV du culte précèdent - {{ date('Y') }} | Église CMA Dokui2</p>
    </div>
</body>
</html>
