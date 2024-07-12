<?php

function sm_base_root ()  {
    
    $baseroot = $_SERVER['DOCUMENT_ROOT']  ;

    return $baseroot;
}

function sm_base_dir () {
    /**
     * @return base dir absolute path without thrailing slash
     */

$rootdir = dirname('/');
return $rootdir;
}

function sm_base_uri () {
    /**
     * @return servername without thrailing slash
     */

    $baseuri = $_SERVER['SERVER_NAME'];
    return $baseuri;
}

function sm_assets_dir () {
    /**
     * @return assets abslolute path with thrailing slash
     */

    $assetsdir = sm_base_dir() . 'assets/';
    return $assetsdir;
}

function sm_assets_dir_rel () {
    /**
     * @return assets abslolute path with thrailing slash
     */

    $assetsdirrel = sm_base_root() . '/assets/';

    return $assetsdirrel;
}

function sm_recaptcha_client_key () {
    return "6LdodTkpAAAAANSPlLaJoYJFtFRP8stidZfv4K_q";
}

function sm_recaptcha_server_key () {
    return "6LdodTkpAAAAAMKI5upKdbtJpPX_dBFVja9RSkep";
}