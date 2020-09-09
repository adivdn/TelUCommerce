<?php

    Class Admin extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('Admin_model');
        }

        public function index(){
            if($this->session->userdata('logged_in') && $this->session->userdata('level') == 'admin'){
                $data['history'] = $this->Admin_model->dataPembelian();
                $data['dataItem'] = $this->Admin_model->bestItem();
                if($this->input->post('keyword',true)){
                    $keyword = $this->input->post('keyword', true);
    
                    $data['hasil'] = $this->Admin_model->cari($keyword);
    
                    $this->load->view('admin/cari',$data);
                }
                $this->load->view('admin/dashboard',$data);
            }
        }
        public function Barang(){
            if($this->input->post('keyword',true)){
                $keyword = $this->input->post('keyword', true);

                $data['hasil'] = $this->Admin_model->cari($keyword);

                $this->load->view('admin/cari',$data);
            }else{
                $this->load->view('admin/item');
            }
            
        }
        public function konfirmasi(){
            $data['history'] = $this->Admin_model->dataTransaksi();
            $data['action'] = $this->Admin_model->dataAction();
            $this->load->view('admin/confirmation',$data);
        }

        public function action($transaction_id,$status){
            if($status == 'accept'){
                $status = 'accept';
                $data = array(
                    'status'         => $status
                );
                $query = $this->Admin_model->validation($transaction_id,$data);
                if($this->db->affected_rows() > 0){
                    redirect('Admin/konfirmasi');
                }
            }else if($status == 'decline'){
                $status = 'decline';
                $data = array(
                    'status'         => $status
                );
                $query = $this->Admin_model->validation($transaction_id,$data);
                if($this->db->affected_rows() > 0){
                    redirect('Admin/konfirmasi');
                }
            }
        }

        
 
	    public function uploadImage()
	    {
		$config['upload_path']          = 'assets/uploadfile/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['max_size']             = 2048;
	    $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name'] 			= $_FILES['image']['name'];
        
        $this->load->library('upload', $config);
            if ( !$this->upload->do_upload('image')){
                echo '<script language="javascript">';
                echo 'alert("Gagal Insert Gambar")';
                echo '</script>';
                redirect('Admin/Barang');
                      
            }else{
                return $this->upload->data('file_name');
            }
        }
        

        public function addItem(){
        if(isset($_POST['add'])){
            if(!empty($_FILES['image']['name'])){
                $image = $this->uploadImage();
            }
            $dataItem = [ 'item_id'         => NULL,
                          'category'        => $this->input->post('category'),
                          'item_name'       => $this->input->post('item_name'),
                          'spesification'   => $this->input->post('spesification'),
                          'image'           => $image,
                          'price'           => $this->input->post('price'),
                          'stock'           => $this->input->post('stock')
                        ];
            
            $this->Admin_model->create($dataItem);
            if($this->db->affected_rows() > 0){
                echo '<script type="text/javascript">';
                echo 'alert("Berhasil Tambah Data")';
                echo '</script>';
                redirect('Admin');
            }else{
                echo '<script type="text/javascript">';
                echo 'alert("Gagal Tambah Data")';
                echo '</script>';
                redirect('Admin/Barang');
            }
              
        }else if(isset($_POST['cancel'])){
                echo '<script type="text/javascript">';
                echo 'alert("Salah tombol Data")';
                echo '</script>';
                redirect('Admin/Barang');
        }
    } 
        
        
        public function deleteItem($idItem,$status){
         if($status == 'delete'){
            $item = $this->Admin_model->getId($idItem)->row();

            if($item->image != NULL){
                $target_file = './assets/uploadfile/'.$item->image;
                unlink($target_file);
            }
            $del = $this->Admin_model->delete($idItem);
            if($this->db->affected_rows() > 0){
                redirect('Admin');
            
            }else{
                redirect('Admin');
            }
         } 
        }
        public function updateItem(){
        
          if(isset($_POST['update'])){

            $idItem = $this->input->post('id');
            if(!empty($_FILES['image']['name'])){
                $item = $this->Admin_model->getId($idItem)->row();
                $target_file = './assets/uploadfile/'.$item->image;
                unlink($target_file);
                $image = $this->uploadImage();
            }
            $dataItem = [ 'item_id'         => $this->input->post('id'),
                          'category'        => $this->input->post('category'),
                          'item_name'       => $this->input->post('item_name'),
                          'spesification'   => $this->input->post('spesification'),
                          'image'           => $image,
                          'price'           => $this->input->post('price'),
                          'stock'           => $this->input->post('stock')
                        ];
            
            $this->Admin_model->updateItem($idItem,$dataItem);
            if($this->db->affected_rows() > 0){
                redirect('Admin');
            }

          }
        }

        public function transactionHistory(){
            $data['title'] = 'Dashboard Admin';
            $data['history'] = $this->Admin_model->dataPembelian();
            $data['best'] = $this->Admin_model->bestItem();
        }
        public function search(){
            $keyword = $this->input->post('keyword', true);

            $data['hasil'] = $this->Admin_model->cari($keyword);

            $this->load->view('cari',$data);
        }
    

    }


?>