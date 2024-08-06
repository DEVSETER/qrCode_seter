<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Habilitation;
use App\Models\HabilitationPersonnel;
use App\Models\Personnel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class AgentHabilitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habs = [
            (object)[
                "code" => "COND-VOY",
                "libelle" => "Conduire des Trains de Voyageurs"
            ],
            (object)[
                "code" => "COND-TTx",
                "libelle" => "Conduire des Trains du Gestionnaire de l'Infrastructure"
            ],
        ];

        $pers1 = new Personnel();
        $pers1->matricule = 1198;
        $pers1->prenom = "Célestin Michel Maixent";
        $pers1->nom = "SAMBOU";
        $pers1->direction = "DEX";
        $pers1->fonction = "Conducteur de Trains";
        $pers1->email = "celestin-michel-maixent.sambou@seter.sn";
        $pers1->save();

        foreach ($habs as $hab){
            $habilitation = new Habilitation();
            $habilitation->code = $hab->code;
            $habilitation->libelle = $hab->libelle;

            $habilitation->save();
        }

        $data1 = [
             [
                 "Matricule" => 12,
                 "Nom" => "BA",
                 "Prénom" => "Papa Magueye",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "15/12/2021",
                 "Date de fin de validité" => "14/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 151,
                 "Nom" => "BA",
                 "Prénom" => "Samba",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "30/11/2021",
                 "Date de fin de validité" => "29/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 460,
                 "Nom" => "BA",
                 "Prénom" => "Mamadou Alpha",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "19/01/2022",
                 "Date de fin de validité" => "18/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1106,
                 "Nom" => "BA",
                 "Prénom" => "Abdoul",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "14/02/2023",
                 "Date de fin de validité" => "13/02/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 273,
                 "Nom" => "BADIANE",
                 "Prénom" => "Babacar",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "30/11/2021",
                 "Date de fin de validité" => "29/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1194,
                 "Nom" => "BADJI",
                 "Prénom" => "Pierre Xavier",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "28/11/2023",
                 "Date de fin de validité" => "27/11/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 35,
                 "Nom" => "BARRO",
                 "Prénom" => "Marema",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "10/12/2021",
                 "Date de fin de validité" => "09/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 480,
                 "Nom" => "BASSENE",
                 "Prénom" => "Véronique Dingo",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "25/01/2022",
                 "Date de fin de validité" => "24/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 350,
                 "Nom" => "BENGA",
                 "Prénom" => "Cheïkh Tidiane",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "13/12/2021",
                 "Date de fin de validité" => "12/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 258,
                 "Nom" => "BIAGUI",
                 "Prénom" => "Paul Moustapha",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "16/11/2021",
                 "Date de fin de validité" => "15/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 123,
                 "Nom" => "BOYE",
                 "Prénom" => "Malick",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "16/11/2021",
                 "Date de fin de validité" => "15/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 475,
                 "Nom" => "BOYE",
                 "Prénom" => "Amadou Tidiane",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "18/01/2022",
                 "Date de fin de validité" => "17/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1197,
                 "Nom" => "CISSE",
                 "Prénom" => "Dior Seck",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "28/11/2023",
                 "Date de fin de validité" => "27/11/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 354,
                 "Nom" => "COLY",
                 "Prénom" => "Désiré Jean Bertrand Junior",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "30/11/2021",
                 "Date de fin de validité" => "29/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 476,
                 "Nom" => "COLY",
                 "Prénom" => "Batim Ibrahim",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "27/01/2022",
                 "Date de fin de validité" => "28/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 485,
                 "Nom" => "COULIBALY",
                 "Prénom" => "El Hadji Baba",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "29/11/2023",
                 "Date de fin de validité" => "28/11/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 251,
                 "Nom" => "DEME",
                 "Prénom" => "Oumar",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "10/12/2021",
                 "Date de fin de validité" => "09/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 283,
                 "Nom" => "DIA",
                 "Prénom" => "Tabara",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "27/10/2021",
                 "Date de fin de validité" => "26/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 267,
                 "Nom" => "DIAKHATE",
                 "Prénom" => "Seybani",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "12/11/2021",
                 "Date de fin de validité" => "11/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 154,
                 "Nom" => "DIALLO",
                 "Prénom" => "Mamadou",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "16/11/2021",
                 "Date de fin de validité" => "15/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 351,
                 "Nom" => "DIBA",
                 "Prénom" => "Chérif Lamine",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "12/01/2022",
                 "Date de fin de validité" => "11/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1115,
                 "Nom" => "DIENA",
                 "Prénom" => "Philippe Moussa",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "16/02/2023",
                 "Date de fin de validité" => "15/02/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 260,
                 "Nom" => "DIENG",
                 "Prénom" => "Christophe Samba",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "28/10/2021",
                 "Date de fin de validité" => "27/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 532,
                 "Nom" => "DIOH",
                 "Prénom" => "Dominique Latyr",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "28/11/2023",
                 "Date de fin de validité" => "27/11/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 533,
                 "Nom" => "DIOKH",
                 "Prénom" => "Simon Louis Barthélémy",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "27/11/2023",
                 "Date de fin de validité" => "26/11/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 30,
                 "Nom" => "DIONE",
                 "Prénom" => "Djibril",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "11/11/2021",
                 "Date de fin de validité" => "10/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 465,
                 "Nom" => "DIOP",
                 "Prénom" => "Hamet",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "16/02/2022",
                 "Date de fin de validité" => "15/02/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 767,
                 "Nom" => "DIOP",
                 "Prénom" => "El Hadji Aboubakri",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "28/11/2023",
                 "Date de fin de validité" => "27/11/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 124,
                 "Nom" => "DIOUF",
                 "Prénom" => "Matar",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "18/10/2021",
                 "Date de fin de validité" => "17/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 147,
                 "Nom" => "DIOUF",
                 "Prénom" => "Grégoire Djigue Diame",
                 "Fonction" => "Chef Circulation",
                 "Date d'habilitation initiale" => "28/11/2023",
                 "Date de fin de validité" => "27/11/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 15,
                 "Nom" => "FALL",
                 "Prénom" => "Papa Maham",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "30/11/2021",
                 "Date de fin de validité" => "29/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 16,
                 "Nom" => "FALL",
                 "Prénom" => "Sokhna",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "29/10/2021",
                 "Date de fin de validité" => "28/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 252,
                 "Nom" => "FALL",
                 "Prénom" => "Amadou",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "10/12/2021",
                 "Date de fin de validité" => "09/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 546,
                 "Nom" => "FOFANA",
                 "Prénom" => "Papa Mamadou Lamine",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "07/12/2023",
                 "Date de fin de validité" => "06/12/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 481,
                 "Nom" => "GOMES",
                 "Prénom" => "David",
                 "Fonction" => "Planificateur Ressources Conduite",
                 "Date d'habilitation initiale" => "25/03/2022",
                 "Date de fin de validité" => "24/03/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 32,
                 "Nom" => "GUEYE",
                 "Prénom" => "Rouba",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "15/10/2021",
                 "Date de fin de validité" => "14/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1114,
                 "Nom" => "GUEYE",
                 "Prénom" => "Mouhamed",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "14/02/2023",
                 "Date de fin de validité" => "13/02/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 463,
                 "Nom" => "GUISSE",
                 "Prénom" => "Papa Youga",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "18/01/2022",
                 "Date de fin de validité" => "17/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 153,
                 "Nom" => "KALLOGA",
                 "Prénom" => "Iba",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "26/10/2021",
                 "Date de fin de validité" => "25/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 98,
                 "Nom" => "KANDJI",
                 "Prénom" => "Aminata",
                 "Fonction" => "Chef d'Unité Conduite",
                 "Date d'habilitation initiale" => "03/07/2023",
                 "Date de fin de validité" => "02/07/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1205,
                 "Nom" => "KANE",
                 "Prénom" => "Hawo Elimane Racine",
                 "Fonction" => "Coordinatrice Sécurité Conduite",
                 "Date d'habilitation initiale" => "26/11/2023",
                 "Date de fin de validité" => "25/11/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 479,
                 "Nom" => "KEITA",
                 "Prénom" => "Youssoupha",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "15/02/2022",
                 "Date de fin de validité" => "14/02/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 28,
                 "Nom" => "MASSALY",
                 "Prénom" => "Balla Moussa",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "15/12/2021",
                 "Date de fin de validité" => "14/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 158,
                 "Nom" => "MBAYE",
                 "Prénom" => "Abou",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "18/11/2021",
                 "Date de fin de validité" => "17/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 352,
                 "Nom" => "MBAYE",
                 "Prénom" => "Mouhamed Tamsir",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "10/12/2021",
                 "Date de fin de validité" => "09/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 464,
                 "Nom" => "MBAYE",
                 "Prénom" => "Salif",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "21/01/2022",
                 "Date de fin de validité" => "20/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 160,
                 "Nom" => "MBENGUE",
                 "Prénom" => "El Hadji Abdoul Aziz",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "26/10/2021",
                 "Date de fin de validité" => "25/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 356,
                 "Nom" => "MBODJI",
                 "Prénom" => "Papa Ndiaga",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "30/11/2021",
                 "Date de fin de validité" => "29/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 263,
                 "Nom" => "NDIAYE",
                 "Prénom" => "Meïssa",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "06/12/2021",
                 "Date de fin de validité" => "05/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1112,
                 "Nom" => "NDIAYE",
                 "Prénom" => "Mamadou",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "16/03/2023",
                 "Date de fin de validité" => "15/03/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 339,
                 "Nom" => "NDIAYE",
                 "Prénom" => "Thérèse Suzanne",
                 "Fonction" => "Planificatrice Ressources Conduite",
                 "Date d'habilitation initiale" => "28/06/2023",
                 "Date de fin de validité" => "27/06/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 166,
                 "Nom" => "NGALANE",
                 "Prénom" => "Adja Coumba",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "18/11/2021",
                 "Date de fin de validité" => "17/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 261,
                 "Nom" => "NGOM",
                 "Prénom" => "Marie Yvonne Coumba",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "11/11/2021",
                 "Date de fin de validité" => "10/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 461,
                 "Nom" => "NGOM",
                 "Prénom" => "Ababacar Laba",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "25/01/2022",
                 "Date de fin de validité" => "24/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 459,
                 "Nom" => "NIANG",
                 "Prénom" => "Cheïkh",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "19/01/2022",
                 "Date de fin de validité" => "18/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 876,
                 "Nom" => "NIASSE",
                 "Prénom" => "Diéry",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "29/11/2023",
                 "Date de fin de validité" => "28/11/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 358,
                 "Nom" => "SALL",
                 "Prénom" => "Rokhaya Diaw",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "07/12/2021",
                 "Date de fin de validité" => "06/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1198,
                 "Nom" => "SAMBOU",
                 "Prénom" => "Célestin Michel Maixent",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "27/02/2024",
                 "Date de fin de validité" => "26/02/2027",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 468,
                 "Nom" => "SANE",
                 "Prénom" => "Momar Talla",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "02/02/2022",
                 "Date de fin de validité" => "01/02/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 360,
                 "Nom" => "SARR",
                 "Prénom" => "Moïse Martin Sitor",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "07/12/2021",
                 "Date de fin de validité" => "06/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 268,
                 "Nom" => "SECK",
                 "Prénom" => "Fatou Kiné",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "06/12/2021",
                 "Date de fin de validité" => "05/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 157,
                 "Nom" => "SENE",
                 "Prénom" => "Aminata Mansour",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "18/10/2021",
                 "Date de fin de validité" => "17/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 264,
                 "Nom" => "SENE",
                 "Prénom" => "Abdoul Khadre",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "12/11/2021",
                 "Date de fin de validité" => "11/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1109,
                 "Nom" => "SENE",
                 "Prénom" => "Diarra",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "17/02/2023",
                 "Date de fin de validité" => "16/02/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 150,
                 "Nom" => "SIDIBE",
                 "Prénom" => "Moumar Diop",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "11/11/2021",
                 "Date de fin de validité" => "10/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 707,
                 "Nom" => "SOUMARE",
                 "Prénom" => "Rokhaya",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "02/02/2021",
                 "Date de fin de validité" => "01/02/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 161,
                 "Nom" => "SOW",
                 "Prénom" => "Mame Birame Dievo",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "07/12/2021",
                 "Date de fin de validité" => "06/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 269,
                 "Nom" => "SOW",
                 "Prénom" => "Abdou",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "12/11/2021",
                 "Date de fin de validité" => "11/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 472,
                 "Nom" => "SOW",
                 "Prénom" => "Papa Massamba",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "11/02/2022",
                 "Date de fin de validité" => "10/02/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 155,
                 "Nom" => "SY",
                 "Prénom" => "Ndeye Aminata",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "20/10/2021",
                 "Date de fin de validité" => "19/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 156,
                 "Nom" => "SY",
                 "Prénom" => "Ndimou",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "11/11/2021",
                 "Date de fin de validité" => "10/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 265,
                 "Nom" => "SYLLA",
                 "Prénom" => "Baidy",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "18/11/2021",
                 "Date de fin de validité" => "17/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1108,
                 "Nom" => "SYLLA",
                 "Prénom" => "Mor",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "14/02/2023",
                 "Date de fin de validité" => "13/02/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 471,
                 "Nom" => "TALL",
                 "Prénom" => "Papa Momar",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "02/02/2022",
                 "Date de fin de validité" => "01/02/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1027,
                 "Nom" => "TALL",
                 "Prénom" => "Mouhamadou Bamba",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "27/01/2022",
                 "Date de fin de validité" => "26/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 470,
                 "Nom" => "TAMBA",
                 "Prénom" => "Mamadou",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "27/01/2022",
                 "Date de fin de validité" => "26/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 21,
                 "Nom" => "THIAM",
                 "Prénom" => "Adama",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "22/10/2021",
                 "Date de fin de validité" => "21/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 477,
                 "Nom" => "THIAM",
                 "Prénom" => "Mame Mor",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "02/02/2022",
                 "Date de fin de validité" => "01/02/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1035,
                 "Nom" => "THIAM",
                 "Prénom" => "Abdoulaye",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "11/12/2023",
                 "Date de fin de validité" => "10/12/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 272,
                 "Nom" => "THIOYE",
                 "Prénom" => "Absa",
                 "Fonction" => "Conductrice de Trains",
                 "Date d'habilitation initiale" => "28/10/2021",
                 "Date de fin de validité" => "27/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 259,
                 "Nom" => "TINE",
                 "Prénom" => "Jean François",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "11/11/2021",
                 "Date de fin de validité" => "10/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 125,
                 "Nom" => "TOURE",
                 "Prénom" => "Rabiatou",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "11/10/2021",
                 "Date de fin de validité" => "10/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1202,
                 "Nom" => "TOURE",
                 "Prénom" => "Cheïkh Ahmadou Bamba",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "25/11/2023",
                 "Date de fin de validité" => "24/11/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 126,
                 "Nom" => "WADE",
                 "Prénom" => "Séni Sané",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "11/11/2021",
                 "Date de fin de validité" => "10/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 474,
                 "Nom" => "WADE",
                 "Prénom" => "Cheïkh Mbacké",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "15/02/2022",
                 "Date de fin de validité" => "14/02/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 338,
                 "Nom" => "SENGHOR",
                 "Prénom" => "Caroline Dior",
                 "Fonction" => "Adjointe Chef d'Unité Conduite",
                 "Date d'habilitation initiale" => "13/12/2022",
                 "Date de fin de validité" => "12/12/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 13,
                 "Nom" => "BASSENE",
                 "Prénom" => "Martin",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "22/10/2021",
                 "Date de fin de validité" => "21/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 27,
                 "Nom" => "FAYE",
                 "Prénom" => "Papa Mouhamadou",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "08/10/2021",
                 "Date de fin de validité" => "07/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 20,
                 "Nom" => "SOW",
                 "Prénom" => "Mohamed Saïdou",
                 "Fonction" => "Chef d'Equipe Conduite",
                 "Date d'habilitation initiale" => "16/12/2021",
                 "Date de fin de validité" => "15/12/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 131,
                 "Nom" => "NDECKY",
                 "Prénom" => "Dany Rufin",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "28/10/2021",
                 "Date de fin de validité" => "27/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 130,
                 "Nom" => "THIAM",
                 "Prénom" => "Mouhamadou Moustapha",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "16/11/2021",
                 "Date de fin de validité" => "15/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 163,
                 "Nom" => "SENE",
                 "Prénom" => "Mamadou",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "28/10/2021",
                 "Date de fin de validité" => "28/10/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 372,
                 "Nom" => "MBAYE",
                 "Prénom" => "Mouhamed",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "30/11/2021",
                 "Date de fin de validité" => "30/11/2024",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 466,
                 "Nom" => "NDAO",
                 "Prénom" => "Mamadou",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "19/01/2022",
                 "Date de fin de validité" => "18/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 469,
                 "Nom" => "GUEYE",
                 "Prénom" => "Seyni",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "25/01/2022",
                 "Date de fin de validité" => "24/01/2025",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ],
             [
                 "Matricule" => 1116,
                 "Nom" => "BASSE",
                 "Prénom" => "Paul",
                 "Fonction" => "Conducteur de Trains",
                 "Date d'habilitation initiale" => "14/02/2023",
                 "Date de fin de validité" => "13/02/2026",
                 "Code habilitation" => "COND-VOY",
                 "Nom de l'habilitation" => "Conduire des Trains de Voyageurs",
                 "Statut" => "Habilitation initiale"
             ]
         ];


        $habConduite = Habilitation::where(['code' => "COND-VOY"])->firstOrFail();

        foreach ($data1 as $value){
            $personnel = Personnel::where(['matricule' => $value['Matricule']])->first();
            $personnel->fonction = $value['Fonction'];
            $personnel->save();

            $habilitationPersonnel = new HabilitationPersonnel();
            $habilitationPersonnel->habilitation_id = $habConduite->id;
            $habilitationPersonnel->personnel_id = $personnel->id;
            $habilitationPersonnel->date_obtention = Carbon::createFromFormat("d/m/Y", $value["Date d'habilitation initiale"])->format("Y-m-d");
            $habilitationPersonnel->date_fin_validite = Carbon::createFromFormat("d/m/Y", $value["Date de fin de validité"])->format("Y-m-d");;
            $habilitationPersonnel->status = "HABILITATION-INITIALE";

            $habilitationPersonnel->save();

            $action = new Action();
            $action->habilitation_personnel_id = $habilitationPersonnel->id;
            $action->libelle = "HABILITATION-INITIALE: ".$habConduite->libelle;
            $action->acteur = "SYSTEME";
            $action->personnel = $personnel->id;
            $action->created_at = Carbon::createFromFormat("d/m/Y", $value["Date d'habilitation initiale"])->format("Y-m-d H:i:s");
            $action->save();

        }


        $data2 = [
            [
                "Matricule" => 27,
                "Nom" => "FAYE",
                "Prénom" => "Papa Mouhamadou",
                "Fonction" => "Chef d'Equipe Conduite",
                "Date d'habilitation initiale" => "09/11/2021",
                "Date de fin de validité" => "08/11/2024",
                "Code habilitation" => "COND-TTx",
                "Nom de l'habilitation" => "Conduire des Trains du Gestionnaire de l'Infrastructure",
                "Statut" => "Habilitation initiale"
            ],
            [
                "Matricule" => 20,
                "Nom" => "SOW",
                "Prénom" => "Mohamed Saïdou",
                "Fonction" => "Chef d'Equipe Conduite",
                "Date d'habilitation initiale" => "16/12/2021",
                "Date de fin de validité" => "15/12/2024",
                "Code habilitation" => "COND-TTx",
                "Nom de l'habilitation" => "Conduire des Trains du Gestionnaire de l'Infrastructure",
                "Statut" => "Habilitation initiale"
            ],
            [
                "Matricule" => 131,
                "Nom" => "NDECKY",
                "Prénom" => "Dany Rufin",
                "Fonction" => "Conducteur de Trains",
                "Date d'habilitation initiale" => "09/11/2021",
                "Date de fin de validité" => "08/11/2024",
                "Code habilitation" => "COND-TTx",
                "Nom de l'habilitation" => "Conduire des Trains du Gestionnaire de l'Infrastructure",
                "Statut" => "Habilitation initiale"
            ],
            [
                "Matricule" => 130,
                "Nom" => "THIAM",
                "Prénom" => "Mouhamadou Moustapha",
                "Fonction" => "Conducteur de Trains",
                "Date d'habilitation initiale" => "20/09/2022",
                "Date de fin de validité" => "19/09/2025",
                "Code habilitation" => "COND-TTx",
                "Nom de l'habilitation" => "Conduire des Trains du Gestionnaire de l'Infrastructure",
                "Statut" => "Habilitation initiale"
            ],
            [
                "Matricule" => 163,
                "Nom" => "SENE",
                "Prénom" => "Mamadou",
                "Fonction" => "Conducteur de Trains",
                "Date d'habilitation initiale" => "20/09/2022",
                "Date de fin de validité" => "19/09/2025",
                "Code habilitation" => "COND-TTx",
                "Nom de l'habilitation" => "Conduire des Trains du Gestionnaire de l'Infrastructure",
                "Statut" => "Habilitation initiale"
            ],
            [
                "Matricule" => 372,
                "Nom" => "MBAYE",
                "Prénom" => "Mouhamed",
                "Fonction" => "Conducteur de Trains",
                "Date d'habilitation initiale" => "20/09/2022",
                "Date de fin de validité" => "19/09/2025",
                "Code habilitation" => "COND-TTx",
                "Nom de l'habilitation" => "Conduire des Trains du Gestionnaire de l'Infrastructure",
                "Statut" => "Habilitation initiale"
            ],
            [
                "Matricule" => 127,
                "Nom" => "SECK",
                "Prénom" => "Serigne",
                "Fonction" => "Conducteur de Trains Travaux",
                "Date d'habilitation initiale" => "13/03/2023",
                "Date de fin de validité" => "12/03/2026",
                "Code habilitation" => "COND-TTx",
                "Nom de l'habilitation" => "Conduire des Trains du Gestionnaire de l'Infrastructure",
                "Statut" => "Habilitation initiale"
            ]
        ];
        $habTtx = Habilitation::where(['code' => "COND-TTx"])->firstOrFail();

        foreach ($data2 as $value){
            $personnel = Personnel::where(['matricule' => $value['Matricule']])->first();
            $personnel->fonction = $value['Fonction'];
            $personnel->save();

            $habilitationPersonnel = new HabilitationPersonnel();
            $habilitationPersonnel->habilitation_id = $habTtx->id;
            $habilitationPersonnel->personnel_id = $personnel->id;
            $habilitationPersonnel->date_obtention = Carbon::createFromFormat("d/m/Y", $value["Date d'habilitation initiale"])->format("Y-m-d");
            $habilitationPersonnel->date_fin_validite = Carbon::createFromFormat("d/m/Y", $value["Date de fin de validité"])->format("Y-m-d");;
            $habilitationPersonnel->status = "HABILITATION-INITIALE";

            $habilitationPersonnel->save();

            $action = new Action();
            $action->habilitation_personnel_id = $habilitationPersonnel->id;
            $action->libelle = "HABILITATION-INITIALE: ".$habTtx->libelle;
            $action->acteur = "SYSTEME";
            $action->personnel = $personnel->id;
            $action->created_at = Carbon::createFromFormat("d/m/Y", $value["Date d'habilitation initiale"])->format("Y-m-d H:i:s");
            $action->save();
        }

        $data3 = [
             [
                 "Matricule" => 12,
                 "Nom" => "BA",
                 "Prénom" => "Papa Magueye",
                 "Motif" => "Expiration VAS",
                 "Date" => "14/01/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 1106,
                 "Nom" => "BA",
                 "Prénom" => "Abdoul",
                 "Motif" => "Evènement sécurité Train Trip en SR au niveau du RAE 5014",
                 "Date" => "18/04/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 35,
                 "Nom" => "BARRO",
                 "Prénom" => "Marema",
                 "Motif" => "Expiration VAS",
                 "Date" => "13/01/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 480,
                 "Nom" => "BASSENE",
                 "Prénom" => "Martin",
                 "Motif" => "Expiration VAS",
                 "Date" => "14/01/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 258,
                 "Nom" => "BIAGUI",
                 "Prénom" => "Moustapha Paul",
                 "Motif" => "Evènement sécurité franchissement d'un EOA à YEU",
                 "Date" => "25/01/2024",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 123,
                 "Nom" => "BOYE",
                 "Prénom" => "Malick",
                 "Motif" => "Train Trip en SH",
                 "Date" => "29/03/2022",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 476,
                 "Nom" => "COLY",
                 "Prénom" => "Batim Ibrahim",
                 "Motif" => "Evènement sécurité heurt de chainette",
                 "Date" => "13/11/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 251,
                 "Nom" => "DEME",
                 "Prénom" => "Oumar",
                 "Motif" => "Expiration VAS",
                 "Date" => "17/03/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 351,
                 "Nom" => "DIBA",
                 "Prénom" => "Chérif Lamine",
                 "Motif" => "Evènement sécurité accident de personnes",
                 "Date" => "14/02/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 532,
                 "Nom" => "DIOH",
                 "Prénom" => "Dominique Latyr",
                 "Motif" => "Evènement sécurité franchissement CV 8016",
                 "Date" => "09/04/2024",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 124,
                 "Nom" => "DIOUF",
                 "Prénom" => "Matar",
                 "Motif" => "Evènement sécurité Franchissement EOA à YEU sur voie 2",
                 "Date" => "18/04/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 16,
                 "Nom" => "FALL",
                 "Prénom" => "Sokhna",
                 "Motif" => "Expiration VAS",
                 "Date" => "14/01/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 252,
                 "Nom" => "FALL",
                 "Prénom" => "Amadou",
                 "Motif" => "Expiration VAS",
                 "Date" => "17/03/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 32,
                 "Nom" => "GUEYE",
                 "Prénom" => "Rouba",
                 "Motif" => "Expiration VAS",
                 "Date" => "13/01/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 463,
                 "Nom" => "GUISSE",
                 "Prénom" => "Papa Youga",
                 "Motif" => "Dans le cadre de la prévention pour éviter un évènement sécurité ferroviaire plus grave",
                 "Date" => "21/11/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 479,
                 "Nom" => "KEITA",
                 "Prénom" => "Youssoupha",
                 "Motif" => "Train Trip en SR",
                 "Date" => "15/05/2022",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 160,
                 "Nom" => "MBENGUE",
                 "Prénom" => "El Hadji Abdoul",
                 "Motif" => "Expiration VAS",
                 "Date" => "13/01/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 131,
                 "Nom" => "NDECKY",
                 "Prénom" => "Dany Rufin",
                 "Motif" => "Evènement sécurité Train Trip en SR au RAE 2020",
                 "Date" => "29/09/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 1112,
                 "Nom" => "NDIAYE",
                 "Prénom" => "Mamadou",
                 "Motif" => "Evènement sécurité mouvement de rame avec portes ouvertes à DIA sur la voie 2",
                 "Date" => "13/12/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 166,
                 "Nom" => "NGALANE",
                 "Prénom" => "Adja Coumba",
                 "Motif" => "Etat de santé",
                 "Date" => "21/03/2024",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 268,
                 "Nom" => "SECK",
                 "Prénom" => "Fatou Kiné",
                 "Motif" => "Ouverture porte côté entrevoie",
                 "Date" => "31/03/2022",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 268,
                 "Nom" => "SECK",
                 "Prénom" => "Fatou Kiné",
                 "Motif" => "Absence supérieure à 03 mois",
                 "Date" => "15/03/2024",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 264,
                 "Nom" => "SENE",
                 "Prénom" => "Abdoul Khadre",
                 "Motif" => "Train Trip en SR",
                 "Date" => "28/03/2022",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 1109,
                 "Nom" => "SENE",
                 "Prénom" => "Diarra",
                 "Motif" => "Evènement sécurité mouvement de rame avec portes ouvertes à KMF",
                 "Date" => "24/08/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 157,
                 "Nom" => "SENE",
                 "Prénom" => "Aminata Mansour",
                 "Motif" => "Absence supérieure à 03 mois",
                 "Date" => "22/11/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 707,
                 "Nom" => "SOUMARE",
                 "Prénom" => "Rokhaya",
                 "Motif" => "Absence supérieure à 03 mois",
                 "Date" => "23/01/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 155,
                 "Nom" => "SY",
                 "Prénom" => "Ndeye Aminata",
                 "Motif" => "Absence supérieure à 03 mois",
                 "Date" => "12/06/2022",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 471,
                 "Nom" => "TALL",
                 "Prénom" => "Papa Momar",
                 "Motif" => "Evènement sécurité mouvement de rame avec portes ouvertes à DIA",
                 "Date" => "22/08/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 1027,
                 "Nom" => "TALL",
                 "Prénom" => "Mouhamadou Bamba",
                 "Motif" => "Evènement sécurité mouvement de rames avec portes ouvertes à KMF",
                 "Date" => "26/03/2024",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 470,
                 "Nom" => "TAMBA",
                 "Prénom" => "Mamadou",
                 "Motif" => "Evènement sécurité Train Trip en SR au niveau du RAE 2012",
                 "Date" => "01/04/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 1035,
                 "Nom" => "THIAM",
                 "Prénom" => "Abdoulaye",
                 "Motif" => "Evènement sécurité Train Trip en SR au niveau du RAE 5016 à RUF",
                 "Date" => "18/03/2024",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 272,
                 "Nom" => "THIOYE",
                 "Prénom" => "Absa",
                 "Motif" => "Absence supérieure à 03 mois",
                 "Date" => "28/04/2023",
                 "Statut" => "SUSPENDU"
             ],
             [
                 "Matricule" => 259,
                 "Nom" => "TINE",
                 "Prénom" => "Jean François Gérard",
                 "Motif" => "Mise en mouvement en SR en gare de DIA",
                 "Date" => "10/12/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 259,
                 "Nom" => "TINE",
                 "Prénom" => "Jean François Gérard",
                 "Motif" => "Evènement sécurité Train Trip en SR au niveau du RAE 5028 à DIA",
                 "Date" => "13/07/2024",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 126,
                 "Nom" => "WADE",
                 "Prénom" => "Séni Sané",
                 "Motif" => "Evènement sécurité mouvement de rame avec portes ouvertes à DIA",
                 "Date" => "14/06/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ],
             [
                 "Matricule" => 474,
                 "Nom" => "WADE",
                 "Prénom" => "Cheikh Mbacké",
                 "Motif" => "Evènement sécurité Train Trip en SR au niveau du RAE 5028",
                 "Date" => "10/12/2023",
                 "Statut" => "RETRAIT AU POSTE"
             ]
        ];



        foreach ($data3 as $value){
            $personnel = Personnel::where(['matricule' => $value['Matricule']])->first();
            $habPersonnel = HabilitationPersonnel::where(['habilitation_id' => $habConduite->id, 'personnel_id' => $personnel->id])->first();
            $habPersonnel->status = $value["Statut"];
            $habPersonnel->save();

            $action = new Action();
            $action->habilitation_personnel_id = $habPersonnel->id;
            $action->libelle = $value["Motif"];
            $action->acteur = "SYSTEME";
            $action->personnel = $personnel->id;
            $action->created_at = Carbon::createFromFormat("d/m/Y", $value["Date"])->format("Y-m-d H:i:s");
            $action->save();
        }





    }
}
