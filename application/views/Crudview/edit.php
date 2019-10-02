</div>
</div>
<div class="container"> 
    <h2>Crud Operations</h2>
    <h2>Edit User</h2>
    <input type="hidden" name="txt_hidden" value ="<?php echo $user->id ?>" >
    <a href="<?php echo base_url('Crud/crudController'); ?>" class="btn btn-default">Back </a>
    <form action="<?php echo base_url('Crud/update'); ?>" method="post" class="form-horizontal">
    <input type="hidden" name="txt_hidden" value="<?php echo $user->id; ?>">
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Order </label>
            <div class="col-md-4">
                <input type="text" name="order" value ="<?php echo $user->orderid ?>" class="form=control" required class="form-control" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Item Name</label>
            <div class="col-md-4">
            <select name="items" id="item" class="browser-default custom-select">
                <option value ="<?php echo $user->itemid ?> selected></option>
                
                <?php 
                foreach($itemss as $row)
                {
                    echo '<option value="'.$row->id.'">'.$row->item_name.'</option>';
                }
                ?>
              
                </select>
            </div>
        </div>

        <!-- <div class="form-group">
            <label for="title" class="col-md-2 text-right">qty</label>
            <div class="col-md-4">
                <input type="number" name="qty" value ="<?php echo $user->qty ?>" class="form=control" required >
            </div>
        </div> -->
        
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
            <label for="title" class="col-md-2 text-right">Item Quantity</label>
            <div class="col-md-4">
                <input type="number" name="qty" id="box1" value ="<?php echo $user->qty ?>" oninput="calculate();" class="form=control" required  >
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">per unit price</label>
            <div class="col-md-4">
                <input type="text" id="box2" name="price" value ="<?php echo $user->item_price ?>" oninput="calculate();" class="form=control" required  >
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Total amount</label>
            <div class="col-md-4">
                <!-- <input type="text" id="result" name="totalprice" class="form=control"  required > -->
            <input id="result" name="totalamount" value ="<?php echo $user->total_amount ?>"/>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right"></label>
            <div class="col-md-4">
                <input type="submit" name="btnUpdate" class="btn btn-primary" vlaue="Update" >
            </div>
        </div>

    </form>

