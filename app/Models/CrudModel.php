<?php 
    namespace App\Models;
    use CodeIgniter\Model;
    class CrudModel extends Model{
        public function getPeople(){
            // Statement with codeIgniter
            $data = $this->db->query("SELECT * FROM personas");
            return $data->getResult();
        }

        public function savePeople($data){
            $informationPeople = $this->db->table('personas');
            $informationPeople->insert($data);

            return $this->db->insertID();
        }
        public function getId($id){
            $informationPeople = $this->db->table('personas');
            $informationPeople->where($id);
            return $informationPeople->get()->getResultArray();
        }
        public function updateData($data, $id){
            $informationPeople = $this->db->table('personas');
            $informationPeople->set($data);
            $informationPeople->where('idpeople',$id);
            return $informationPeople->update();
        }
        public function deletePeople($data){
            $informationPeople = $this->db->table('personas');
            $informationPeople->where($data);
            return $informationPeople->delete();
        }
    }
?>