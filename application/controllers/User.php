<?php

    Class User extends CI_Controller{
        public function __construct(){

            parent ::__construct();

            $this->load->model('User_model');
            

        }
        public function index(){
            if($this->session->userdata('logged_in') && $this->session->userdata('level') == 'admin'){
                redirect('admin');
            }else if($this->session->userdata('logged_in') && $this->session->userdata('level') == 'user'){
                $this->home();
            }else{
                $data['title'] = 'Tel-U Commerce | Laman Utama';
                $data['navbar'] = 'Tel-U Commerce';
                $data['awal'] = $this->User_model->gambarAwal()->result_array();
                $this->load->view('user/awal',$data);
            }
           
        }
        public function home(){
            if($this->session->userdata('logged_in') && $this->session->userdata('level') == 'user'){
                $user_id = $this->session->userdata('user_id');
                $data['diri'] = $this->User_model->getuser($user_id);
                $data['awal'] = $this->User_model->gambarAwal()->result_array();
                $data['cart'] = $this->cart->contents();
                if($this->input->post('keyword',true)){
                    $keyword = $this->input->post('keyword', true);
    
                    $data['barang'] = $this->User_model->cari($keyword);
    
                }
                $this->load->view('user/landing',$data);
            }else{
                $data['title'] = 'Tel-U Commerce | Laman Utama';
                $data['navbar'] = 'Tel-U Commerce';
                $data['awal'] = $this->User_model->gambarAwal()->result_array();
                $this->load->view('user/awal',$data);
            }
        }

        public function item(){
            if($this->session->userdata('logged_in') && $this->session->userdata('level') == 'user'){
             
                $user_id = $this->session->userdata('user_id');
                $data['diri'] = $this->User_model->getuser($user_id);
                $data['barang'] = $this->User_model->allitem();
                $data['cart'] = $this->cart->contents();
                $data['gambar'] = $this->User_model->gambarItem();
                if($this->input->post('keyword',true)){
                    $keyword = $this->input->post('keyword', true);
    
                    $data['barang'] = $this->User_model->cari($keyword);
    
                }
                $this->load->view('user/item',$data);
            }else{
                $data['title'] = 'Tel-U Commerce | Laman Utama';
                $data['navbar'] = 'Tel-U Commerce';
                $data['awal'] = $this->User_model->gambarAwal()->result_array();
                $this->load->view('user/awal',$data);
            }
        }

        public function itemComputer(){
            if($this->session->userdata('logged_in') && $this->session->userdata('level') == 'user'){
                $user_id = $this->session->userdata('user_id');
                $data['diri'] = $this->User_model->getuser($user_id);
                $data['barang'] = $this->User_model->computer();
                $data['cart'] = $this->cart->contents();
                $data['gambar'] = $this->User_model->gambarItem();
                if($this->input->post('keyword',true)){
                    $keyword = $this->input->post('keyword', true);
    
                    $data['barang'] = $this->User_model->cari($keyword);
    
                }
                $this->load->view('user/item',$data);
            }else{
                $data['title'] = 'Tel-U Commerce | Laman Utama';
                $data['navbar'] = 'Tel-U Commerce';
                $data['awal'] = $this->User_model->gambarAwal()->result_array();
                $this->load->view('user/awal',$data);
            }
        }
        public function itemMusic(){
            if($this->session->userdata('logged_in') && $this->session->userdata('level') == 'user'){
                $user_id = $this->session->userdata('user_id');
                $data['diri'] = $this->User_model->getuser($user_id);
                $data['cart'] = $this->cart->contents();
                $data['barang'] = $this->User_model->music();
                $data['gambar'] = $this->User_model->gambarItem();
                if($this->input->post('keyword',true)){
                    $keyword = $this->input->post('keyword', true);
    
                    $data['barang'] = $this->User_model->cari($keyword);
    
                }
                $this->load->view('user/item',$data);
            }else{
                $data['title'] = 'Tel-U Commerce | Laman Utama';
                $data['navbar'] = 'Tel-U Commerce';
                $data['awal'] = $this->User_model->gambarAwal()->result_array();
                $this->load->view('user/awal',$data);
            }
        }
        public function itemPhotography(){
            if($this->session->userdata('logged_in') && $this->session->userdata('level') == 'user'){
                $user_id = $this->session->userdata('user_id');
                $data['diri'] = $this->User_model->getuser($user_id);
                $data['cart'] = $this->cart->contents();
                $data['barang'] = $this->User_model->photo();
                $data['gambar'] = $this->User_model->gambarItem();
                if($this->input->post('keyword',true)){
                    $keyword = $this->input->post('keyword', true);
    
                    $data['barang'] = $this->User_model->cari($keyword);
    
                }
                $this->load->view('user/item',$data);
            }else{
                $data['title'] = 'Tel-U Commerce | Laman Utama';
                $data['navbar'] = 'Tel-U Commerce';
                $data['awal'] = $this->User_model->gambarAwal()->result_array();
                $this->load->view('user/awal',$data);
            }
        }
        public function itemGadget(){
            if($this->session->userdata('logged_in') && $this->session->userdata('level') == 'user'){
                $user_id = $this->session->userdata('user_id');
                $data['diri'] = $this->User_model->getuser($user_id);
                $data['cart'] = $this->cart->contents();
                $data['barang'] = $this->User_model->gadget();
                $data['gambar'] = $this->User_model->gambarItem();
                if($this->input->post('keyword',true)){
                    $keyword = $this->input->post('keyword', true);
    
                    $data['barang'] = $this->User_model->cari($keyword);
    
                }
                $this->load->view('user/item',$data);
            }else{
                $data['title'] = 'Tel-U Commerce | Laman Utama';
                $data['navbar'] = 'Tel-U Commerce';
                $data['awal'] = $this->User_model->gambarAwal()->result_array();
                $this->load->view('user/awal',$data);
            }
        }

        
       
    

        
        
        public function Lupa(){
            
        }
        public function prosesRegister(){
            
            $this->form_validation->set_rules('nama','Full Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('memes','Favorite Meme','required');
            $this->form_validation->set_rules('password','Password','required|min_length[6]');
            $this->form_validation->set_rules('konfirmasi_password','Konfirmasi Password','required|matches[password]');

            if($this->form_validation->run() == FALSE){
                echo '<script type="text/javascript">';
                echo 'alert("Gagal Register")';
                echo '</script>';
                redirect('User/index');
                
                
            }else{
                $password = $this->input->post('password');
                $md5 = md5($password);
                $dataRegister = [ 'user_id' => NULL,
                                  'level' => 'user',
                                  'nama'  => $this->input->post('nama'),
                                  'email' => $this->input->post('email'),
                                  'password' => $md5,
                                  'memes'   => $this->input->post('memes'),
                                  'tgl_lahir' => NULL,
                                  'jenis_kelamin' => NULL,
                                  'alamat'  => NULL,
                                  'no_hp'   => NULL,
                                  'image'   => 'default.jpg'
                                ];

                $this->User_model->create($dataRegister);

                $dataPesan = ['alert' => 'alert-success',
                              'pesan' => 'Akun berhasil dibuat'
                             ];
                
                $this->session->set_flashdata($dataPesan);
                
                echo ("<script type='text/javascript'>
                        alert('Berhasil Register');
                        </script>");
                redirect('User/index');
                               
            }

        }

        public function prosesLogin(){
            $this->form_validation->set_rules('email','Email Address','required|valid_email');
            $this->form_validation->set_rules('password','Password','required|min_length[6]');

            if($this->form_validation->run() == FALSE){
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Gagal Login');
                </script>");
                redirect('User');
                
            }else{
            
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $user = $this->User_model->login($email,$password)->row_array();
                if($user > 0){
                    $dataLogin = array('user_id'    => $user['user_id'],
                                       'level'      => $user['level'],
                                       'nama'       => $user['nama'],
                                       'logged_in'  => TRUE
                                      );
                    $this->session->set_userdata($dataLogin);

                    if($this->session->userdata('level') == 'admin'){
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Berhasil Login');
                        </script>");
                        redirect('Admin');
                    }else{
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Berhasil Login');
                        </script>");
                        redirect('User/home');
                    }
                
                }else{
                    $dataPesan = ['alert' => 'alert-danger',
                                  'pesan' => 'Email atau Password Anda salah'
                                ];
                    $this->session->set_flashdata($dataPesan);
                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Email atau Password salah');
                    </script>");
                    redirect('User/index');
                
                }
           }
            
        }
        public function profile(){
            $user_id = $this->session->userdata('user_id');
            $data['diri'] = $this->User_model->getuser($user_id);
            $data['transaction'] = $this->User_model->transactionLog($user_id);
            $data['cart'] = $this->cart->contents();
            $this->load->view('user/profile',$data);

        }
        public function Reset(){
            $user_id = $this->session->userdata('user_id');
            $data['diri'] = $this->User_model->getuser($user_id);
            $data['transaction'] = $this->User_model->transactionLog($user_id);
            $data['cart'] = $this->cart->contents();
            $this->load->view('user/reset',$data);

        }
        public function resetPassword(){
            
            $this->form_validation->set_rules('password','Old Password','required');
            $this->form_validation->set_rules('re_password','New Password','required');
            $this->form_validation->set_rules('co_password','Confirm Password','required|matches[re_password]');
            if($this->form_validation->run() == FALSE){
                $this->Reset();
            }else{
                $password = $this->input->post('password');
                $user_id = $this->session->userdata('user_id');
                $data = $this->User_model->cekpassword($user_id,$password)->row_array();
                if($data['password'] == md5($password)){
                    $re_password = $this->input->post('re_password');
                    $query = $this->User_model->update_password($user_id,$re_password);
                    if($this->db->affected_rows() > 0){
                        $this->profile();
                    }
                }else{
                    $data['error'] = 'Old Password does not match';
                    $user_id = $this->session->userdata('user_id');
                    $data['diri'] = $this->User_model->getuser($user_id);
                    $data['transaction'] = $this->User_model->transactionLog($user_id);
                    $data['cart'] = $this->cart->contents();
                    $this->load->view('user/reset',$data);

                }
            }

            
        }
        public function editfoto(){
            $config['upload_path']          = './assets/uploadfile/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 2048;
            $config['max_height']           = 2048;
            $config['file_name'] 			= $_FILES['image']['name'];
            
            $this->load->library('upload', $config);
                if ( !$this->upload->do_upload('image')){
                    $data['error_image'] = $this->upload->display_errors();
                    $user_id = $this->session->userdata('user_id');
                    $data['diri'] = $this->User_model->getuser($user_id);
                    $data['transaction'] = $this->User_model->transactionLog($user_id);
                    $data['cart'] = $this->cart->contents();
                    $this->load->view('user/profile',$data);
                        
                }else{

                    $gambar =  $this->upload->data('file_name');
                    $user_id = $this->session->userdata('user_id');
                    $item = $this->User_model->detailitem($user_id)->row();
                    if($item->gambar != NULL){
                        $target_file = './assets/uploadfile/'.$item->gambar;
                        unlink($target_file);
                    }
                    $data = array(
                        'user_id'   => $user_id,
                        'image'     => $gambar
                    );
                    $query = $this->User_model->ubahfoto($user_id,$data);
                    if($this->db->affected_rows() > 0 ){
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Berhasil edit profile');
                        </script>");
                        redirect('User/profile');
                    }

                }

            
        }

        public function editprofile(){
            
                $this->form_validation->set_rules('email','Email Address','required|valid_email');
                $this->form_validation->set_rules('name','Nama','required');
                $this->form_validation->set_rules('birth','Tanggal Lahir','required');
                $this->form_validation->set_rules('gender','Jenis Kelamin','required');
                $this->form_validation->set_rules('address','Address','required');
                $this->form_validation->set_rules('no_hp','No Hp','required');

                if($this->form_validation->run() == FALSE){
                    
                    redirect('User/profile');
                }else{
                    $data = array(
                        'level'         => 'user',
                        'nama'          => $this->input->post('name'),
                        'email'         => $this->input->post('email'),
                        'password'      => $this->input->post('password'),
                        'memes'         => $this->input->post('memes'),
                        'tgl_lahir'     => $this->input->post('birth'),
                        'jenis_kelamin' => $this->input->post('gender'),
                        'alamat'        => $this->input->post('address'),
                        'no_hp'         => $this->input->post('no_hp')
                    );
                    $user_id = $this->session->userdata('user_id');
                    $this->User_model->editdata($user_id,$data);
                    if($this->db->affected_rows() > 0 ){
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Berhasil edit profile');
                        </script>");
                        redirect('User/profile');
                    }
                }
            
        }
    
        
        public function lupaPassword(){
            $email = $this->input->post('email');
            $memes = $this->input->post('memes');

            $query = $this->User_model->lupa($email,$memes)->row_array();
            if($query > 0){
                $password = $this->input->post('password');
                
                $this->User_model->update_Password($query,$password);

                
                redirect('User');
               
            }

        }

        public function logout(){
            $dataLogin = ['user_id','level','nama','logged_in'];

            $this->session->unset_userdata($dataLogin);
             echo ("<script LANGUAGE='JavaScript'>
                window.alert('Berhasil Logout');
                </script>");
            
            redirect('User');
        }


        

        public function addCart($item_id){
          
                $item = $this->User_model->getId($item_id);

                $data = array(
                    'id' => $item['item_id'],
                    'qty' => 1,
                    'price' => $item['price'],
                    'name' => $item['item_name']
                );

                $this->cart->insert($data);
                redirect('User/item');

            
        

        }
        public function deleteCart($item_id){
            if($item_id === "all"){

                $this->cart->destroy();
                redirect('User/item');
            }else{
                $data = array(
                    'rowid'    => $item_id,
                    'qty'   => 0
                );
                $this->cart->update($data);
                redirect('User/item');
            }
        }
        public function updateCart(){
           $cart_info = $_POST['cart'];
            foreach($cart_info as $cart){

                $id = $cart['id'];
                $qty = $cart['qty'];
                $data = array(
                    'id'    => $id,
                    'qty'   => $qty
                );
                $this->cart->update($cart);
            }

           redirect('User/item');
        }
        public function updateCartCheckout(){
            $cart_info = $_POST['cart'];
            foreach($cart_info as $cart){

                $id = $cart['id'];
                $qty = $cart['qty'];
                $data = array(
                    'id'    => $id,
                    'qty'   => $qty
                );
                $this->cart->update($cart);
            }

           redirect('User/showCart');
        }
        public function deleteCartCheckout($item_id){
            if($item_id === "all"){

                $this->cart->destroy();
                redirect('User/item');
            }else{
                $data = array(
                    'rowid'    => $item_id,
                    'qty'   => 0
                );
                $this->cart->update($data);
                redirect('User/showCart');
            }

        }
        public function showCart(){
            if($this->session->userdata('logged_in') && $this->session->userdata('level') == 'user'){
                $data['cart'] = $this->cart->contents();
                $user_id = $this->session->userdata('user_id');
                $data['diri'] = $this->User_model->getuser($user_id);
                $this->load->view('user/checkout',$data);
            }else{
                $data['title'] = 'Tel-U Commerce | Laman Utama';
                $data['navbar'] = 'Tel-U Commerce';
                $data['awal'] = $this->User_model->gambarAwal()->result_array();
                $this->load->view('user/awal',$data);
            }
        }
       
        public function checkout(){
            $barang = $this->cart->contents();
            $bayar = $this->input->post('payment');
            $alamat = $this->input->post('alamat');
            $kode = $this->input->post('postcode');
            $nama = $this->input->post('receiver');
            $phone = $this->input->post('phone');

            
                $data = [ 'id'                  => NULL,
                          'user_id'             => $this->session->userdata('user_id'),
                          'tanggal_pemesanan'   => date('Y-m-d'),
                          'nama_penerima'       => $nama,
                          'alamat'              => $alamat,
                          'nomor_penerima'      => $phone,
                          'kodepos'             => $kode,
                          'harga'               => $this->cart->total(),
                          'status'              => '0'
                        ];
                $id = $this->User_model->insertTransaction($data);
                
            foreach ($barang as $value){
                $item = [ 'id'             => $id,
                          'item_id'        => $value['id'],
                          'quantity'       => $value['qty']
                        ];
                $query = $this->User_model->insertDetail($item);

            }
            $this->cart->destroy();
            redirect('User/home');
        }
        
    }



?>