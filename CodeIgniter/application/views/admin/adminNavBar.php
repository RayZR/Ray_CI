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
                    <li><a href="<?php echo base_url();?>admin/DashBoard">DashBoard</a></li>
                    <li><a href="<?php echo base_url();?>Home/login">Login</a></li>
                </ul>
            </li>
            <form class="navbar-form form-search pull-right">
               <div class="input-append">
                <input type="text" class="span2 search-query">
                <button type="submit" class="btn">Search</button>
               </div>
            </form>
            <li><a href="<?php echo base_url();?>admin/display_customers">Display Customers</a></li>

        </ul>
            <ul class="nav pull-right">
                <li ><a href="<?php echo base_url();?>admin/logout">Logout</a></li>
            </ul>
    </div>
</div>
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: acer
 * Date: 26/06/13
 * Time: 1:27 PM
 * To change this template use File | Settings | File Templates.
 */