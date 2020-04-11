<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script defer src="script.js"></script>
      <script src="chart.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Statistika</title>
  </head>
  <body>
    <?php include('nav-bar.php'); ?>
    <div class="links">
        <a href="statistika.php"><button class="lingid">Statistika</button></a>
        <a href="aine.php"><button class="lingid">Aine</button></a>
        <a href="kalender.php"><button class="lingid">Kalender</button></a>
        <a href="seaded.php"><button class="lingid">Seaded</button></a>
    </div>

    <canvas id="myChart"></canvas>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {

            type: 'bar',


            data: {
                labels: ['Esmaspäev', 'Teisipäev', 'Kolmapäev', 'Neljapäev', 'Reede', 'Laupäev', 'Pühapäev'],
                datasets: [{
                    label: 'Selle nädala aktiivsus',
                    backgroundColor: 'rgb(62,162,255)',
                    borderColor: 'rgb(62,162,255)',
                    data: [0, 4, 1, 2, 6, 1, 0]
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>
    
  </body>
</html>