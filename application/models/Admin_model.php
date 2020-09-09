<?php
    class Admin_model extends CI_Model{
        

        public function create($dataItem){
            $this->db->insert('item',$dataItem);
        }

        public function delete($item_id){
            $this->db->where('item_id',$item_id);
            $this->db->delete('item');
        }
        public function getId($idItem){
            return $this->db->get_where('item',array('item_id' => $idItem));
        }
        public function getAllItem(){
            return $this->db->get('item');
        }
        public function updateItem($idItem,$data){
            $this->db->where('item_id',$idItem);
            $this->db->update('item',$data);
        }
        
        public function dataAction(){
            $query = $this->db->query("SELECT tanggal_pemesanan,nama,harga,transaction_detail.id,status FROM user 
            JOIN transaction_detail ON transaction_detail.user_id = user.user_id;");
            
            return $query;
        }
        public function dataPembelian(){
            $query = $this->db->query("SELECT tanggal_pemesanan,item_name,nama,price FROM user 
            JOIN transaction_detail ON transaction_detail.user_id = user.user_id 
            JOIN transaction ON transaction.id = transaction_detail.id 
            JOIN item ON item.item_id = transaction.item_id;");
            
            return $query;
            
        }
        

        public function dataTransaksi(){
            $query = $this->db->query("SELECT tanggal_pemesanan,transaction_detail.id,nama,status FROM user 
            JOIN transaction_detail ON transaction_detail.user_id = user.user_id;");
            
            return $query;
            
        }
        public function bestItem(){
            $query = $this->db->query("SELECT item_name,category,image,quantity FROM transaction JOIN
            item ON item.item_id = transaction.item_id WHERE quantity > (SELECT AVG(quantity) FROM transaction);");
            
            return $query;
        }
        public function cari($keyword){
    
		$this->db->like('item_name',$keyword);
		$query =  $this->db->get('item');
        return $query->result_array();
        }
        public function validation($transaction_id,$data){
            $this->db->where('id',$transaction_id);
            $this->db->update('transaction_detail',$data);
        }
    }
?>