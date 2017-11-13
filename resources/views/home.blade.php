@extends('layouts.signin')

@section('content')
<div class="container">
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
            @if ($pastels->estado == 'A')
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
          title: 'Cantidad de Pedidos según Estados',
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

@yield('graficoColumna')

</div>
@endsection