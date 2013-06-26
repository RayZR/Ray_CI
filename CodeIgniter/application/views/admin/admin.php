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
<form action="<?php echo site_url("admin/create_user");?>" class="well form-inline" method="post">
    Email:<input type="email" name="email" placeholder="email" required />

    Password:<input type="password" name="password"  placeholder="password"  required/>
    <input type="submit" class="btn" value="create user"/>
</form>
<table class="table table-striped table-bordered table-condensed">
<tr><th>userId</th><th>email</th><th>role</th><th>Operation</th></tr>
<?php foreach($users as $key=>$value): ?>
    <tr><td><?php echo $value->userId; ?></td><td><?php echo $value->email;?></td><td><?php echo $value->role;?></td><td>
    <div class="btn-group">
          <a class="btn" href="#"><i class="icon-user"></i> User</a>
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
            <li><a href="admin/delete_user/<?php echo $value->userId; ?>"><i class="icon-trash"></i> Delete</a></li>
            <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="i"></i> Make admin</a></li>
          </ul>
        </div>
</td></tr>
<?php endforeach; ?>
</table>