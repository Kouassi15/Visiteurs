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
            font-size: 20px;
        }
        .section {
            margin-bottom: 1px;
            margin-left: 80px;
           
        }
        .section h2 {
            font-size: 14px;
            margin-bottom: 1px;
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
    <h1><i><u>Rappel du PV du culte précédent du {{ \Carbon\Carbon::parse($annonce->date)->format('d-m-Y') }}
    </u></i></h1>

    <div class="section">
        <h2>Dirigeant : {{ $annonce->dirigeant }}</h2>
        <!-- <p>{{ $annonce->dirigeant }}</p> -->
    </div>

    <div class="section">
        <h2>Orateur : {{ $annonce->orateur }}</h2>
        <!-- <p>{{ $annonce->orateur }}</p> -->
    </div>

    <div class="section">
        <h2>Texte : {{ $annonce->texte }}</h2>
        <!-- <p>{{ $annonce->texte }}</p> -->
    </div>

    <div class="section">
        <h2>Thème : {{ $annonce->theme }}</h2>
        <!-- <p>{{ $annonce->theme }}</p> -->
    </div>

    <div class="section">
        <h2>Auditoire a donné comme suit: Hommes: {{ $annonce->fidele->nombre_hommes }}; 
            Femmes: {{ $annonce->fidele->nombre_femmes }} ; Enfants: {{ $annonce->fidele->nombre_enfants }} ; Visiteur: {{ $annonce->fidele->nombre_visiteurs }}; soit un total de {{ $annonce->fidele->total_fidele }} personnes

        </h2>
        <!-- <p>{{ $annonce->auditoire }}</p> -->
    </div>

    <!-- <div class="section">
        <h2>Date : {{ $annonce->date }}</h2>
         <p>{{ $annonce->date }}</p> 
    </div> -->
    <h1><i><u>Les annonces de la semaine</u></i></h1>
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
    <h1><i><u>Le programme de l'eglise</u></i></h1>
    <div class="section">
        <h2><strong>Enseignement destiné aux femmes</strong> tout les mercredi :de {{ $annonce->programme->heureEnseignementFemme }} à {{ $annonce->programme->heurefinEnseignementFemme }}</h2>
    </div>
    <div class="section">
        <h2>Enseignement Biblique tout les vendredi :de {{ $annonce->programme->heureEnseignementBiblique }} à {{ $annonce->programme->heurefinEnseignementBiblique }}</h2>
    </div>
    <div class="section">
        <h2>Tout les dimanche culte, le premier culte debut : de {{ $annonce->programme->heureCulte1}} à {{ $annonce->programme->heurefinCulte1 }} et</h2>
        <h2>Le deuxième(2) culte debut : de {{ $annonce->programme->heureCulte2}} à {{ $annonce->programme->heurefinCulte2 }}</h2>
        <h2>Eccepter, les derniers dimanche du mois, le culte est jumele, debut : de {{ $annonce->programme->heureCulteJumele}} et prend fin à {{ $annonce->programme->heurefinCulteJumele }}</h2>
    </div>

    <h1><i><u>Remerciements, Nettoyage et Interventions</u></i></h1>
    <div class="section">
        <h2>Remerciements : {{ $annonce->remerciement }}</h2> 
    </div>
    <div class="section">
        <h2>Nettoyage : {{ $annonce->nettoyage }}</h2> 
    </div>
    <div class="section">
        <h2>Interventions : {{ $annonce->intervention }}</h2> 
    </div>
    <!-- Pied de page -->
    <div class="footer">
        <p>PV du culte précèdent - {{ date('Y') }} | Église CMA Dokui2</p>
    </div>
</body>
</html>
