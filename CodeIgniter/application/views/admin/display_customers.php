
<table class="table table-striped table-bordered table-condensed">
    <tr><th>Id</th><th>Name</th><th>role</th><th>CustomerCompany</th></tr>
    <?php foreach($results as $key=>$value): ?>
        <tr><td><?php echo $value->id; ?></td><td><?php echo $value->CustomerName;?></td><td><?php echo $value->CustomerEmail;?></td><td>

                <?php echo $value->CustomerCompany;?> </td></tr>
    <?php endforeach; ?>


    </table>

<?php echo $links; ?>
