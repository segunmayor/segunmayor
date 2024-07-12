<?php

require_once sm_base_root() . '/inc/mailer/index.php';

/**
 * Open db connection
 */

global $db_conn;

function connection_open($servername, $username, $password, $db)
{

    global $db_conn;

    $db_conn = $GLOBALS['db_conn'];

    $db_conn = new mysqli($servername, $username, $password);

    if ($db_conn->connect_error) {
        die( $db_conn->connect_error);
        return false;
    }

    $new_db = connect_db($db);


    return $db_conn;
}


/**
 * close db connection
 */

function connection_close()
{

    $db_close = $GLOBALS['db_close'];

    $db_conn = $GLOBALS['db_conn'];

$db_close = $db_conn->close();

if(! $db_close) {
    // die("Disconnection failed: " . $db_conn->error());
    return false;
}

return true;
}

/**
 * check the current database
 */

function current_database ()
{
    $sql = "SELECT database()";

    if( $sql !== NULL ){

        $db_conn = $GLOBALS['db_conn'];

        $run_query = $db_conn->query($sql);

        if(! $run_query && $run_query === null ){
            return false;
        }

        return $run_query;

    }



}

/**
 *
 * connect to a database
 *
 */

function connect_db ($db)
{

    $db_conn = $GLOBALS['db_conn'];

    $create_db = "CREATE DATABASE IF NOT EXISTS ${db}";

if( ! $db_conn->query($create_db) ){
        // die( "Something strange happened: " . $query->error());
        return false;
    }

// statement to select db

$query = "USE ${db}";

    if( current_database() !== false && current_database() !== null) {

    if( $db_conn->query($query) ){
        return true;
    }


}



}

function insert_query($data)
{
 $db_conn = $GLOBALS['db_conn'];

    $col = $val = array();

    $db = current_database();

    // var_dump($_POST['form_type']);

    if ( $db !== true && $db === null ){

    //    print_r("Database error: No database connected");

       return false;
    }

    $form_type = "";


foreach( $data as $key => $value) {

    foreach($value as $i => $j  ) {

        if($i === "form_type"){

            $form_type .= $j;
        }else{
            array_push($col, $i);
        array_push($val, json_encode($j));

        }

    }



}


    $create_table = create_table($form_type, $col, $val);
 

    if( ! $create_table ){
        print_r("Unable to create table");
        return false;
    }

    $col_to_string = implode(',', $col);

    $val_to_string = implode(',', $val);


    $query = "INSERT INTO ${form_type} (${col_to_string}) VALUES (${val_to_string})";


    $run_query = $db_conn->query($query);

    if( !$run_query && $run_query === null ) {
       
        die("Something went wrong, please try again.");
    }


    if( ! connection_close()) {
        die("There's an issue with your connection, please refresh and try again.");
    }

    $from = "enquiry@segunmayor.com";
    $subject = ucwords(str_replace("_", " ", $data['form_type']));

    if($data['form_type'] === "contact_form") {
        send_mail($data['email'], $from, $subject, $data['message'] );
    }else if($data['form_type'] === "call_back_form"){
        $message = "Name: " . $data['name'] . "\r\n" . "Email: " . $data['email'] . "\r\n" . "Phone: " . $data['phone'];

        send_mail($data['email'], $from, $subject, $message );
    }else {

        $message = "This user has successfully subscribed to our promotional email newletter." . "\r\n" . "Email: " . $data['email'];

        send_mail($data['email'], $from, $subject, $message );

    }

    // var_dump($form_type);

    $script = '<script src="assets/js/vendor/form.js"></script>';
    $script .= '<script type="text/javascript" language="JavaScript">
    setTimeout(() => formResponse(' . $form_type . '), 5000)
    </script>';
    $script .= '<script src="assets/js/custom.js"></script>';
    $script .= '<script type="text/javascript" language="JavaScript">
    setTimeout(() => runDialog()
, 10000)
    </script>';
    // $script = '<script type="text/javascript" language="JavaScript">
    // import "../assets/js/custom.js";

    // const form_type = document.querySelector(' . '"#' . $form_type . '"' . ');
    // const spanNode = document.createElement("DIALOG");
    // const dialogAttr = document.createAttribute("open");
    // dialogAttr.value = "True"
    // spanNode.setAttributeNode(dialogAttr);
    // const spanTextNode = document.createTextNode("Sent");
    // spanNode.appendChild(spanTextNode);
    // const form = document.createElement("FORM");
    // const form_attr = document.createAttribute("method");
    // form_attr.value = "dialog";
    // const form_text = document.createTextNode("Ok")
    // const form_button = document.createElement("BUTTON");
    // form.setAttributeNode(form_attr);
    // form_button.appendChild(form_text);
    // const spanNodeStyle = document.createAttribute("style");
    // spanNodeStyle.value = "z-index: 999; top: 50%; background-color: #fff; position: absolute; text-align: center; color: #000";
    // spanNode.setAttributeNode(spanNodeStyle);
    // form.appendChild(form_button);
    // spanNode.appendChild(form);
    // document.body.appendChild(spanNode);
    // //alert(spanNode);
    // console.log("this: ' . $form_type . '", spanNode);
    
    // </script>';

    echo $script;

    // header("Location: " .  "/");

}

