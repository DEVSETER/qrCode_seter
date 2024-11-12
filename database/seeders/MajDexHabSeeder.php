<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Habilitation;
use App\Models\HabilitationPersonnel;
use App\Models\Personnel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class MajDexHabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "Matricule" => 12,
                "Nom" => "BA",
                "Prenom" => "Papa Magueye",
                "Motif" => "Expiration VAS",
                "Date retrait" => "14/01/2023",
                "Date levee" => "17/01/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 1106,
                "Nom" => "BA",
                "Prenom" => "Abdoul",
                "Motif" => "Evènement sécurité Train Trip en SR au niveau du RAE 5014",
                "Date retrait" => "18/04/2023",
                "Date levee" => "25/05/2023",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 35,
                "Nom" => "BARRO",
                "Prenom" => "Marema",
                "Motif" => "Expiration VAS",
                "Date retrait" => "13/01/2023",
                "Date levee" => "19/01/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 480,
                "Nom" => "BASSENE",
                "Prenom" => "Martin",
                "Motif" => "Expiration VAS",
                "Date retrait" => "14/01/2023",
                "Date levee" => "31/01/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 258,
                "Nom" => "BIAGUI",
                "Prenom" => "Moustapha Paul",
                "Motif" => "Evènement sécurité franchissement d'un EOA à YEU",
                "Date retrait" => "25/01/2024",
                "Date levee" => "01/05/2024",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 123,
                "Nom" => "BOYE",
                "Prenom" => "Malick",
                "Motif" => "Evènement sécurité Train Trip en SH",
                "Date retrait" => "29/03/2022",
                "Date levee" => "26/04/2022",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 476,
                "Nom" => "COLY",
                "Prenom" => "Batim Ibrahima",
                "Motif" => "Evènement sécurité heurt de chainette",
                "Date retrait" => "13/11/2023",
                "Date levee" => "31/12/2023",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 251,
                "Nom" => "DEME",
                "Prenom" => "Oumar",
                "Motif" => "Expiration VAS",
                "Date retrait" => "17/03/2023",
                "Date levee" => "25/03/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 351,
                "Nom" => "DIBA",
                "Prenom" => "Chérif Lamine",
                "Motif" => "Evènement sécurité accident de personnes",
                "Date retrait" => "14/02/2023",
                "Date levee" => "08/03/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 532,
                "Nom" => "DIOH",
                "Prenom" => "Dominique Latyr",
                "Motif" => "Evènement sécurité franchissement CV 8016",
                "Date retrait" => "09/04/2024",
                "Date levee" => "29/04/2024",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 124,
                "Nom" => "DIOUF",
                "Prenom" => "Matar",
                "Motif" => "Evènement sécurité Franchissement EOA à YEU sur voie 2",
                "Date retrait" => "18/04/2023",
                "Date levee" => "16/05/2023",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 16,
                "Nom" => "FALL",
                "Prenom" => "Sokhna",
                "Motif" => "Expiration VAS",
                "Date retrait" => "14/01/2023",
                "Date levee" => "17/01/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 252,
                "Nom" => "FALL",
                "Prenom" => "Amadou",
                "Motif" => "Expiration VAS",
                "Date retrait" => "17/03/2023",
                "Date levee" => "25/03/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 39,
                "Nom" => "GRAILLOT",
                "Prenom" => "Laurent",
                "Motif" => "Charge de travail incompatible avec le maintien de l'habilitation",
                "Date retrait" => "23/07/2024",
                "Date levee" => "En cours",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 32,
                "Nom" => "GUEYE",
                "Prenom" => "Rouba",
                "Motif" => "Expiration VAS",
                "Date retrait" => "13/01/2023",
                "Date levee" => "29/01/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 463,
                "Nom" => "GUISSE",
                "Prenom" => "Papa Youga",
                "Motif" => "Prévention Dans le cadre de la prévention pour éviter un évènement sécurité ferroviaire plus grave",
                "Date retrait" => "21/11/2023",
                "Date levee" => "25/01/2024",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 479,
                "Nom" => "KEITA",
                "Prenom" => "Youssoupha",
                "Motif" => "Evènement sécurité Train Trip en SR",
                "Date retrait" => "15/05/2022",
                "Date levee" => "17/06/2022",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 160,
                "Nom" => "MBENGUE",
                "Prenom" => "El Hadji Abdoul",
                "Motif" => "Expiration VAS",
                "Date retrait" => "13/01/2023",
                "Date levee" => "21/01/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 131,
                "Nom" => "NDECKY",
                "Prenom" => "Dany Rufin",
                "Motif" => "Evènement sécurité Train Trip en SR au RAE 2020",
                "Date retrait" => "29/09/2023",
                "Date levee" => "23/10/2023",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 1112,
                "Nom" => "NDIAYE",
                "Prenom" => "Mamadou",
                "Motif" => "Evènement sécurité mouvement de rame avec portes ouvertes à DIA sur la voie 2",
                "Date retrait" => "13/12/2023",
                "Date levee" => "25/01/2023",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 166,
                "Nom" => "NGALANE",
                "Prenom" => "Adja Coumba",
                "Motif" => "Prévention Etat de santé",
                "Date retrait" => "21/03/2024",
                "Date levee" => "16/05/2024",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 268,
                "Nom" => "SECK",
                "Prenom" => "Fatou Kiné",
                "Motif" => "Evènement sécurité Ouverture porte côté entrevoie",
                "Date retrait" => "08/04/2022",
                "Date levee" => "18/05/2022",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 268,
                "Nom" => "SECK",
                "Prenom" => "Fatou Kiné",
                "Motif" => "Absence supérieure à 03 mois",
                "Date retrait" => "15/03/2024",
                "Date levee" => "27/08/2024",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 127,
                "Nom" => "SECK",
                "Prenom" => "Serigne",
                "Motif" => "Changement de poste au sein de l'entreprise",
                "Date retrait" => "24/02/2023",
                "Date levee" => "",
                "Statut" => "RETRAIT DEFINITIF"
            ],
            [
                "Matricule" => 127,
                "Nom" => "SECK",
                "Prenom" => "Serigne",
                "Motif" => "Evènement sécurité mouvement de rame avec portes ouvertes hors quai à PNR",
                "Date retrait" => "14/12/2022",
                "Date levee" => "24/02/2023",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 264,
                "Nom" => "SENE",
                "Prenom" => "Abdoul Khadre",
                "Motif" => "Evènement sécurité Train Trip en SR",
                "Date retrait" => "28/03/2022",
                "Date levee" => "28/05/2022",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 1109,
                "Nom" => "SENE",
                "Prenom" => "Diarra",
                "Motif" => "Evènement sécurité mouvement de rame avec portes ouvertes à KMF",
                "Date retrait" => "24/08/2023",
                "Date levee" => "05/10/2023",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 157,
                "Nom" => "SENE",
                "Prenom" => "Aminata Mansour",
                "Motif" => "Absence supérieure à 03 mois",
                "Date retrait" => "22/11/2023",
                "Date levee" => "16/01/2024",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 707,
                "Nom" => "SOUMARE",
                "Prenom" => "Rokhaya",
                "Motif" => "Absence supérieure à 03 mois",
                "Date retrait" => "23/01/2023",
                "Date levee" => "20/03/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 155,
                "Nom" => "SY",
                "Prenom" => "Ndeye Aminata",
                "Motif" => "Absence supérieure à 03 mois",
                "Date retrait" => "12/06/2022",
                "Date levee" => "02/09/2022",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 471,
                "Nom" => "TALL",
                "Prenom" => "Papa Momar",
                "Motif" => "Evènement sécurité mouvement de rame avec portes ouvertes à DIA",
                "Date retrait" => "22/08/2023",
                "Date levee" => "03/10/2023",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 1027,
                "Nom" => "TALL",
                "Prenom" => "Mouhamadou Bamba",
                "Motif" => "Evènement sécurité mouvement de rames avec portes ouvertes à KMF",
                "Date retrait" => "26/03/2024",
                "Date levee" => "07/05/2024",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 470,
                "Nom" => "TAMBA",
                "Prenom" => "Mamadou",
                "Motif" => "Evènement sécurité Train Trip en SR au niveau du RAE 2012",
                "Date retrait" => "01/04/2023",
                "Date levee" => "20/04/2023",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 1035,
                "Nom" => "THIAM",
                "Prenom" => "Abdoulaye",
                "Motif" => "Evènement sécurité Train Trip en SR au niveau du RAE 5016 à RUF",
                "Date retrait" => "18/03/2024",
                "Date levee" => "29/04/2024",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 272,
                "Nom" => "THIOYE",
                "Prenom" => "Absa",
                "Motif" => "Absence supérieure à 03 mois",
                "Date retrait" => "28/04/2023",
                "Date levee" => "25/05/2023",
                "Statut" => "SUSPENDU"
            ],
            [
                "Matricule" => 259,
                "Nom" => "TINE",
                "Prenom" => "Jean François Gérard",
                "Motif" => "Evènement sécurité Mise en mouvement en SR en gare de DIA",
                "Date retrait" => "10/12/2023",
                "Date levee" => "10/02/2024",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 259,
                "Nom" => "TINE",
                "Prenom" => "Jean François Gérard",
                "Motif" => "Evènement sécurité Train Trip en SR au niveau du RAE 5028 à DIA",
                "Date retrait" => "13/07/2024",
                "Date levee" => "05/09/2024",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 126,
                "Nom" => "WADE",
                "Prenom" => "Séni Sané",
                "Motif" => "Evènement sécurité mouvement de rame avec portes ouvertes à DIA",
                "Date retrait" => "14/06/2023",
                "Date levee" => "25/08/2023",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 474,
                "Nom" => "WADE",
                "Prenom" => "Cheikh Mbacké",
                "Motif" => "Evènement sécurité Train Trip en SR au niveau du RAE 5028",
                "Date retrait" => "10/12/2023",
                "Date levee" => "15/02/2024",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 1005,
                "Nom" => "NDIAYE",
                "Prenom" => "Bacary",
                "Motif" => "Prévention écarts observés dans l’application des procédures",
                "Date retrait" => "07/10/2024",
                "Date levee" => "En cours",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 827,
                "Nom" => "LAMA",
                "Prenom" => "Aime Niankoye",
                "Motif" => "Prévention écarts observés dans l’application des procédures",
                "Date retrait" => "07/10/2024",
                "Date levee" => "En cours",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 1369,
                "Nom" => "SOUGOUFARA",
                "Prenom" => "Matar",
                "Motif" => "Evènement sécurité Train Trip suite franchissement RAE 4016 à RUF",
                "Date retrait" => "06/10/2024",
                "Date levee" => "En cours",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 339,
                "Nom" => "NDIAYE",
                "Prenom" => "Thérèse Suzane",
                "Motif" => "Inaptitude médicale au poste",
                "Date retrait" => "31/10/2024",
                "Date levee" => "",
                "Statut" => "RETRAIT DEFINITIF"
            ],
            [
                "Matricule" => 1205,
                "Nom" => "KANE",
                "Prenom" => "Hawo",
                "Motif" => "Prévention Etat de santé",
                "Date retrait" => "04/09/2024",
                "Date levee" => "En cours",
                "Statut" => "RETRAIT AU POSTE"
            ],
            [
                "Matricule" => 1202,
                "Nom" => "TOURE",
                "Prenom" => "Cheïkh Ahmadou Bamba",
                "Motif" => "Evènement sécurité Départ sans ordre en mode SR suite à un TR",
                "Date retrait" => "08/10/2024",
                "Date levee" => "En cours",
                "Statut" => "RETRAIT AU POSTE"
            ]
        ];

        $hab = Habilitation::where(['code' => "COND-VOY"])->first();

        $data2 = [
            (object)
            [
                "matricule" => 127,
                "date_obtention" => "2021-11-16",
                "date_fin_validite" => "2024-11-15"
            ],
            (object)
            [
                "matricule" => 39,
                "date_obtention" => "2021-10-08",
                "date_fin_validite" => "2024-10-07"
            ],
            (object)
            [
                "matricule" => 1005,
                "date_obtention" => "2024-10-04",
                "date_fin_validite" => "2027-10-03"
            ],
            (object)
            [
                "matricule" => 827,
                "date_obtention" => "2024-10-04",
                "date_fin_validite" => "2027-10-03"
            ],
            (object)
            [
                "matricule" => 1369,
                "date_obtention" => "2024-10-04",
                "date_fin_validite" => "2027-10-03"
            ]
        ];

        foreach ($data2 as $value){
            $pers = Personnel::where(['matricule' => $value->matricule])->first();
            $habilitationPersonnel = new HabilitationPersonnel();
            $habilitationPersonnel->habilitation_id = $hab->id;
            $habilitationPersonnel->personnel_id = $pers->id;
            $habilitationPersonnel->date_obtention = $value->date_obtention;
            $habilitationPersonnel->date_fin_validite = $value->date_fin_validite;
            $habilitationPersonnel->status = "HABILITATION-INITIALE";

            $habilitationPersonnel->save();

            $action = new Action();
            $action->habilitation_personnel_id = $habilitationPersonnel->id;
            $action->libelle = "HABILITATION-INITIALE";
            $action->motif = $hab->libelle;
            $action->acteur = "SYSTEME";
            $action->personnel = $pers->id;
            $action->document = $value->date_obtention;
            $action->save();

        }



        foreach ($data as $value){
            $agent = Personnel::where(['matricule' => $value['Matricule']])->first();
            $habPers = HabilitationPersonnel::where(['habilitation_id' => $hab->id, 'personnel_id' => $agent->id])->first();

            if ($value['Statut'] == "RETRAIT AU POSTE" ){
                if ($value['Date levee'] == "En cours") {
                    $habPers->status = "RETRAIT AU POSTE";
                    $habPers->save();


                    $act = new Action();
                    $act->habilitation_personnel_id = $habPers->id;
                    $act->libelle = "RETRAIT AU POSTE";
                    $act->motif = $value['Motif'];
                    $act->acteur = "SYSTEME";
                    $act->personnel = $habPers->personnel_id;
                    $act->document = Carbon::createFromFormat("d/m/Y", $value["Date retrait"])->format("d-m-Y");
                    $act->save();

                }else {
                    $habPers->status = "ACTIF";
                    $habPers->save();

                    $act = new Action();
                    $act->habilitation_personnel_id = $habPers->id;
                    $act->libelle = "LEVEE DE RETRAIT AU POSTE";
                    $act->motif = $value['Motif'];
                    $act->acteur = "SYSTEME";
                    $act->personnel = $habPers->personnel_id;
                    $act->document = Carbon::createFromFormat("d/m/Y", $value["Date levee"])->format("d-m-Y");
                    $act->save();
                }


            }elseif ($value['Statut'] == "SUSPENDU" ){
                if ($value['Date levee'] == "En cours") {
                    $habPers->status = "SUSPENDU";
                    $habPers->save();


                    $act = new Action();
                    $act->habilitation_personnel_id = $habPers->id;
                    $act->libelle = "SUSPENDU";
                    $act->motif = $value['Motif'];
                    $act->acteur = "SYSTEME";
                    $act->personnel = $habPers->personnel_id;
                    $act->document = Carbon::createFromFormat("d/m/Y", $value["Date retrait"])->format("d-m-Y");
                    $act->save();

                }else {
                    $habPers->status = "ACTIF";
                    $habPers->save();

                    $act = new Action();
                    $act->habilitation_personnel_id = $habPers->id;
                    $act->libelle = "LEVEE DE SUSPENSION";
                    $act->motif = $value['Motif'];
                    $act->acteur = "SYSTEME";
                    $act->personnel = $habPers->personnel_id;
                    $act->document = Carbon::createFromFormat("d/m/Y", $value["Date levee"])->format("d-m-Y");
                    $act->save();
                }

            }else {
                $habPers->status = "RETRAIT DEFINITIF";
                $habPers->save();

                $act = new Action();
                $act->habilitation_personnel_id = $habPers->id;
                $act->libelle = "RETRAIT DEFINITIF";
                $act->motif = $value['Motif'];
                $act->acteur = "SYSTEME";
                $act->personnel = $habPers->personnel_id;
                $act->document = Carbon::createFromFormat("d/m/Y", $value["Date retrait"])->format("d-m-Y");
                $act->save();

            }



        }


    }
}
