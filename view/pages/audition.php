
   
        <script type="text/javascript" src="../style/Javascript/ResultatsTestJs.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
     
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
    
          function drawChart() {
            var data3 = google.visualization.arrayToDataTable([
              ['test', 'audition'],
              ['1',  36],
              ['2',  20],
              ['3',  15],
              ['4',  35]
            ]);
    
            var options = {
              title: 'Niveau d audition',
              curveType: 'function',
              legend: { position: 'top' }
            };
    
            var chart3 = new google.visualization.LineChart(document.getElementById('graphe3'));
    
           
    
    chart3.draw(data3, options);
    
        
          }
        </script>
    
   


   
    <div class="contenu">
      
 
        <div id="graphe3" style="margin-left:7%;margin-right:7%; height: 500px;;"></div> 
       
    </div>

