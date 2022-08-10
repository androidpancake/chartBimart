<?= $this->extend('layout/template');?>
<?= $this->section('content')?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div id="container"></div>
        </div>
        <div class="col-4">
            <div id="pie"></div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Amount</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach($inventory as $row):
            // var_dump($row['location']);
            ?>
            <tr>
                <td scope="row"><?= $i++?></td>
                <td><?= $row['name']?></td>
                <td><?= json_encode($row['data'])?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        // var jon = 
        // console.log(jon);
        const chart = Highcharts.chart('pie', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Peralatan'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [
                { 
                    name: 'Presentase',
                    data: <?php echo json_encode($datapie)?>}
            ]
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        // var jon = 
        // console.log(jon);
        const chart = Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Peralatan'
            },
            xAxis: {
                categories: <?php echo ($value)?>,
                crosshair: true
            },
            yAxis: {
                title: {
                    text: 'Jumlah alat'
                }
            },
            // tooltip: {
            // pointFormat: '<tr><td style="color:{series.color};padding:0">{series.legen}: </td>' + 
            // '<td style="padding:0"><b>{point.y}</b></td></tr>',
            // },
            
            series: <?php echo json_encode($datachart)?>
            
        });
    });
</script>
<?= $this->endsection();?>