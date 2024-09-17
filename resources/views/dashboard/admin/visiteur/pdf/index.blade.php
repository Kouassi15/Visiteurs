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
        .footer {
            width: 100%;
            text-align: center;
            position: fixed;
            bottom: 0;
            border-top: 1px solid #ddd;
            padding: 10px 0;
        }
        .content {
            margin: 100px 0;
            padding: 0 20px;
        }
        .titre {
            text-align: center;
            text-transform: uppercase;
            margin-top: 100px;
            color: #333;
            font-size: 18px;
        }
        table {
            width: 100%;
            border-collapse: collapse; /* Supprime l'espacement entre les bordures des cellules */
            margin-top: 30px;
        }
        table, th, td {
            border: 1px solid #ddd; /* Ajoute une bordure autour du tableau et des cellules */
        }
        th, td {
            padding: 10px;
            text-align: left; /* Aligne le texte à gauche */
        }
        th {
            background-color: #f4f4f4; /* Fond pour l'entête du tableau */
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="content">
        <h1 class="titre">Les informations du Visiteur du dimanche {{$visiteur->created_at->format('d-m-Y H:i')}}</h1>
        <table>
            <tr>
                <!-- <th>Champ</th> -->
                <th colspan="2" class="sous-titre">Informations</th>
            </tr>
            <tr>
                <td>Nom</td>
                <td>{{ $visiteur->nom }}</td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td>{{ $visiteur->prenom }}</td>
            </tr>
            <tr>
                <td>Contact</td>
                <td>{{ $visiteur->contact }}</td>
            </tr>
            <tr>
                <td>Sexe</td>
                <td>{{ $visiteur->sexe }}</td>
            </tr>
            <tr>
                <td>Quartier</td>
                <td>{{ $visiteur->quartier }}</td>
            </tr>
            <tr>
                <td>Motif</td>
                <td>{{ $visiteur->motif }}</td>
            </tr>
            <tr>
                <td>Activité</td>
                <td>{{ $visiteur->activite }}</td>
            </tr>
            <tr>
                <td>Date</td>
                <td>{{ $visiteur->date }}</td>
            </tr>
            <tr>
                <td>Type de Visiteur</td>
                <td>{{ $visiteur->type_visiteur->libelle }}</td>
            </tr>
            <tr>
                <td>Responsable</td>
                <td>{{ $visiteur->responsable->nom }} {{ $visiteur->responsable->prenom }}</td>
            </tr>
        </table>
    </div>

    <div class="footer">
        <p>© 2024 Eglise CMA Dokui2. Tous droits réservés.</p>
    </div>
</body>
</html>
