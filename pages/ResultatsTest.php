<!DOCTYPE html>
<html>
    <head>
        <title>Resultats</title>
        <link rel="stylesheet" href="../style/Template.css" />
        <link rel="stylesheet" href="../style/ResultatsTestDesign.css" />
   
        <!-- <link rel="stylesheet" href="../style/ResultatsTestDesign.css" /> -->
        <script type="text/javascript" src="../style/Javascript/ResultatsTestJs.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
     
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
    
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['test', 'frequence cardiaque','temperature de la peau' , 'niveau de stresse'],
              ['1',  10, 36, 30],
              ['2',  20, 38,35],
              ['3',  15, 37,25],
              ['4',  35,36,40]
            ]);
    
            var options = {
              title: 'Niveau de Stress du coureur',
              curveType: 'function',
              legend: { position: 'top' }
            };
    
            var chart = new google.visualization.LineChart(document.getElementById('graphe1'));
    
            chart.draw(data, options);
            var chart2 = new google.visualization.LineChart(document.getElementById('graphe2'));
    
    chart2.draw(data, options);
    
       var obj = document.getElementById('pb1');
    obj.style.width = "95%";
    obj.style.backgroundColor="green";
    obj.textContent=obj.style.width.toString();
    obj.textContent.backgroundColor="white";
        
          }
        </script>
    
    </head>
    <header>
    <?php include("./Component/Header.php"); ?>
