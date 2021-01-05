@extends('admin.layout')

@section('content')
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
@endsection

@section('extra-js')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Komada", { role: "style" } ],
        ["Proizvodi", {{$products}}, "orange"],
        ["Porudzbine", {{$orders}}, "gold"],
        ["Akcije", {{$actions}}, "silver"],
        ["Korisnici", {{$users}}, "blue"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Poslovna statistika Pizza 66",
        width: 1600,
        height: 800,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
    
@endsection