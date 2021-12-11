<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <table class="responsive-table">
        <caption>Device Details</caption>
        <thead>
            <tr>
                <th scope="col">Category</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="7">Sources: Wikipedia</td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <th scope="row">ID</th>
                <td data-title="Released"><?= $id; ?></td>
            </tr>
            <tr>
                <th scope="row">Device Name</th>
                <td data-title="Released"><?= $device['device_name']; ?></td>
            </tr>
            <tr>
                <th scope="row">Device Brand</th>
                <td data-title="Released"><?= $device['device_brand']; ?></td>
            </tr>
            <tr>
                <th scope="row">Device Quantity</th>
                <td data-title="Released"><?= $device['device_quantity']; ?></td>
            </tr>
            <tr>
                <th scope="row">Device Status</th>
                <td data-title="Released"><?= $device['device_status']; ?></td>
            </tr>
            <tr>
                <th scope="row">Device Defect</th>
                <td data-title="Released"><?= $device['device_defect']; ?></td>
            </tr>
            <tr>
                <th scope="row">Device Origin</th>
                <td data-title="Released"><?= $device['device_origin']; ?></td>
            </tr>
        </tbody>
    </table>
    <button class="button" onclick="window.location.href='/Pages/index'">Back to Home</button>
</div>

<?= $this->endSection(); ?>