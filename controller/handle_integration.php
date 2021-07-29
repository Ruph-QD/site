<?php
require('../controller/bdd-connect.php');
$team = "A18D";
$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=" . $team
);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
//echo "Raw Data:<br />";
//echo("$data");

$data_tab = str_split($data, 33);
//echo "Tabular Data:<br />";

/*
for($i=0, $size=count($data_tab); $i<$size; $i++){
    echo "Trame $i: $data_tab[$i]<br />";
}*/

$trame = $data_tab[count($data_tab) - 2];
// décodage avec des substring
$t = substr($trame, 0, 1);
$o = substr($trame, 1, 4); // ...
// décodage avec sscanf
list($t, $o, $r, $c, $n, $value, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($trame, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
//echo ("<br />$t,$o,$r,$c,$n,$value,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");

switch ($value) {
    case '0000':
        echo '<p>les led sont éteintes</p><br/>';
        $action = "tout éteindre";
        $image = "https://findicons.com/files/icons/1681/siena/128/bulb.png";
        break;
    case '0001':
        echo '<p>la led verte est allumée</p><br/>';
        $action = "allumer vert";
        $image = "https://findicons.com/files/icons/1681/siena/128/bulb_green.png";
        break;
    case '0002':
        echo '<p>la led rouge est allumée</p><br/>';
        $action = "allumer rouge";
        $image = "https://findicons.com/files/icons/1681/siena/128/bulb_red.png";
        break;
    case '0003':
        echo '<p>la led bleu est allumée</p><br/>';
        $action = "allumer bleu";
        $image = "https://findicons.com/files/icons/1681/siena/128/bulb_blue.png";
        break;
    default:
        echo '<p>les led sont éteintes</p><br/>';
        $action = "tout éteindre";
        $image = "https://findicons.com/files/icons/1681/siena/128/bulb.png";
        break;
}
if ($_SESSION['lastAction'] != $action) {
    $date = $year . "-" . $month . "-" . $day . " " . $hour . ":" . $min . ":" . $sec;
    $data = [
        'coureur' => $_SESSION['id'],
        'action' => $action,
        'date' => $date,
    ];
    $sql = "INSERT INTO tests (coureur, action, date) VALUES (:coureur, :action, :date)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute($data);
}

echo '<img src="' . $image . '">'
?>
<br />
<a <?php echo 'href="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TRAME=1' . $team . '130100000000b&TEAM=' . $team . '"' ?> target="_blank">
    <input type="button" value="Eteindre">
</a>
<a <?php echo 'href="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TRAME=1' . $team . '130100010000b&TEAM=' . $team . '"' ?> target="_blank">
    <input type="button" value="Allumer Vert">
</a>
<a <?php echo 'href="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TRAME=1' . $team . '130100020000b&TEAM=' . $team . '"' ?> target="_blank">
    <input type="button" value="Allumer Rouge">
</a>
<a <?php echo 'href="http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TRAME=1' . $team . '130100030000b&TEAM=' . $team . '"' ?> target="_blank">
    <input type="button" value="Allumer Bleu">
</a>
<?php header("Refresh:2");
