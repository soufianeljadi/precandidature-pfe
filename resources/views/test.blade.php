<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Only teacher</title>
</head>

<body>
  <h1>Only teacher can be access to this page</h1>

  <p>{{ \App\Models\User::count() }}
  <p>
  <div class="chart-container">
    <canvas id="myChart"></canvas>
  </div>




  <script>
    // Create a chart using Chart.js
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Users', 'Signups', 'Revenue'],
        datasets: [{
          label: '#myChart',
          data: [20, 10, 24],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>
</body>

</html>
