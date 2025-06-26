<?php
include "./utilisateur_repository.php";

function show_utilisateurs_in_list()
{
    $utilisateurs = find_all();
    $liste = "<ul>";
    foreach ($utilisateurs as $user) {
        $a = "<a href='./utilisateur_controller.php?id=$user[0]'>Supprimer</a>";
        $liste .= "<li>$user[1] $user[2] $user[3] $a</li>";
    }
    $liste .= "</ul>";
    return $liste;
}
