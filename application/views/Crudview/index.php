    </div>
</div>
<div class="container"> 
    <h2>Crud Operations</h2>
    <?php 
        if($this->session->flashdata('success_msg')){
    ?>
        <div class="alert alert-success">
            <?php echo $this->session->flasdata('success_msg');?>
        </div>
        <?php 
                }
        ?>
    <a href="<?php echo base_url('Crud/add'); ?>" class="btn btn-primary">Add New </a>

    <table class="table table-border table-responsive">
        <thead>
        <tr>
        <td>#</td>
                <!-- <td>Order ID</td> -->
                <td>Customer Name</td>
                <td>Email</td>
                <td>Order Date</td>
                <td>Item Name</td>
                <td>Qty.</td>
                <td>Total Amount</td>
                <td>Action</td>
            </tr>
        </thead>
        <?php 
        if($users){
            foreach($users as $user){
        ?>
        <tbody>
            <tr>
            <td><?php echo $user->id;?></td>
                <!-- <td><?php echo $user->orderid;?></td> -->
                <td><?php echo $user->customer_name;?></td>
                <td><?php echo $user->customer_email;?></td>
                <td><?php echo $user->orderDate;?></td>
                <td><?php echo $user->item_name;?></td>
                <td><?php echo $user->qty;?></td>
                <td><?php echo $user->total_amount;?></td>
                <td>
                <a href="<?php echo base_url('Crud/edit/'.$user->id); ?>" class="btn btn-info">Edit </a>
                <a href="<?php echo base_url('Crud/delete/'.$user->id); ?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?')">Delete </a>

                </td>
            </tr>
            <?php 
                        }
                    }
            ?>

        </tbody>
</table>
</div>

    
</body>
</html>