<style>
    .bg-red{
        background-color: #d60f30;
        color: white;
    }
    .logo{
        height: 50px;
    }
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="content" class="bg-container" style="width:90%">
    <header class="head">
        <div class="main-bar" style="background-color: #d60f30;">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <?= $this->Html->image('Logo_DENSO.jpg',array('class'=>'logo'))?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: center;">
                    <h4 class="nav_top_align" style="color: white">
                        CONCURSO OCT 2023-MAR 2024
                    </h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" style="text-align: center;">
                    <h4 class="nav_top_align" style="color: white">
                        <?= $distribuidor['Distribuidor']['nombre']?>
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header bg-red">
                            Crecimiento de Agentes
                        </div>
                        <div class="card-body card_block_top_align ">
                            <div id="top_x_div" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-red">
                            Agentes con más clientes nuevos
                        </div>
                        <div class="card-body card_block_top_align ">
                            <div id="top_z_div" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header bg-red">
                            Acumulado de Ventas al <?= date ("d/m/Y")?>
                        </div>
                        <div class="card-body card_block_top_align ">
                            <div id="top_y_div" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    google.charts.load('current', {'packages':['bar','corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Vendedor', 'Ventas'],
            <?php
                foreach($crecimiento as $crec):
                    echo "['".$crec['vendedor']."',".$crec['final']."],";
                endforeach;
            ?>
        ]);
        var options = {
            chart: {
                title: 'Ventas por Vendedor',
                subtitle: 'Ventas del mes',
            },
            colors: ['red'],
            bars: 'horizontal', // Required for Material Bar Charts.
            axes: {
                x: {
                    0: {side: 'top'} // Top x-axis.
                }
            },
            bar: {groupWidth: "90%"}
        };
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawChart2);
    function drawChart2() {
        var data = google.visualization.arrayToDataTable([
            ['Vendedor', 'Ventas'],
            <?php
            foreach($crecimiento as $crec):
                echo "['".$crec['vendedor']."',".$crec['final']."],";
            endforeach;
            ?>
        ]);

        var options = {
            title: 'Ventas por Vendedor',
            subtitle: 'Crecimiento en %',
            pieHole: 0.4,
            legend: {
                position: 'labeled'
            },
            pieSliceText: 'value',
            'chartArea': {'width': '100%', 'height': '80%'},


        };

        var chart = new google.visualization.PieChart(document.getElementById('top_y_div'));
        chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawChart3);
    function drawChart3() {
        var data = google.visualization.arrayToDataTable([
            ['Vendedor', 'Ventas'],
            <?php
            foreach($crecimiento as $crec):
                echo "['".$crec['vendedor']."',".($crec['final']/1000)."],";
            endforeach;
            ?>
        ]);


        var options = {
            title: '% de Crecimiento',
            hAxis: {title: 'Vendedor'},
            vAxis: {title: 'Crecimiento'},
            pointSize: 10,
            colors: ['#d60f30'],
            legend: 'none',
            curveType: 'function',
        };

        var chart = new google.visualization.LineChart(document.getElementById('top_z_div'));
        chart.draw(data, options);

    }
</script>
