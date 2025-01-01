<!DOCTYPE html>
<html>

<head>
    <title>Line Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div style="width: 80%; margin: auto;">
        {!! $chart->container() !!}
    </div>

    {!! $chart->script() !!}
</body>

</html>