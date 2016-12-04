<?php
/**
 * Created by PhpStorm.
 * User: Giovanni Leo
 * Date: 30/11/2016
 * Time: 17:26
 */
    include_once MANAGER_DIR . "FeedbackManager.php";
    include_once CONTROL_DIR . "ControllUtils.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $feedbackManager = new FeedbackManager();
        $feedbackName = null;
        $feedbackDescription = null;
        $feedbackRating = null;
        $feedbackNameCheck = false;
        $feedbackDescriptionCheck = false;
        $feedbackRatingCheck = false;
        /**
         * Checking if the POST variable are septate
         */
        if (isset($_POST['feedback-name'])) {
            $feedbackName = $_POST["feedback-name"];

        } else {
            //TO-DO
        }

        if (isset($_POST['feedback-textArea'])) {
            $feedbackDescription = $_POST["feedback-textArea"];

        } else {
            //TO-DO
        }
        if (isset($_POST['rating'])) {
            $feedbackRating = $_POST["rating"];

        } else {
            //TO-DO
        }

        if (!empty($feedbackName)) {
            if (isAlphanumeric($feedbackName))
            {
                $feedbackNameCheck = true;
            }
        }

        if (!empty($feedbackDescription)) {
            if (isAlphanumeric($feedbackDescription))
            {
                $feedbackDescriptionCheck = true;
            }
        }

        if (!empty($feedbackRating)) {
                $feedbackDescriptionCheck = true;
        }

        if ($feedbackNameCheck == true && $feedbackDescriptionCheck == true && $feedbackRatingCheck == true)
        {
            $data = str_replace('/', '-', $data);
            $TheDate = date("Y-m-d H:i:s", strtotime($data));
            $dataPubblicazione = new DateTime();
            $dataPub = $dataPubblicazione->format("Y-m-d H:i:s");

            $feedbackManager->createFeedback($id,$idAnnuncio, $idUtente, $feedbackDescription, $data, $rating);
        }
}