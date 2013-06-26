<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="#">Ray</a>
        <ul class="nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                    <i class="icon-user"></i> Home
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url();?>admin">User Administration</a></li>
                    <li><a href="<?php echo base_url();?>Home/login">Login</a></li>
                </ul>
            </li>
            <form class="navbar-form pull-left">
                <input type="text" class="span2">
                <button type="submit" class="btn">Submit</button>
            </form>
            <li><a href="<?php echo base_url();?>admin/display_customers">Display Customers</a></li>
            <li><a href="<?php echo base_url();?>admin/logout">Logout</a></li>
        </ul>

    </div>
</div>
<table class="table table-striped table-bordered table-condensed">
    <tr><th>Id</th><th>Name</th><th>role</th><th>CustomerCompany</th></tr>
    <?php foreach($customers as $key=>$value): ?>
        <tr><td><?php echo $value->id; ?></td><td><?php echo $value->CustomerName;?></td><td><?php echo $value->CustomerEmail;?></td><td>

                <?php echo $value->CustomerCompany;?> </td></tr>
    <?php endforeach; ?>

