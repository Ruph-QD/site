
        <script type="text/javascript" src="../style/Javascript/ResultatsTestJs.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
     
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
    
          function drawChart() {
            var data2 = google.visualization.arrayToDataTable([
              ['test', 'temps de reaction'],
              ['1',  10 ],
              ['2',  20],
              ['3',  15],
              ['4',  35]
            ]);
    
            var options = {
              title: 'Niveau de Reflexe',
              curveType: 'function',
              legend: { position: 'top' }
            };
    
            var chart2 = new google.visualization.LineChart(document.getElementById('graphe2'));
    
           
    
    chart2.draw(data2, options);
    
        
          }
        </script>
    
    </head>

<body>
   
    <div class="contenu">
      
 
        <div id="graphe2" style="margin-left:7%;margin-right:7%; height: 500px;;"></div> 
       
    </div>

	


