<?php
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';
require_once 'validateEvents.php';

$formdata = array();
$errors = array();

validateEvents(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $title = $formdata['Title'];
    $description = $formdata['Description'];    
    $sDate = $formdata['StartDate'];
    $eDate = $formdata['EndDate'];
    $Capacity = $formdata['Capacity'];
    $locID = $formdata['LocID'];

    $event = new Event(-1, $title, $description, $sDate, $eDate, $Capacity, $locID);

    $connection = Connection::getInstance();

    $gateway = new EventTableGateway($connection);

    $id = $gateway->insert($event);

    header('Location: viewEvents.php');
}
else {
    require 'createEventForm.php';
}