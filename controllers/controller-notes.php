<?php
switch ($action) {
    case 'accueil': {
            $message = "C'est la page d'accueil";
            include 'views/v_accueil.php';
            break;
        }
    case 'recharger': {
            $lesNotes = getLesNotes();
            $message = "données chargées";
            include("views/v_accueil.php");
            break;
        }
    case 'afficher': {
            $lesNotes = getLesNotes();
            include("views/v_afficher.php");
            break;
        }
    case 'max': {
            $lesNotes = getLesNotes();
            include("views/v_note_maximum.php");
            break;
        }
    case 'min': {
            $lesNotes = getLesNotes();
            include("views/v_note_minimum.php");
            break;
        }
    case 'repartition': {
            $lesNotes = getLesNotes();
            $lesDistributions = getDistribution($lesNotes);
            include("views/v_statistiques.php");
            break;
        }
    case 'histogrammeLignes': {
            $lesNotes = getLesNotes();
            $lesDistributions = getDistribution($lesNotes);
            include("views/v_histogrammeLignes.php");
            break;
        }
    case 'histogrammeColonnes': {
            $lesNotes = getLesNotes();
            $lesDistributions = getDistribution($lesNotes);
            include("views/v_histogrammeColonnes.php");
            break;
        }
    default: {
            $message = "Cette page n'est pas disponible.";
            include 'views/404.php';
        }
        // $stat = array(
        //     '0-4' => 0,
        //     '4-8' => 0,
        //     '8-12' => 0,
        //     '12-16' => 0,
        //     '16-20' => 0
        // );

        // return $stat;
}
