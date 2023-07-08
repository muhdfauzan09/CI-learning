<?php
    namespace App\Controllers;
    use App\Models\NameModel;


     class Name extends BaseController{

        public function getName(){
            $nameModel = model(NameModel::class);
            $data['name'] = $nameModel->getName();
            return view("name/name", $data);
        }

        public function addName(){
            return view("name/addName");
        }

        public function storeName(){
            helper(['form']);
            $rules = [
                'name' => 'required|min_length[3]',
                'age' => 'required|numeric|max_length[10]'
            ];

            if($this->validate($rules)){
             $nameModel = model(NameModel::class);
             $data = [
                'name' => $this->request->getVar('name'),
                'age' => $this->request->getVar('age'),
             ];

             $nameModel->save($data);
             return redirect('name/name');
            }
        }
     }
?>