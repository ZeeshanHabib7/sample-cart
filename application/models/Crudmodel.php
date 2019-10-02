<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crudmodel extends CI_Model{
    public function getData(){
        $q=$this->db->query("SELECT  c.customer_name,c.customer_email,orderdetail.id,o.orderDate,items.item_name,orderdetail.qty,orderdetail.total_amount FROM customersmaster c INNER JOIN ordermaster o on c.cid = o.cid INNER JOIN orderdetail ON o.oid = orderdetail.orderid INNER JOIN items ON orderdetail.itemid = items.id  ");
        // $q = $this->db->get('users');
        if($q->num_rows() > 0){
            return $q->result();
        } else{
            return FALSE;
        }
    }

    public function save($relative_list,$ordermasters){
        // insert customer id into ordermaster
       $this->db->insert('ordermaster',$ordermasters);
        // catch lastinserted id of ordermaster
       $ordermaster_id =$this->db->insert_id();
        
        //pass all the data using for loop to array
        for($x = 0; $x < count($relative_list); $x++){
            $data[] = array(
                'orderid' =>  $ordermaster_id,                
                // 'no' => $relative_list[$x]['no'], 
                'itemid' => $relative_list[$x]['itemid'],
                'qty' => $relative_list[$x]['qty'],
                'item_price' => $relative_list[$x]['item_price'],
                'total_amount' => $relative_list[$x]['total_amount'],
            );
        }
        try {
            //insert into db
            for($x = 0; $x<count($relative_list); $x++){
                $this->db->insert('orderdetail',$data[$x]);
            }
            return 'success';
        }catch(Exception $e){
            return 'failed';
        }
    }
    public function fetch_items(){
        $this->db->order_by("item_name","ASC");
        $q = $this->db->get('items');
        return $q->result();
    }
    public function fetch_emails(){
        $this->db->order_by("customer_name","ASC");
        $q = $this->db->get('customersmaster');
        return $q->result();
    }

    public function cart_submit($ordermasters,$orderdetails,$items){

       $this->db->insert(items,$items);
       $items_id =$this->db->insert_id();
        
       $this->db->insert(ordermaster,$ordermasters);
    //    $orderm= $this->db->insert_id();
    //    echo $order-m;     
         $ordermaster_id =$this->db->insert_id();

         $orderdetails['orderid']=$ordermaster_id;
         $orderdetails['itemid']=$items_id;
         $this->db->insert(orderdetail,$orderdetails);
         return $this->db->insert_id();
    


    }

    public function addd_submit($ordermasters){ 
        $this->db->insert(ordermaster,$ordermasters);
    //    $orderm= $this->db->insert_id();
    //    echo $order-m;     
         $ordermaster_id =$this->db->insert_id();
        //  print_r($ordermaster_id);
        //     die();

        //  $orderdetails['orderid']=$ordermaster_id;
    
        //  $this->db->insert(orderdetail,$orderdetails);
        //  return $this->db->insert_id();
    


    }

    public function submit($ordermasters,$orderdetails){

       
        $this->db->insert(ordermaster,$ordermasters);
    //    $orderm= $this->db->insert_id();
    //    echo $order-m;     
         $ordermaster_id =$this->db->insert_id();

         $orderdetails['orderid']=$ordermaster_id;
    
         $this->db->insert(orderdetail,$orderdetails);
         return $this->db->insert_id();
    


    }
//  public function orderdetails($orderdetails)
// {
//     # code...
    
//     $orderdetails['orderid']=30;
    
//     $this->db->insert(orderdetail,$orderdetails);
//     return $this->db->insert_id();

// }
    public function getDatabyId($id){
        $this->db->where('id',$id);
        $q = $this->db->get('orderdetail');
        if($q->num_rows()>0){
            return $q->row();

        }else{
            return FALSE;
        }
        
        // $this->db->where('oid',$id);
        // $q = $this->db->get('ordermaster');
        // if($q->num_rows()>0){
        //     return $q->row();

        // }else{
        //     return FALSE;
        // }

        // $this->db->where('cid',$id);
        // $q = $this->db->get('customermaster');
        // if($q->num_rows()>0){
        //     return $q->row();

        // }else{
        //     return FALSE;
        // }

    }

    public function update(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'qty'=>$this->input->post('qty'),
            'itemid'=>$this->input->post('items'),
            'item_price'=>$this->input->post('price'),
            'total_amount'=>$this->input->post('totalamount')
            // 'contactno'=>$this->input->post('cno')
        );
        $this->db->where('id', $id);
        $this->db->update('orderdetail',$field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows()> 0){
            return TRUE;
        } else{
            return FALSE;
        }
    }

    public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('orderdetail');
		if($this->db->affected_rows() > 0){
			return True;
		}else{
			return FALSE;
		}
	}
}