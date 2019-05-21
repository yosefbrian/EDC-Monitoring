@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">DATA TRANSAKSI</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <head>
    <title>Google Charts Tutorial</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            packages: ['corechart']
        });
    </script>
</head>
<body>
    <div id="container" style="width: 800px; height: 500px; margin: 0 auto"></div>
    <script language="JavaScript">
        function drawChart() {
            /* Define the chart to be drawn.*/
            var data = google.visualization.arrayToDataTable([
                ['Bulan', 'Jumlah Transaksi'],
                ['Desember', 30000000],
                ['November', 23000000],
                ['Oktober', 46000000],
                ['September', 49000000],
                ['Agustus', 55000000],
                ['Juli', 12000000],
                ['Juni', 28000000],
                ['Mei', 15900000],
                ['April', 18100000],
                ['Februari', 27900000],
                ['Januari', 47797000]
            ]);
            var options = {
                title: 'Jumlah Transaksi Per-Bulan (2019)',
                isStacked: true
            };
            /* Instantiate and draw the chart.*/
            var chart = new google.visualization.BarChart(document.getElementById('container'));
            chart.draw(data, options);
        }
        google.charts.setOnLoadCallback(drawChart);
    </script>

<hr>
<div style="margin-top: 25px">
  <h5>
    <strong>Transaksi Per-Hari</strong>
  </h5>
  <br>
</div>
    <table class="table" style="width: 600px; margin-left: 100px">
  <thead>
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Jumlah Transaksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">10/09/2018</th>
      <td>190900</td>
    </tr>
<tr>
      <th scope="row">09/09/2018</th>
      <td>907722</td>
    </tr>
<tr>
    <th scope="row">08/09/2018</th>
      <td>90777</td>
    </tr>
  </tbody>
</table>
</body>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
