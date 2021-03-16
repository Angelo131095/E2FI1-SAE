<?php
// html_musterform_verarb.php

$favs_list_string = [
    "1" => "HTML",
    "2" => "CSS",
    "3" => "JavaScript",
    "4" => "Typo3"
];

$intrs_list_string = [
    "rwd" => "Resp. Web Design",
    "wp" => "Wordpress",
    "jq" => "JQuery"   
];


echo "<h1>HTML5-Musterformular</h1>";
echo "<p>Bitte kontrollieren Sie hier Ihre Daten</p>";
// &tos=on oder nichts (nicht tos=off!)
if(isset($_REQUEST['tos'])) { // checkbox required: tos (legal)

    if(!empty($_REQUEST['user']) && !empty($_REQUEST['pw']) && !empty($_REQUEST['title'])) {  // textfield required: user, pw (company)

        // textfield required: user
        $user = $_REQUEST['user'];
        // textfield optional Last name:
        $lastname = (!empty($_REQUEST['lastname'])) ?  $_REQUEST['lastname'] : "not applicable";
        // textfield type password required
        $pw =  $_REQUEST['pw'];
        // textfield type = "number"
        $weight = (!empty($_REQUEST['weight'])) ?  $_REQUEST['weight'] : "not applicable";
        // textfield type = "date"
        $dob = (!empty($_REQUEST['dob'])) ?  $_REQUEST['dob'] : "not applicable";
        // textfield type = "email"
        $email = (!empty($_REQUEST['email'])) ?  $_REQUEST['email'] : "not applicable";
        // textfield type = "zip"
        $zip = (!empty($_REQUEST['zip'])) ?  $_REQUEST['zip'] : "not applicable";

        // Select field (drop down) optional
        $country = (!empty($_REQUEST['country'])) ?  $_REQUEST['country'] : "not applicable";

        switch($country) {
            case "GER": $country = "Germany"; break;
            case "AUT": $country = "Austria"; break;
            case "SWI": $country = "Switzerland"; break;
            default: $country = "not applicable";
        }

        // Select field (drop down) required and preselected
         $title = $_REQUEST['title'];

         switch($title) {
             case "Mr.": $title = "Mister"; break;
             case "Mrs.": $title = "Mistress"; break;
             case "Ms.": $title = "Miss"; break;
             case "Mx.": $title = "Other"; break;
             default: $title = "not applicable";
         }


        // Select field (drop down) multiple optional (Favourites)
        $favs_list = (isset($_REQUEST['favs'])) ? $_REQUEST['favs'] : [];

        
        // checkbox group (multiple) with legend (interests)
        $intrs_list = (isset($_REQUEST['intrs'])) ? $_REQUEST['intrs'] : [];



        echo "<strong>User:</strong> $user <br>";
        echo "<strong>Lastname:</strong> $lastname  <br>";
        echo "<strong>Weight:</strong> $weight  <br>";
        echo "<strong>Date of Birth:</strong> $dob  <br>";
        echo "<strong>Email:</strong> $email  <br>";
        echo "<strong>ZIP:</strong> $zip <br>";
        echo "<strong>Country:</strong> $country <br>";
        echo "<strong>Title:</strong> $title <br>";
        /*
        echo "<pre>";
        var_dump($favs_list);
        echo "</pre>";
        */
        echo "<strong>Favourits:</strong><br>";
        if(!empty($favs_list)) {
            echo "<ul>";
            foreach($favs_list as $fav) {
                echo "<li>$favs_list_string[$fav]</li>";
            }
            echo "</ul>";
        }
        else {
            echo "not applicable<br>";
        }


        echo "<strong>Interests:</strong><br>";
        if(!empty($intrs_list)) {
            echo "<ul>";
            foreach($intrs_list as $intr) {
                echo "<li>$intrs_list_string[$intr]</li>";
            }
            echo "</ul>";
        }
        else {
            echo "not applicable<br>";
        }


    }
    else {
        echo "<p>Bitte füllen Sie alle Pflichtfelder aus</p>";
        echo "<p><a href = \"html5_musterformular.htm\">zurück zum Formular</a></p>";
    }

} 
else {
    echo "<p>Sie müssen die TOS akzeptieren!</p>";
    echo "<p><a href = \"html5_musterformular.htm\">zurück zum Formular</a></p>";
}

?>