<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row" style="height: 80vh; align-items: center;">
        <div class="col">
            <center>
                <img src="<?php echo base_url('logo.jpg'); ?>" alt="" style="width: 500px; height: 350px;">
                <h1 style="color: #5528DB;">IOT Monitoring</h1>
                <br>
                <button class="button" onclick="window.location.href='/Devices/index'">
                    Go to Devices >
                </button>
            </center>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>