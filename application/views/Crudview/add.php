</div>
</div>

<div class="container"> 

    <h2>Place New Order</h2> 
    <!-- <a href="<?php echo base_url('Crud/crudController'); ?>" style="float:right;margin-left:25px" class="btn btn-default"> Back </a> -->

    <form action="<?php echo base_url('Crud/submit'); ?>" method="post" class="form-horizontal">
     
  
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Item Name</label>
            <div class="col-md-4">
            <select name="items" id="item" class="browser-default custom-select">
                <option selected>Select Item</option>
                <?php 
                foreach($itemss as $row)
                {
                    echo '<option value="'.$row->id.'">'.$row->item_name.'</option>';
                }
                ?>
                
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Item Quantity</label>
            <div class="col-md-4">
                <input type="number" name="qty" id="box1"  oninput="calculate();" class="form=control" required  >
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">per unit price</label>
            <div class="col-md-4">
                <input type="text" id="box2" name="price" oninput="calculate();" class="form=control" required  >
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Total amount</label>
            <div class="col-md-4">
                <!-- <input type="text" id="result" name="totalprice" class="form=control"  required > -->
            <input id="result" name="totalamount"/>

            </div>
        </div>
        <!-- <a  class="btn btn-primary shop-item-button"  style="float:right">Add New </a> -->
        <!-- <a href="javascript:void(0);" onClick="addItems();" title="ADD TO CART"> -->
        <!-- <button  class="btn btn-primary"  type="button" style="float:right"  onClick="fun()">ADD TO CART</button> -->
        <button class="btn btn-primary"  type="button" style="float:right" onclick="AddRow()" >Add to Cart </button>

        <hr>
        <h2><span class="glyphicon glyphicon-shopping-cart"></span> Bucket</h2>
       

<script>

    function calculate() {
        var myBox1 = document.getElementById('box1').value; 
        var myBox2 = document.getElementById('box2').value;
        var result = document.getElementById('result'); 
        var myResult = myBox1 * myBox2;
          document.getElementById('result').value = myResult;

    }
</script>
   <div class="form-group">
            <label for="title" class="col-md-2 text-right">Customer Name</label>
            <div class="col-md-4">
            <select name="uname" id="uname" value="" class="browser-default custom-select">
                <option selected>Select Customer</option>
                <?php 
                foreach($customer_name as $row)
                {
                    echo '<option value="'.$row->cid.'">'.$row->customer_name.'</option>';
                }
                ?>
                
                </select>
            </div>
        </div>
        <div class="container">
        <table class="table table-border table-responsive" id="show" >
        <thead>
        <tr>
        <!-- <td>#</td> -->
                <!-- <td>Order ID</td> -->
                <!-- <td>Customer Name</td> -->
                <!-- <td>Email</td> -->
                <!-- <td>Order Date</td> -->
                <td>Item Name</td>
                <td>Qty.</td>
                <td>per unit price</td>
                <td>Total Amount</td>
                <!-- <td>Action</td> -->
            </tr>
        </thead>
        <!-- <tbody>
            <tr>
            <td>1</td>
                <td><?php echo $user->orderid;?></td>
                <td>zeeshan</td>
                <td>gmail</td>
                <td>488</td>
                <td>44</td>
                <td>4</td>
                <td>9800</td>
                <td>
                <a href="#" class="btn btn-info">Edit </a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Do you really want to delete?')">Delete </a>

                </td>
            </tr>
            

        </tbody> -->
        </table>
</div>
      
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="title" class="col-md-2 text-right"></label>
            <div class="col-md-4"> -->
                <input style="float:right; margin-right:130px" type="submit" name="btnSave" class="btn btn-primary" vlaue="Save" >
            <!-- </div>
        </div> -->

    </form>
