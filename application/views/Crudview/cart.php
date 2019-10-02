<!DOCTYPE html>
<html>
    <head>
        <title>The Shopping HUNT| Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet"  href="<?php echo base_url('assets/css/cart.css') ?>" />
        <script src="<?php echo base_url('assets/js/cart.js')?>" async></script>
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

       
        <form action="<?php echo base_url('Crud/cart_submit'); ?>" method="post" class="form-horizontal">

        <section class="container content-section">

        <h2 class="section-header">FLOOR LAMP</h2>
          


            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title" name="Lamp">Lamp</span>
                    <img class="shop-item-image" src="<?php echo base_url('assets/images/l1.jpg')?>">
                    <div class="shop-item-details">
                        <span class="shop-item-price" name="price">$19.99</span>
                        <button  class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title" name="AntiqueLamp" >Antique Lamp</span>
                    <img class="shop-item-image" src="<?php echo base_url('assets/images/l2.jpg')?>">
                    <div class="shop-item-details">
                        <span class="shop-item-price" name="price">$6.99</span>
                        <button  class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <span class="cart-item cart-header cart-column" class="col-md-2 text-right">Customer Name : 
            <!-- <label for="title" class="cart-item cart-header cart-column" class="col-md-2 text-right">Customer Name</label> -->
            <select name="uname" id="uname" value="" class="browser-default custom-select">
              <option selected >Select Customer</option>
                <?php 
                    foreach($customer_name as $row)
                    {
                        echo '<option value="'.$row->cid.'">'.$row->customer_name.'</option>';
                    }
                ?>
            </select>
       
        </span>
</section>            
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price" name="totalamount">$0</span>
            </div>
            <!-- <a href="javascript:void(0);" onClick="popUpWindow('#');" title="Purchase"> -->
<button type="submit" href="javascript:void(0);"  title="Purchase" class="btn btn-primary btn-purchase">Purchase</button>
            
<!-- <button class="btn btn-primary btn-purchase" type="button" >PURCHASE</button> -->
            
        </section>
        </form>

        
    </body>
</html>