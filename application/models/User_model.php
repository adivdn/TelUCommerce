<?php
    Class User_model extends CI_Model{

        public function create($data){
            $this->db->insert('user', $data);
        }

        public function login($email,$password){

            return $this->db->get_where('user',array('email' => $email,'password' => md5($password)));
            
        }
        public function gambarAwal(){
            return $this->db->get('item',3);
        }
        public function gambarItem(){
            $this->db->order_by('rand()');
            $this->db->limit(3);
            $query = $this->db->get('item');
            return $query;
        }
       

        public function lupa($email,$memes){
            return $this->db->get_where('user',array('email' => $email, 'memes' => $memes));
        }
        
        public function update_password($user_id,$password){
            $this->db->where('user_id',$user_id);
            $this->db->update('user', array('password' => md5($password)));
        }

        public function insertTransaction($data){
            $this->db->insert('transaction_detail',$data);
            $id = $this->db->insert_id();
            return $id;
        }
        public function allitem(){
            $query = $this->db->get('item');
            return $query->result_array();
        }
        public function insertDetail($item)
        {
            $this->db->insert('transaction',$item);
        }
        public function getId($item_id){
            $query = $this->db->get_where('item',array('item_id' => $item_id));
            return $query->row_array();
        }
        public function getuser($user_id){
            $query = $this->db->get_where('user',array('user_id' => $user_id));
            return $query->result_array();
        }
        public function editdata($user_id,$data){
            $this->db->where('user_id',$user_id);
            $this->db->update('user',$data);
        }
        public function ubahfoto($user_id,$data){
            $this->db->where('user_id',$user_id);
            $this->db->update('user',$data);
        }
        
        public function transactionLog($user_id){
            $query = $this->db->query("SELECT item_name,price,quantity FROM user 
            JOIN transaction_detail ON transaction_detail.user_id = user.user_id 
            JOIN transaction ON transaction.id = transaction_detail.id 
            JOIN item ON item.item_id = transaction.item_id
            WHERE user.user_id = '$user_id';");
            
           
            
            return $query;
        }
        public function cekpassword($user_id,$password){
            return $this->db->get_where('user',array('user_id' => $user_id,'password' => md5($password)));
            
             
        }
        public function computer(){
            $this->db->like('category','Computer');
            $this->db->or_like('category','Komputer');
            $this->db->or_like('category','komputer');
            $this->db->or_like('category','computer');
            $query =  $this->db->get('item');
            return $query->result_array();
            
        }
        public function music(){
            $this->db->like('category','Music');
            $this->db->or_like('category','Musik');
            $this->db->or_like('category','musik');
            $query =  $this->db->get('item');
            return $query->result_array();
            

        }
        public function photo(){
            $this->db->like('category','Photography');
            $this->db->or_like('category','Fotografi');
            $this->db->or_like('category','fotografi');
            $this->db->or_like('category','photography');
            $query =  $this->db->get('item');
            return $query->result_array();
            

        }
        public function gadget(){
            $this->db->like('category','Gadget');
            $this->db->or_like('category','gadget');
            $this->db->or_like('category','Accessory');
            $this->db->or_like('category','Aksesoris');
            $this->db->or_like('category','aksesoris');
            $this->db->or_like('category','accessory');
            $query =  $this->db->get('item');
            return $query->result_array();
            

        }
        public function detailitem($user_id){
            return $this->db->get_where('user',array('user_id' => $user_id));
        }
        public function cari($keyword){
    
            $this->db->like('item_name',$keyword);
            $this->db->or_like('category',$keyword);
            $query =  $this->db->get('item');
            return $query->result_array();
            }
    }



?>