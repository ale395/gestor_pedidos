@extends('layouts.signin')

@section('content')
<div class="container">
    <html>
      <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Año', 'Ventas', 'Expenses', 'Profit'],
              ['2014', 1000, 400, 200],
              ['2015', 1170, 460, 250],
              ['2016', 660, 1120, 300],
              ['2017', 1030, 540, 350]
            ]);

            var options = {
              chart: {
                title: 'Total de Pedidos',
                subtitle: 'Sales, Expenses, and Profit: 2014-2017',
              }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        </script>
      </head>
  <body>
    <div id="columnchart_material" style="height: 500px;"></div>
  </body>
</html>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Estados', 'Cantidad de Pedidos'],
          @foreach ($pastel as $pastels)
            @if ($pastels->estado == 'P')
                ['Pendiente', {{$pastels->cantidad}}],
            @else
                @if ($pastels->estado == 'F')
                    ['Facturado', {{$pastels->cantidad}}],
                @else
                    ['Rechazado', {{$pastels->cantidad}}],
                @endif
            @endif
          @endforeach
        ]);

        var options = {
          title: 'Pedidos por Estado',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="height: 500px;"></div>
  </body>
</html>

</div>
@endsection