<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class Name extends Model {
        protected $table = "name";
        protected $primaryKey = "id";

        public function getName($name = false){
            if($name === false){
                return $this->findAll();
            }
        }
    }
?>