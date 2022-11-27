<?php

namespace App\Controllers;
use App\Models\CrudModel;
class Crud extends BaseController
{
    public function index()
    {
        // Add Model, For access to data
        $model = new CrudModel();
        $dataM = $model->getPeople();
        $message = session('message');
        $data = [
            "data" => $dataM,
            "message" => $message
        ];
        return view('list', $data);
    }
    public function create(){
        print_r($_POST);
        $data = [
            "numberDocument"=>$_POST['numberdocument'],
            "name"=> $_POST['name'],
            "lastname"=> $_POST['lastname'],
            "age"=>$_POST['age'],
            "sex"=>$_POST['sex']
        ];

        $model = new CrudModel();
        $response= $model->savePeople($data);
        if($response > 0){
            return redirect()->to(base_url().'/')->with('message','saveSuccessfully');
        }else{
            return redirect()->to(base_url().'/')->with('message','saveError');
        }
    }
    public function update(){
        $id = $_POST['idPeople'];
        $data = [
            "numberDocument"=>$_POST['numberdocument'],
            "name"=> $_POST['name'],
            "lastname"=> $_POST['lastname'],
            "age"=>$_POST['age'],
            "sex"=>$_POST['sex']
        ];
        $model = new CrudModel();
        $response = $model->updateData($data, $id);
        if($response){
            // redirect with codeIgniter
            return redirect()->to(base_url().'/')->with('message','updateSuccessfully');
        }else{
            return redirect()->to(base_url().'/')->with('message','updateError');
        }
    }
    public function findId($id){
        $data= [
            "idpeople" => $id
        ];
        $model = new CrudModel();
        $response = $model->getId($data);

        $dataForView = ["data"=>$response];
        return view('update', $dataForView);
    }
    public function delete($id){
        $model = new CrudModel();
        $data = ["idpeople"=>$id];
        $response = $model->deletePeople($data);
        if($response){
            // redirect with codeIgniter
            return redirect()->to(base_url().'/')->with('message','deleteSuccessfully');
        }else{
            return redirect()->to(base_url().'/')->with('message','deleteError');
        }
    }
}
