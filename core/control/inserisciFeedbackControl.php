<?php
/**
 * Created by PhpStorm.
 * User: Utente
 * Date: 30/11/2016
 * Time: 17:26
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedbackName = $_POST["feedback-name"];
    $feedbackDescription = $_POST["feedback-textArea"];
    $feedbackRating = $_POST["rating"];
    //Insert the name of the user that submit the feedback

}