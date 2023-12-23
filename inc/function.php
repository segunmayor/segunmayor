<?php

function base_root ()  {
    
    $baseroot = $_SERVER['DOCUMENT_ROOT']  ;

    return $baseroot;
}

function base_dir () {
    /**
     * @return base dir absolute path without thrailing slash
     */

$rootdir = dirname('/');
return $rootdir;
}

function base_uri () {
    /**
     * @return servername without thrailing slash
     */

    $baseuri = $_SERVER['SERVER_NAME'];
    return $baseuri;
}

function assets_dir () {
    /**
     * @return assets abslolute path with thrailing slash
     */

    $assetsdir = base_dir() . 'assets/';
    return $assetsdir;
}

function assets_dir_rel () {
    /**
     * @return assets abslolute path with thrailing slash
     */

    $assetsdirrel = base_root() . '/assets/';

    return $assetsdirrel;
}

function recaptcha_client_key () {
    return "6LdodTkpAAAAANSPlLaJoYJFtFRP8stidZfv4K_q";
}

function recaptcha_server_key () {
    return "6LdodTkpAAAAAMKI5upKdbtJpPX_dBFVja9RSkep";
}