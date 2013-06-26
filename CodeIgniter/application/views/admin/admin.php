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