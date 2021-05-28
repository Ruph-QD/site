
   
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
              title: 'Niveau de Stress',
              curveType: 'function',
              legend: { position: 'top' }
            };
    
            var chart = new google.visualization.LineChart(document.getElementById('graphe1'));
    
           
    
    chart.draw(data, options);
    
        
          }
        </script>
    
   


   
    <div class="contenu">
      
 
        <div id="graphe1" style="margin-left:7%;margin-right:7%; height: 500px;;"></div> 
       
    </div>

