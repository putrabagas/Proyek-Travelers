<?php
    class Post_model extends CI_Model{
        public function tambahPost(){
            $data = array(
                'judul'=> $this->input->post('judul'),
                'isi' => $this->input->post('isi')
            );
            $this->db->insert('artikel',$data);
        }
        public function getAllPost(){
            return $this->db
            ->select("id_artikel,judul,SUBSTRING(isi,1,150)as isi")
            ->get('artikel')
            ->result_array();
        }
        public function getPosts($limit, $start, $keyword = null){
            return $this->db
            ->select("id_artikel,judul,SUBSTRING(isi,1,150) as isi")
            ->like('judul', $keyword)
            ->order_by('id_artikel', 'asc')
            ->get('artikel', $limit, $start)
            ->result_array();
        }
        public function countPosts($keyword = null){
            return $this->db
            ->like('judul', $keyword)
            ->from('artikel')
            ->count_all_results();
        }
        public function getPostById($id){
            return $this->db
            ->where('id_artikel', $id)
            ->get('artikel')
            ->result_array();
        }
        public function updatePost($id){
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi')
            );
            $this->db
            ->where('id_artikel',$id)
            ->update('artikel',$data);
        }
        public function hapusPost($id){
            $this->db
            ->where('id_artikel', $id)
            ->delete('artikel');
        }
    }