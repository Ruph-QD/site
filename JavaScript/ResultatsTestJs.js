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

  var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

  chart.draw(data, options);

var obj = document.getElementById('pb1');
obj.style.width = "95%";
obj.style.backgroundColor="green";
obj.textContent=obj.style.width.toString();
obj.textContent.backgroundColor="white";

}