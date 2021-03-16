<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aufgabe 1 Lagersystem</title>
</head>

<body>
    <h1>Lagersystem</h1>
    <form>
        <fieldset>
            <legend>Artikel</legend>
            <label>Artikel-Nr.:<input name="a_nr" required></label><br>
            <label>Bezeichnung:<input name="bez"></label><br>
            <label>Packstückmenge:<input type="number" name="ps_menge"></label><br>
        </fieldset>
        <fieldset>
            <legend>Verpackungsmaße</legend>
            <label>Packstücktyp: HABIS-Zoll</label>
            <select name="ps_typ" id="">
                <option selected>Gasflasche</option>
                <option>Karton</option>
                <option>Tommel</option>
                <option>Kiste</option>
            </select>
            <br>
            <label>Stapelbar:
                <label><input type="radio" name="antwort" value="ja" checked>Ja</label>
                <label><input type="radio" name="antwort" value="nein">Nein</label>
            </label>
            <br>
            <label>Länge (in mm):<input type="number" name="masse[]"></label><br>
            <label>Breite (in mm):<input type="number" name="masse[]"></label><br>
            <label>Höhe (in mm):<input type="number" name="masse[]"></label><br>
            <br>
        </fieldset>
        <button>Eintragen</button>
    </form>

<?php

if(!empty($_REQUEST)) {  // Submit-Button geklickt?

    if(!empty($_REQUEST['a_nr'])) {

        $a_nr = $_REQUEST['a_nr'];
        $bez = $_REQUEST['bez'];
        $antwort = $_REQUEST['antwort'];
        $ps_typ = $_REQUEST['ps_typ'];
        $masse = $_REQUEST['masse'];
        $ps_menge = $_REQUEST['ps_menge'];

        // * Ausgabe
        echo "
            <h2>Kontrollwerte des Artikels mit der Artikelnummer: $a_nr</h2>
            <p>Bezeichnung: <strong>$bez</strong> </p>
            <p>Packstückmenge: <strong>$ps_menge</strong> </p>
            <p>Packstücktyp: <strong>$ps_typ</strong> </p>
            <p>Verpackungsmaße: </p>
            <table border=\"1\">
                <tr>
                    <td><strong>Länge (in mm)</strong></td>
                    <td><strong>Breite (in mm)</strong></td>
                    <td><strong>Höhe (in mm)</strong></td>
                </tr>
                <tr>
                    <td>$masse[0]</td>
                    <td>$masse[1]</td>
                    <td>$masse[2]</td>
                </tr>
            </table>
            <br>
        ";

        echo $antwort === "ja" ? "<strong>Artikel ist stapelbar</strong>" : "<strong>Artikel ist nicht stapelbar</strong>";
    }
    else {
        echo "<p>Bitte füllen Sie alle Pflichtfelder aus</p>";
        echo "<p><a href = \"aufg1_FS_AP_2019.php\">zurück zum Formular</a></p>";
    }
}
?>







</body>

</html>