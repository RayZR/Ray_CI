Admin login
<form action="<?php echo site_url("admin/login/submit");?>" method="post"  class="well form-horizontal">
    <table>
    <tr><td>Email</td><td><input type="email" name="email"   required colspan="3"/></td></tr>
        <tr><td> Password</td><td><input type="password" name="password" colspan="2"  required/></td></tr>
    <tr><td></td><td><input type="submit" class="btn" value="Login" colspan="1" /></td></tr>
    </table>
</form>
<?php

