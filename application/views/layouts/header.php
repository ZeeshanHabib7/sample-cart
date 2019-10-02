<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart View</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min1.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-responsive.min1.css') ?>">
   
    <!-- <link rel="stylesheet" type="text/css" href=""> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href=""> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/theme1.css') ?>">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js" ></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script> -->
   
    <!-- <script src="<?php echo base_url('assets/js/car.js')?>" async></script> -->
    <script src="<?php echo base_url('assets/js/shoppingcart.js')?>" async></script>
    <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}
</script>
</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
        
        <a href="<?php echo base_url('Crud/crudController'); ?>" style="float:right;margin-top:25px;margin-left:25px" class="btn btn-default"> Back </a>
        <h1><i class="menu-icon icon-cog"></i>Shopping Cart</h1>