</header>
<body>
   
    <div class="contenu">
        <h2 style="text-align:center;"> Statistiques</h2>

        
        <div class="container-first">
                <div class="reflexe" id="mesure_stresse" style="align:center;">
                    <table>
                        <caption>Récapitulatif des mesures du stresse</caption>
                        <thead>
                            <tr><th>Frequence cardiaque</th><th>Temperature de la peau</th><th>Moyenne</th><th>Date et Heure</th></tr>
                        </thead>
                        <tfoot>
                            <tr><td colspan="4" data-titre_colonne="Commentaire">Vous pouvez visualiser votre progression en cliquant <a href="#">ici</a></td></tr>
                        </tfoot>
                        <tbody>
                            <tr><td data-titre_colonne="Frequence_cardiaque">300bpm</td><td data-titre_colonne="Temperature_peau">37°c</td><td data-titre_colonne="moyenne">78%</td><td data-titre_colonne="date">22/12/2020  11:22:05</td></tr>
                            <tr><td data-titre_colonne="Frequence_cardiaque">400bpm</td><td data-titre_colonne="Temperature_peau">47°c</td><td data-titre_colonne="moyenne">78%</td><td data-titre_colonne="date">22/12/2020  11:38:08</td></tr>
                            <tr><td data-titre_colonne="Frequence_cardiaque">500bpm</td><td data-titre_colonne="Temperature_peau">37°c</td><td data-titre_colonne="moyenne">78%</td><td data-titre_colonne="date">22/12/2020  11:48:08</td></tr>
                            <tr><td data-titre_colonne="Frequence_cardiaque">600bpm</td><td data-titre_colonne="Temperature_peau">38°c</td><td data-titre_colonne="moyenne">78%</td><td data-titre_colonne="date">22/12/2020  11:58:08</td></tr>
                            <tr><td data-titre_colonne="Frequence_cardiaque">700bpm</td><td data-titre_colonne="Temperature_peau">39°c</td><td data-titre_colonne="moyenne">78%</td><td data-titre_colonne="date">22/12/2020  12:18:08</td></tr>
                            <tr><td data-titre_colonne="Frequence_cardiaque">800bpm</td><td data-titre_colonne="Temperature_peau">47°c</td><td data-titre_colonne="moyenne">78%</td><td data-titre_colonne="date">22/12/2020  13:38:08</td></tr>
                            <tr><td data-titre_colonne="Frequence_cardiaque">900bpm</td><td data-titre_colonne="Temperature_peau">36°c</td><td data-titre_colonne="moyenne">78%</td><td data-titre_colonne="date">22/12/2020  14:38:08</td></tr>
                            <tr><td data-titre_colonne="Frequence_cardiaque">990bpm</td><td data-titre_colonne="Temperature_peau">35°c</td><td data-titre_colonne="moyenne">78%</td><td data-titre_colonne="date">22/12/2020  16:38:08</td></tr>

                            <tr><td colspan="4" data-titre_colonne="Commentaire">Vous pouvez effectuer un nouveau test en cliquant <a href="#">ici</a></td></tr>
                        </tbody>
                    </table>

                  

                </div> 
                
           <div class="description">
   <p>       Quaestione igitur per multiplices dilatata fortunas cum ambigerentur quaedam, non
            nulla levius actitata constaret, post multorum clades Apollinares ambo pater et filius
             in exilium acti cum ad locum Crateras nomine pervenissent, villam scilicet suam quae ab
              Antiochia
            vicensimo et quarto disiungitur lapide, ut mandatum est, fractis cruribus occiduntur.</p>
           </div>
        </div><br><br><br><br>
        <div id="graphe1"></div> <br><br><br><br>
        <div class="container-second">

                <div class="Audition" id="mesure_reflexe">
                    <table>
                        <caption>Récapitulatif des mesures de la capacité Auditive</caption>
                        <thead>
                            <tr><th>Tonalite de reference</th><th>Tonalite reproduite</th><th>Moyenne</th><th>Date et Heure</th></tr>
                        </thead>
                        <tfoot>
                            <tr><td colspan="4" data-titre_colonne="commentaire">Vous pouvez visualiser votre progression en cliquant <a href="#">ici</a></td></tr>
                        </tfoot>
                        <tbody>
                            <tr><td data-titre_colonne="reference">158 Hz</td><td data-titre_colonne="reproduite">100 Hz</td><td data-titre_colonne="moyenne">78%</td><td data-titre_colonne="date">22/12/2020  11:22:05</td></tr>
                            <tr><td data-titre_colonne="reference">450 Hz</td><td data-titre_colonne="reproduite">449 Hz</td><td data-titre_colonne="moyenne">88%</td><td data-titre_colonne="date">22/12/2020  11:38:08</td></tr>
                            <tr><td data-titre_colonne="reference">336 Hz</td><td data-titre_colonne="reproduite">300 Hz</td><td data-titre_colonne="moyenne">98%</td><td data-titre_colonne="date">22/12/2020  11:48:08</td></tr>
                            <tr><td data-titre_colonne="reference">860 Hz</td><td data-titre_colonne="reproduite">800 Hz</td><td data-titre_colonne="moyenne">98%</td><td data-titre_colonne="date">22/12/2020  11:58:08</td></tr>
                            <tr><td data-titre_colonne="reference">576 Hz</td><td data-titre_colonne="reproduite">570 Hz</td><td data-titre_colonne="moyenne">78%</td><td data-titre_colonne="date">22/12/2020  12:18:08</td></tr>
                            <tr><td data-titre_colonne="reference">648 Hz</td><td data-titre_colonne="reproduite">600 Hz</td><td data-titre_colonne="moyenne">77%</td><td data-titre_colonne="date">22/12/2020  13:38:08</td></tr>
                            <tr><td data-titre_colonne="reference">760 Hz</td><td data-titre_colonne="reproduite">700</td><td data-titre_colonne="moyenne">79%</td><td data-titre_colonne="date">22/12/2020  14:38:08</td></tr>
                            <tr><td data-titre_colonne="reference">897 Hz</td><td data-titre_colonne="reproduite">897</td><td data-titre_colonne="moyenne">98%</td><td data-titre_colonne="date">22/12/2020  16:38:08</td></tr>

                            <tr><td colspan="4" data-titre_colonne="commentaire">Vous pouvez effectuer un nouveau test en cliquant <a href="#">ici</a></td></tr>
                        </tbody>
                    </table>
                </div>
               
                
                    
                  
                <div class="description">
                    <p>
                Quaestione igitur per multiplices dilatata fortunas cum ambigerentur quaedam, non nulla levius 
                actitata constaret, post multorum clades Apollinares ambo pater et filius in exilium acti cum ad locum Crateras nomine pervenissent, villam scilicet suam quae ab Antiochia vicensimo et
                 quarto disiungitur lapide, ut mandatum est, fractis cruribus occiduntur.</p>
           </div>
                
                 
                   
                  </div><br><br><br><br>
                  <div id="graphe2"></div> 
        </div>
       
    </div>

	
</body>

<footer>
    <?php include("./Component/Footer.php"); ?>
</footer>
</html>