<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'C:\xampp\htdocs\contacts\src\contact.php';

// Get the parameters passed by the http GET method
$contactId = $_GET['id'];

echo "Deleting contact id ".$contactId;

// invoke a delete method in the class
if (Contact::deleteContact($contactId)) {
    // Redirect to the contact listing page
    header('Location:/contacts/src/listcontact.php');
} else {
    echo "<br/><span style=\"font-family: Garamond; color: red\">"."An error occured"."</span>";
}

// echo "Contact id ".$contactId." deleted";