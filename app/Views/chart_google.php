<?= $this->extend('dashboard');?>
<?= $this->section('content')?>

<div class="container">
<div id="container" style="height: 300px;"></div>
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
            foreach($inventory as $row):?>
            <tr>
                <td scope="row"><?= $i++?></td>
                <td><?= $row['amount']?></td>
                <td><?= $row['location']?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    
    
</div>
<script>
    
</script>
<?= $this->endsection();?>