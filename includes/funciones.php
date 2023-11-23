<?php


define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');

function incluirTemplate(string $nombre, bool $inicio = false)
{
    include "./includes/templates/$nombre.php";
}

function incluirTemplateIndex(string $nombre, bool $inicio = false)
{
    include "../includes/templates/$nombre.php";
}

function incluirTemplateAdmin(string $nombre, bool $inicio = false){
    include "../../includes/templates/$nombre.php";
}

function estaAutenticado() {
    session_start();

    if (!$_SESSION['login']) {
        header('Location:/');
    }
}

function debuguear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
