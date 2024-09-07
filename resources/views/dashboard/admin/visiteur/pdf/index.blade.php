<!DOCTYPE html>
<html>
<head>
    <title>Rapport PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .header, .footer {
            width: 100%;
            text-align: center;
            position: fixed;
        }
        .header {
            top: 0;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .footer {
            bottom: 0;
            border-top: 1px solid #ddd;
            padding: 10px 0;
        }
        .content {
            margin: 100px 0;
            padding: 0 20px;
        }
        .titre{
            text-align: center;
            text-transform: uppercase;
            margin-top: 100px;
            color: #333;
        }
        .content p {
            margin: 10px 0;
            line-height: 1.6;
            /* margin-bottom: 30px; */
        }
        .content strong {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Rapport de Visiteur</h2>
    </div>

    <div class="content">
        <h1 class="titre">les informations du Visiteur</h1>
        <p><strong>Nom :</strong> {{ $visiteur->nom }}</p>
        <p><strong>Prénom :</strong> {{ $visiteur->prenom }}</p>
        <p><strong>Contact :</strong> {{ $visiteur->contact }}</p>
        <p><strong>Sexe :</strong> {{ $visiteur->sexe }}</p>
        <p><strong>Quartier :</strong> {{ $visiteur->quartier }}</p>
        <p><strong>Motif :</strong> {{ $visiteur->motif }}</p>
        <p><strong>Activité :</strong> {{ $visiteur->activite }}</p>
        <p><strong>Date :</strong> {{$visiteur->date}}</p>
        <p><strong>Type de Visiteur :</strong> {{ $visiteur->type_visiteur->libelle }}</p>
        <p><strong>Responsable:</strong> {{ $visiteur->responsable->nom }}</p>
    </div>

    <div class="footer">
        <p>© 2024 Votre Entreprise. Tous droits réservés.</p>
    </div>
</body>
</html>
