<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="//d3js.org/d3.v3.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/cal-heatmap/3.3.10/cal-heatmap.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/cal-heatmap/3.3.10/cal-heatmap.css" />
    <style>
        .subdomain-text{
            fill: black
        }
    </style>
    <title>Document</title>
</head>
<body style="background: black;">
    <div id="cal-heatmap"></div>
    <script type="text/javascript">
        var cal = new CalHeatMap();
        cal.init({
            domain: 'month',
            subDomain: 'day',
            subDomainTextFormat: "%d",
            // tooltip: true,
            subDomainTitleFormat: {
                filled: '{count}'
            },
            highlight: new Date(),
            range: 12,
            cellSize: 16,
            cellRadius: 3,
            cellPadding: 5,
            legend: [25,75,125],
            legendColors: {
                empty: "#ededed",
                min: "#40ffd8",
                max: "#f20013"
            },
            data: 'http://test.test/utilization'
        });
    </script>
</body>
</html>