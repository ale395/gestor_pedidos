<!DOCTYPE html>
<html>
<head>
  <title>Listado de Pedidos</title>
  <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
  <header class="table-text-center"><img src="{{asset('logo_tienda.png')}}" width="300" height="80"></header>
  <div class="footer">Página Nro: <span class="pagenum"></span></div>
  <h1 class="table-text-center">Lista de Pedidos</h1>
  <table class="table table-success table-bordered table-hover table-striped table-sm .table-responsive" id="tableProductos">
      <thead class="thead-inverse center-block">
        <tr>
          <th class="size-id table-text-center">Num. Pedido</th>
          <th class="table-text-center">Fecha</th>
          <th class="table-text-center size-acciones">Total</th>
          <th class="table-text-center">Estado</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $pedidos)
          <tr>
            <td class="size-id table-text-center">{{ $pedidos->num_pedido}}</td>
            <td>{{ $pedidos->fecha}}</td>
            <td class="derecha size-acciones">{{ number_format($pedidos->total, 0) }}</td>
            <td class="table-text-center">{{ $pedidos->estado }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
</body>
</html>