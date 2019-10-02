<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Customer Name</title>
</head>
<body>
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
        <button class="btn btn-primary"  type="submit" style="float:right"  > Yes it's Me! </button>

        </div>
</body>
</html>