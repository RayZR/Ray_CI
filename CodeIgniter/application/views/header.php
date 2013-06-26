<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title;?></title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/default.css" type="text/css"/>
    <?php
    if(isset($css)){
        foreach($css as $Custom_css){
        echo '<link rel="stylesheet" href="'.base_url().$Custom_css.'" type="text/css"/>';
    }
    }

    if(isset($js)){
        foreach($js as $Custom_js){
           echo '<script src="'.base_url().$Custom_js.'"></script>';
        }
    }

    ?>

</head>

<body>


<div id="content">