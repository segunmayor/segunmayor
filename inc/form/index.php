<?php

require_once sm_base_root() . '/index.php';

require_once sm_base_root() . '/inc/global.php';

$servername = "localhost";
$username = "segun";
$password = 1;
$db = "segunmayor";

require_once sm_base_root() . '/inc/conn/index.php';

/**
 * 
 * collect form data
 * @return filtered form data if passed
 * @return false if form data failed
 * 
 */

function isForm ()
{

     $servername = $GLOBALS['servername'];
    $username = $GLOBALS['username'];
    $password = $GLOBALS['password'];
    $db = $GLOBALS['db'];

    $filtered_key;
    $filtered_value;

    // reload the current page if the http request ain't post
    
    if ( $_SERVER["REQUEST_METHOD"] !== "POST" ){
        die("This is not allowed.");
        return header("This is not allowed", sm_base_uri());
    }

    $key = $value = null;

    $data = array();

// print_r($_POST);
   
    foreach( $_POST as $_key => $_value) {
        
        $filtered_key = strtolower(str_replace("-", "_", str_replace(" ", "_", filterForm($_key))));

        $filtered_value = filterForm($_value);

        array_push($data, array($filtered_key => $filtered_value));
            
   
}


// connect to db server
$db_connect = connection_open($servername, $username, $password, $db);

// check if db connection is successful

if($db_connect !== false){

    process_form($data);

}

}

// filter form data

function filterForm ($data)
{

/**
 * 
 * filter form data
 * @return filtered form data if passed
 * @return false if form data failed
 * 
 */

    if(! empty($data) ) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    return false;

}

// processed form data

function process_form ($data)
{
    insert_query($data);
}