/**
 *
 * list all tables in the database
 *
 */

function tables () {

    $db_conn = $GLOBALS['db_conn'];

    $db = current_database();

    if( $db !== true ) {
        die();
    }

    $query = "SHOW TABLES FROM ${db}";

    if(!$db_conn->query($query)){
        die("Table don't exist: ". $sql->error());
        return false;
    }

    return $db_conn->query($query);
}

/**
 *
 * check if table exist in db
 * Run function if there's active database in use.
 *
 */

 function is_table ($table) {

    $db_conn = $GLOBALS['db_conn'];

    $db = current_database();

    if( $db !== true && $db === NULL ) {
        return false;
    }

    $query = "SELECT 1 FROM ${table} LIMIT 1";

    if(! $db_conn->query($query) ){
        die("Table don't exist: ". $db_conn->query($query)->error());
        return false;
    }


    return true;
}

/**
 *
 * check if column exist in db
 * Run function if there's active database in use with tables.
 *
 */

function is_column ($table) {

    $db_conn = $GLOBALS['db_conn'];

    $db = current_database();

    if( $db !== true ) {
        die();
    }

    $query = "SHOW COLUMNS FROM ${db}.${table}";

    if(!$db_conn->query($query)){
        die("Something went wrong: ". $sql->connect_error());
        return false;
    }

    return true;
}

function create_table ($table, $col, $value = null) {

    $db_conn = $GLOBALS['db_conn'];

    $query = "CREATE TABLE IF NOT EXISTS ${table} ( id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY)";

    if( !$db_conn->query($query) ){

        return false;
    }

    // add column to new table created if not exists


    $datatype = "";

    foreach( $col as $i => $j){

        if( $i !== "g_recaptcha_response" ) {
            $datatype .= "VARCHAR(255)";

            $add_query = "ALTER TABLE ${table} ADD COLUMN IF NOT EXISTS (${j} LONGTEXT)";
            $db_conn->query($add_query);

        }else{
            $datatype .= "LONGTEXT";

            $add_query = "ALTER TABLE ${table} ADD COLUMN IF NOT EXISTS (${j} LONGTEXT)";
            $db_conn->query($add_query);

        }

    }

    return true;
}

function create_database ($db) {

    $db_conn = $GLOBALS['db_conn'];

    $query = "CREATE DATABASE IF NOT EXISTS ${db}";

    if( !$db_conn->query($query)){
        mysqli_error_list( $query );
    }

    print_r("New database ${db} created");
    return true;
}
