@extends ('layoutku.app')

@section('content')
<!-- START: charts/chartjs -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Chart.js</strong>
      <a href="http://www.chartjs.org/" target="_blank" class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Line Chart</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://www.chartjs.org/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <!-- Line Chart -->
          <canvas id="chart-line" width="400" height="200"></canvas>
          <!-- End Line Chart -->
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Bar Chart</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://www.chartjs.org/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <!-- Bar Chart -->
          <canvas id="chart-bar" width="400" height="200"></canvas>
          <!-- End Bar Chart -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Radar Chart</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://www.chartjs.org/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <!-- Radar Chart -->
          <canvas id="chart-radar" width="400" height="200"></canvas>
          <!-- End Radar Chart -->
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Polar Area Chart</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://www.chartjs.org/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <!-- Polar Area Chart -->
          <canvas id="chart-polar" width="400" height="200"></canvas>
          <!-- End Polar Area Chart -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Pie Chart</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://www.chartjs.org/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <!-- Radar Chart -->
          <canvas id="chart-pie" width="400" height="200"></canvas>
          <!-- End Radar Chart -->
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Doughnut Chart</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://www.chartjs.org/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <!-- Doughnut Chart -->
          <canvas id="chart-doughnut" width="400" height="200"></canvas>
          <!-- End Doughnut Chart -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: charts/chartjs -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      // LINE CHART
      var lineCtx = document.getElementById('chart-line').getContext('2d')

      var dataLine = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'My First dataset',
            fill: false,
            lineTension: 0.1,
            backgroundColor: 'rgba(75,192,192,0.4)',
            borderColor: 'rgba(75,192,192,1)',
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: 'rgba(75,192,192,1)',
            pointBackgroundColor: '#fff',
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: 'rgba(75,192,192,1)',
            pointHoverBorderColor: 'rgba(220,220,220,1)',
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [65, 59, 80, 81, 56, 55, 40],
            spanGaps: false,
          },
        ],
      }

      new Chart(lineCtx, {
        type: 'line',
        data: dataLine,
        options: {
          scales: {
            xAxes: [
              {
                display: false,
              },
            ],
          },
        },
      })

      // BAR CHART
      var barCtx = document.getElementById('chart-bar').getContext('2d')

      var dataBar = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'My First dataset',
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)',
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)',
            ],
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55, 40],
          },
        ],
      }

      new Chart(barCtx, {
        type: 'bar',
        data: dataBar,
        options: {
          scales: {
            xAxes: [
              {
                stacked: true,
              },
            ],
            yAxes: [
              {
                stacked: true,
              },
            ],
          },
        },
      })

      // RADAR CHART
      var radarCtx = document.getElementById('chart-radar').getContext('2d')

      var dataRadar = {
        labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
        datasets: [
          {
            label: 'My First dataset',
            backgroundColor: 'rgba(179,181,198,0.2)',
            borderColor: 'rgba(179,181,198,1)',
            pointBackgroundColor: 'rgba(179,181,198,1)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgba(179,181,198,1)',
            data: [65, 59, 90, 81, 56, 55, 40],
          },
          {
            label: 'My Second dataset',
            backgroundColor: 'rgba(255,99,132,0.2)',
            borderColor: 'rgba(255,99,132,1)',
            pointBackgroundColor: 'rgba(255,99,132,1)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgba(255,99,132,1)',
            data: [28, 48, 40, 19, 96, 27, 100],
          },
        ],
      }

      new Chart(radarCtx, {
        type: 'radar',
        data: dataRadar,
        options: {
          scale: {
            reverse: true,
            ticks: {
              beginAtZero: true,
            },
          },
        },
      })

      // POLAR CHART
      var polarCtx = document.getElementById('chart-polar').getContext('2d')

      var dataPolar = {
        datasets: [
          {
            data: [11, 16, 7, 3, 14],
            backgroundColor: ['#FF6384', '#4BC0C0', '#FFCE56', '#E7E9ED', '#36A2EB'],
            label: 'My dataset', // for legend
          },
        ],
        labels: ['Red', 'Green', 'Yellow', 'Grey', 'Blue'],
      }

      new Chart(polarCtx, {
        type: 'polarArea',
        data: dataPolar,
        options: {
          elements: {
            arc: {
              borderColor: '#4BC0C0',
            },
          },
        },
      })

      // PIE CHART
      var pieCtx = document.getElementById('chart-pie').getContext('2d')

      var dataPie = {
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [
          {
            data: [300, 50, 100],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
          },
        ],
      }

      new Chart(pieCtx, {
        type: 'pie',
        data: dataPie,
      })

      // DOUGHTNUT CHART
      var doughnutCtx = document.getElementById('chart-doughnut').getContext('2d')

      var chartDoughnut = {
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [
          {
            data: [300, 50, 100],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
          },
        ],
      }

      new Chart(doughnutCtx, {
        type: 'doughnut',
        data: chartDoughnut,
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection
