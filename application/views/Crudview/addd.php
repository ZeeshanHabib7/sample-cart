</div>
</div>

<div class="container"> 

    <h2>Place New Order</h2> 
    <!-- <a href="<?php echo base_url('Crud/crudController'); ?>" style="float:right;margin-left:25px" class="btn btn-default"> Back </a> -->

    <form action="<?php echo base_url('Crud/submit'); ?>" method="post" class="form-horizontal">
     
    <div class="form-group">
            <label for="title" class="col-md-2 text-right" hidden  >no</label>
            <div class="col-md-4">
                <input type="number" name="no" id="no"   class="form=control" required readonly hidden >
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Item Name</label>
            <div class="col-md-4">
            <select name="items" id="itemid" class="browser-default custom-select">
                <!-- <option selected>Select Item</option> -->
                <?php 
                foreach($itemss as $row)
                {
                    echo '<option selected value="'.$row->id.'">'.$row->item_name.'</option>';
                }
                ?>
                
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right" >Item Quantity</label>
            <div class="col-md-4">
                <input type="number" name="qty" id="qty"  oninput="calculate();" class="form=control" required  >
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">per unit price</label>
            <div class="col-md-4">
                <input type="text" id="item_price" name="price" oninput="calculate();" class="form=control" required  >
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Total amount</label>
            <div class="col-md-4">
                <!-- <input type="text" id="result" name="totalprice" class="form=control"  required > -->
            <input id="total_amount" name="totalamount"readonly/>

            </div>
        </div>
        <!-- <a  class="btn btn-primary shop-item-button"  style="float:right">Add New </a> -->
        <!-- <a href="javascript:void(0);" onClick="addItems();" title="ADD TO CART"> -->
        <!-- <button  class="btn btn-primary"  type="submit" style="float:right"  onClick="fun()" onclick="AddRow()">ADD TO CART</button> -->
        <button class="btn btn-primary" id="add_data" type="button" style="float:right"  >Add to Cart </button>
        <hr>
        <h2><span class="glyphicon glyphicon-shopping-cart"></span> Bucket</h2>
       

<script>

function calculate() {
    
        var myBox1 =  document.getElementById("qty").value; 
        var myBox2 = document.getElementById('item_price').value;
        var result = document.getElementById('total_amount'); 
        var myResult = myBox1 * myBox2;
          document.getElementById('total_amount').value = myResult;

    }

$(function(){
    //set num. for adding rows
    var set_number = function(){
         table_len =$('#data_table tbody tr').length++;

        $('#no').val(table_len);
    }
    set_number();

    $('#add_data').click(function(){
        var no = $('#no').val();
        var itemid = $('#itemid').val();
        var qty = $('#qty').val();
        var price = $('#item_price').val();
        var total = $('#total_amount').val();
        
        // var delete = $('#result').val();
        


        $('#data_table tbody:last-child').append(

            '<tr>'+
                '<td>'+no+'</td>'+
                '<td>'+itemid+'</td>'+
                '<td>'+qty+'</td>'+
                '<td>'+price+'</td>'+
                '<td>'+total+'</td>'+
                // '<button class="btn btn-danger">'+ Delete+'</button>'+
                // '<td>'+<a href="#" class="btn btn-info">Edit</a>'</td>'+
                // set_number();
            '</tr>'
        );
         $('#no').val('');
         $('#itemid').val('');
         $('#qty').val('');
         $('#item_price').val('');
         $('#total_amount').val('');
         set_number();
    });

    $('#save').click(function() {
           
        var table_data= [];
        $('#data_table tr').each(function(row,tr){
            if($(tr).find('td:eq(0)').text() == ""){

            } else {
                var sub = {

                    // 'no' : $(tr).find('td:eq(0)').text(),
                    'itemid' : $(tr).find('td:eq(1)').text(),
                    'qty' : $(tr).find('td:eq(2)').text(),
                    'item_price' : $(tr).find('td:eq(3)').text(),
                    'total_amount' : $(tr).find('td:eq(4)').text(),
                    // 'orderid' : $(tr).find('td:eq(5)').text(),


};
                    table_data.push(sub);
            }
                
            
        });    
        console.log(table_data);
        swal({
            title:'Confirm Order?',
            text:'',
            type:'',
            showLoaderOnconfirm: true,
            showCancelButton : true,
            ConfirmButtonText:'yes',
            closeOnConfirm :false },
            function(){

                var cname=$("#uname").val();

                var data = {'data_table' : table_data,'uname':cname};
                
                $.ajax({
                    data : data,
                    type:'POST',
                    url:'<?php echo base_url('crud/save'); ?>',
                    crossOrgin :false,
                    dataType: 'json',
                    success : function(result){
                        // console.log(result.check)
                        if(result.status == "success") {
                            swal('congratulations!','Your order has been placed successfull','success');
                            
                            // redirect(base_url('crud/crudcontroller'));

                        }else{
                            swal('Error.','','success');
                        }
                    }
                });

                

            

        });
    });
});
</script>
   <div class="form-group">
            <label for="title" class="col-md-2 text-right">Customer Name</label>
            <div class="col-md-4">
            <select name="uname" id="uname" value="" class="browser-default custom-select">
                <option selected>Select Customer</option>
                <?php 
                foreach($customer_name as $row)
                {
                    echo '<option required value="'.$row->cid.'">'.$row->customer_name.'</option>';
                }
                ?>
                
                </select>
            </div>
        <!-- <button class="btn btn-primary"  type="submit" style="float:right"  > Yes it's Me! </button> -->

        </div>
        <div class="container">
        <table class="table table-border table-responsive" id="head" >
        <thead>
        <tr>
        <td>#</td>
                <!-- <td>Order ID</td> -->
                <!-- <td>Customer Name</td> -->
                <!-- <td>Email</td> -->
                <!-- <td>Order Date</td> -->
                <!-- <td>#</td> -->
              
                <td>Item Id</td>
                <td>Qty.</td>
                <td>per unit price</td>
                <td>Total Amount</td>
                <!-- <td>Action</td> -->
            </tr>
        </thead>
        </table>
        <table class="table table-border table-responsive" id="data_table" >
        <tbody>
            <tr>
           
            <!-- <td>1</td> -->
            
                <!-- <td><?php echo $user->orderid;?></td>
                <td>zeeshan</td>
                <td>gmail</td>
                <td>488</td>
                <td>44</td>
                <td>4</td>
                <td>9800</td> -->
                <!-- <td> -->
                <!-- <a href="#" class="btn btn-info">Edit </a> -->
                <!-- <a href="#" class="btn btn-danger" onclick="return confirm('Do you really want to delete?')">Delete </a> -->

                <!-- </td> -->
            <!-- </tr> -->
            

        </tbody>
        </table>
</div>
      
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="title" class="col-md-2 text-right"></label>
            <div class="col-md-4"> -->
                <button style="float:right; margin-right:130px" type="submit" id="save" name="btnSave" class="btn btn-primary" vlaue="confirmorder" >Confirm Order</button>
            <!-- </div>
        </div> -->

    </form>
