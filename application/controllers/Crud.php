<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crudmodel');
        
    }
    public function crudController(){
     
     
        $data['users']=$this->Crudmodel->getData();
        // print_r($data);
        $this->load->view('layouts/header');
        $this->load->view('Crudview/index',$data);
        $this->load->view('layouts/footer');
       
    }
    public function cart(){
        $this->load->view('layouts/header');
        $data['customer_name'] = $this->Crudmodel->fetch_emails();
        $this->load->view('Crudview/cart',$data);
        $this->load->view('layouts/footer');
     
    }
    public function cart_submit(){
        // $data['users']=$this->Crudmodel->getData();
        // $data['user'] = $this->Crudmodel->getDatabyId($id);
        // $data['itemss'] = $this->Crudmodel->fetch_items();

        $customermaster_data = array();
        $ordermaster_data = array();
        $item_data = array();
        $orderdeatail_data = array();

        $ordermaster_data['cid'] = $this->input->post('uname');
        // $customermaster_data['customer_email'] = $this->input->post('email');

        //item_data
        $item_data['item_name'] = $this->input->post('items');
        $orderdeatail_data['qty'] = $this->input->post('qty');
        $orderdeatail_data['item_price'] = $this->input->post('price');
        $orderdeatail_data['total_amount'] = $this->input->post('totalamount');

        //order maseter data 
        // $ordermaster_data['cid'] = $this->input->post('');

        $result=$this->Crudmodel->submit($ordermaster_data,$orderdeatail_data,$item_data);
        // $result1=$this->Crudmodel->orderdetails($orderdeatail_data);
        
            if($result){
                $this->session->flashdata('success_msg','Record Added Successfully');
            }else{
                $this->session->flashdata('success_msg','Record Failed');

            }

        redirect(base_url('crud/crudcontroller'));

    //     if($result1){
    //         $this->session->flashdata('success_msg','Record Added Successfully');
    //     }else{
    //         $this->session->flashdata('success_msg','Record Failed');

    //     }

    // redirect(base_url('crud/crudcontroller'));


    }
    public function save(){
        // $ordermasters = array();
        $ordermasters['cid'] = $this->input->post('uname');
        // $relative_list['cid'] = $this->input->post('uname');

      //  var_dump($this->input->post('uname'));

        //$ordermasters;
        //die();
        $relative_list =$this->input->post('data_table');
        
        
        $this->load->model('crudmodel');
        $status = $this->crudmodel->save($relative_list,$ordermasters);
        // $result=$this->Crudmodel->submit($ordermaster_data,$orderdeatail_data);
        
        $this->output->set_content_type('application/json');
        echo json_encode(array('status'=> $status));


    }

    
    public function add(){
     
        $this->load->view('layouts/header');
        $data['itemss'] = $this->Crudmodel->fetch_items();
        $data['users']=$this->Crudmodel->getData();

        $data['customer_name'] = $this->Crudmodel->fetch_emails();
        // $this->load->view('Crudview/add',$dat);
        $this->load->view('Crudview/addd',$data);
        $this->load->view('layouts/footer');
    }

    public function addd_submit(){
        // $data['users']=$this->Crudmodel->getData();
        // $data['user'] = $this->Crudmodel->getDatabyId($id);
        // $data['itemss'] = $this->Crudmodel->fetch_items();

        // $customermaster_data = array();
        $ordermaster_data = array();
        $item_data = array();
        $orderdeatail_data = array();

        $ordermaster_data['cid'] = $this->input->post('uname');
        // $customermaster_data['customer_email'] = $this->input->post('email');

        //item_data
        // $orderdeatail_data['itemid'] = $this->input->post('items');
        // $orderdeatail_data['qty'] = $this->input->post('qty');
        // $orderdeatail_data['item_price'] = $this->input->post('price');
        // $orderdeatail_data['total_amount'] = $this->input->post('totalamount');

        //order maseter data 
        // $ordermaster_data['cid'] = $this->input->post('');

        $relative_list =$this->input->post('data_table');
       
        $this->load->model('crudmodel');
        $status = $this->crudmodel->save($relative_list,$ordermaster_data);
        // $result=$this->Crudmodel->submit($ordermaster_data,$orderdeatail_data);
       
        $this->output->set_content_type('application/json');
        echo json_encode(array('status'=> $status));
        $result=$this->Crudmodel->submit($ordermaster_data);
        // $result1=$this->Crudmodel->orderdetails($orderdeatail_data);
        
            if($result){
                $this->session->flashdata('success_msg','Record Added Successfully');
            }else{
                $this->session->flashdata('success_msg','Record Failed');

            }

        redirect(base_url('crud/add'));

    //     if($result1){
    //         $this->session->flashdata('success_msg','Record Added Successfully');
    //     }else{
    //         $this->session->flashdata('success_msg','Record Failed');

    //     }

    // redirect(base_url('crud/crudcontroller'));


    }

    public function submit(){
        // $data['users']=$this->Crudmodel->getData();
        // $data['user'] = $this->Crudmodel->getDatabyId($id);
        // $data['itemss'] = $this->Crudmodel->fetch_items();

        // $customermaster_data = array();
        $ordermaster_data = array();
        $item_data = array();
        $orderdeatail_data = array();

        $ordermaster_data['cid'] = $this->input->post('uname');
        // $customermaster_data['customer_email'] = $this->input->post('email');

        //item_data
        $orderdeatail_data['itemid'] = $this->input->post('items');
        $orderdeatail_data['qty'] = $this->input->post('qty');
        $orderdeatail_data['item_price'] = $this->input->post('price');
        $orderdeatail_data['total_amount'] = $this->input->post('totalamount');

        //order maseter data 
        // $ordermaster_data['cid'] = $this->input->post('');

        $result=$this->Crudmodel->submit($ordermaster_data,$orderdeatail_data);
        // $result1=$this->Crudmodel->orderdetails($orderdeatail_data);
        
            if($result){
                $this->session->flashdata('success_msg','Record Added Successfully');
            }else{
                $this->session->flashdata('success_msg','Record Failed');

            }

        redirect(base_url('crud/crudcontroller'));

    //     if($result1){
    //         $this->session->flashdata('success_msg','Record Added Successfully');
    //     }else{
    //         $this->session->flashdata('success_msg','Record Failed');

    //     }

    // redirect(base_url('crud/crudcontroller'));


    }

    public function edit($id){
        $data['user'] = $this->Crudmodel->getDatabyId($id);
        $data['itemss'] = $this->Crudmodel->fetch_items();
        // $this->load->view('Crudview/add',$data);

        $this->load->view('layouts/header');
        $this->load->view('Crudview/edit',$data);
        $this->load->view('layouts/footer');
    }
    
    public function update(){
      $result = $this->Crudmodel->update();
      if($result){
        $this->session->flashdata('success_msg','Record updated Successfully');
    }else{
        $this->session->flashdata('success_msg','Record Failed to update');
    }    
    redirect(base_url('crud/crudcontroller'));
    }

    public function delete($id){
        $result = $this->Crudmodel->delete($id);
		if($result){
			$this->session->flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('crud/crudcontroller'));
	}

}
?>