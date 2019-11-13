<?php
/* ici on crée la fonction de déconnexion */
session_start();
session_destroy();
header('location: ../dotrips');
exit;
?>