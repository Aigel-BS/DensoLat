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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-red">
                            Ranking de ventas acumuladas de Agentes
                        </div>
                        <div class="card-body card_block_top_align ">
                            <div id="top_x_div" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-red">
                            Posiciones de Vendendores
                        </div>
                        <div class="card-body card_block_top_align ">
                            <div id="positions_chart" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 m-t-20">
                    <div class="card">
                        <div class="card-header bg-red">
                            Histórico de Ventas al <?= date ("d/m/Y")?>
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
    google.charts.load('current', {'packages':['bar','corechart','table']});

    //Gráfica de Barras
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Vendedor', 'Ventas'],
            <?php
                foreach($ventas_mensuales as $venta_m):
                    echo "['".$venta_m['vendedor']."',".$venta_m['final']."],";
                endforeach;
            ?>
        ]);
        var options = {
            chart: {
                title: 'Ventas por Vendedor',
                subtitle: 'Ventas acumuladas',
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

    //Tabla de Ingresos
    google.charts.setOnLoadCallback(drawChart2);
    function drawChart2() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Vendedor');
        data.addColumn('number', 'Oct 23');
        data.addColumn('number', 'Nov 23');
        data.addColumn('number', 'Dic 23');
        data.addColumn('number', 'Ene 24');
        data.addColumn('number', 'Feb 24');
        data.addColumn('number', 'Mar 25');
        data.addColumn('number', 'Ventas Totales');
                // Add the salesman data
        data.addRows([
            <?php
            foreach($tabla_ventas as $key=>$registro):
                $total = floatval($registro['2023-10-01'])+floatval($registro['2023-11-01'])+floatval($registro['2023-12-01'])+floatval($registro['2024-01-01'])+floatval($registro['2024-02-01']);
                echo "['".$key."',".$registro['2023-10-01'].",".$registro['2023-11-01'].",".$registro['2023-12-01'].",".$registro['2024-01-01'].",".$registro['2024-02-01'].",0,".$total."],";
            endforeach;
            ?>

            ]);

        data.sort({column: 7, desc: true});
                // Define the table options
        var options = {
               'showRowNumber': true,
               'width': '100%',
               'height': '100%'
        };
                // Draw the table
        var chart = new google.visualization.Table(document.getElementById('top_y_div'));
        chart.draw(data, options);

    }

    google.charts.setOnLoadCallback(drawChart3);

    function drawChart3() {
        var data = google.visualization.arrayToDataTable([
            ['Mes',
            <?php
                foreach ($tabla_ventas as $key=>$registro){
                    echo "'".$key."',";
                }
            ?>
            ],
            ['Oct 23',
                <?php
                foreach ($tabla_ventas as $key=>$registro){
                    echo $registro['2023-10-01'].",";
                }
                ?>
            ],
            ['Nov 23',
                <?php
                foreach ($tabla_ventas as $key=>$registro){
                    echo $registro['2023-11-01'].",";
                }
                ?>
            ],
            ['Dic 23',
                <?php
                foreach ($tabla_ventas as $key=>$registro){
                    echo $registro['2023-12-01'].",";
                }
                ?>
            ],
            ['Ene 24',
                <?php
                foreach ($tabla_ventas as $key=>$registro){
                    echo $registro['2024-01-01'].",";
                }
                ?>
            ],
            ['Feb 24',
                <?php
                foreach ($tabla_ventas as $key=>$registro){
                    echo $registro['2024-02-01'].",";
                }
                ?>
            ],
            //['Mar 24',
            //    <?php
            //    foreach ($crecimiento as $crec){
            //        echo "0,";
            //    }
            //    ?>
            //]
        ]);

        var options = {
            title: 'Ventas por mes',
            legend: { position: 'bottom' },
            'width': '100%',
        };

        var chart = new google.visualization.LineChart(document.getElementById('positions_chart'));

        chart.draw(data, options);
    }

</script>
