@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div style="display:none;">
  <table id='dashboard' class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Persona</th>
        <th scope="col">Orden</th>
        <th scope="col">Variedad</th>
        <th scope="col">Upgrade</th>
        <th scope="col">Observaciones</th>
        <th scope="col">Horario</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order) 
        {{-- {{dd($order->created_at->toDateString()))}}      --}}
      <tr>
        <th scope="row">{{$order->id}}</th>
        <td>{{$order->user['name']}}</td>
        <td>{{$order->plate['name']}}</td>
        <td>{{$order->variation}}</td>
        <td>{{$order->upgrade}}</td>
        <td>{{$order->observation}}</td>
        <td>{{$order->time}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  <div style="display:none;">
      <table id='tickets' class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Persona</th>
            <th scope="col">Ticket</th>

    
          </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket) 
            {{-- {{dd($order->created_at->toDateString()))}}      --}}
          <tr>
            <th scope="row">{{$ticket->id}}</th>
            <td>{{$ticket->name}}</td>
            <td>{{$ticket->tnumber}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>
  <div>
      <table id='#' class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Persona</th>
            <th scope="col">Orden</th>
            <th scope="col">Variedad</th>
            <th scope="col">Upgrade</th>
            <th scope="col">Observaciones</th>
            <th scope="col">Horario</th>
    
          </tr>
        </thead>
        <tbody>
            @foreach ($dayorders as $order) 
            {{-- {{dd($order->created_at->toDateString()))}}      --}}
          <tr>
            <th scope="row">{{$order->id}}</th>
            <td>{{$order->user['name']}}</td>
            <td>{{$order->plate['name']}}</td>
            <td>{{$order->variation}}</td>
            <td>{{$order->upgrade}}</td>
            <td>{{$order->observation}}</td>
            <td>{{$order->time}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>
      <div>
          <table id='#' class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Persona</th>
                <th scope="col">Ticket</th>
    
        
              </tr>
            </thead>
            <tbody>
                @foreach ($daytickets as $ticket) 
                {{-- {{dd($order->created_at->toDateString()))}}      --}}
              <tr>
                <th scope="row">{{$ticket->id}}</th>
                <td>{{$ticket->name}}</td>
                <td>{{$ticket->tnumber}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
  <a href="#" id="excel" onclick="javascript:ExcelExport()"><button class="btn btn-dark">Exportar a Excel las ordenes del mes</button></a>
  <a href="#" id="ticket-excel" onclick="javascript:ExcelExportTickets()"><button class="btn btn-dark">Exportar a Excel los tickets del mes</button></a>

</div>

<script>function ExcelExport() {

  var date = new Date();
  date.setHours(0, 0, 0, 0); 
var months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
var days = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
  var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
  tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';
  tab_text = tab_text + '<x:Name>Pedidos del mes </x:Name>';
  tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
  tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';
  tab_text = tab_text + "<table border='1px'>";     
  tab_text = tab_text + $('#dashboard').html();
  tab_text = tab_text + '</table></body></html>';

 var data_type = 'data:application/vnd.ms-excel';

 $('#excel').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
 var name = 'Pedidos del mes de ' + months[date.getMonth()] + '.xls';
 $('#excel').attr('download', name);
}</script>
<script>function ExcelExportTickets() {

    var date = new Date();
    date.setHours(0, 0, 0, 0); 
  var months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
  var days = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';
    tab_text = tab_text + '<x:Name>Tickets del mes </x:Name>';
    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';
    tab_text = tab_text + "<table border='1px'>";     
    tab_text = tab_text + $('#tickets').html();
    tab_text = tab_text + '</table></body></html>';
  
   var data_type = 'data:application/vnd.ms-excel';
  
   $('#ticket-excel').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
   var name = 'Tickets del mes de ' + months[date.getMonth()] + '.xls';
   $('#ticket-excel').attr('download', name);
  }</script>
@endsection 