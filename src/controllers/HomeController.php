<?php
namespace src\controllers;

use \core\Controller;
use\src\ models\usuario;


class HomeController extends Controller {

    public function index(){
        $divida = Usuario::select()->execute();

        $this->render('home', [
            'divida'=>$divida
        ]);
    }

    public function new(){
        $this->render('add');
    }

    public function addAction(){
        $divida=$_POST['divida'];
        $valor = $_POST['valor'];
        $data = $_POST['vencimento'];

        $usuario = Usuario::insert([
                'nome'=>$divida,
                'valor'=>$valor,
                'vencimento'=> $data
            ])->execute();
                
            $this->redirect('/');
            exit;    

    }

    public function deletar($id){
       Usuario::delete()->where([
        'id'=>$id
       ])->execute();
       $this->redirect('/');
    }

    public function up($id){
        $usuario = Usuario::select()->where(['id'=>$id])->one();
       $this->render('update',[
        'usuario'=>$usuario
       ]);
    }

    public function update($id){
        
        $divida=$_POST['divida'];
        $valor=$_POST['valor'];
        $data=$_POST['venc'];

       
        $usuario=Usuario::select()->where(['id'=>$id])->one();
        if(isset($usuario)){
            Usuario::update([
                'nome'=>$divida,
                'valor'=>$valor,
                'vencimento'=>$data
            ])->where(['id'=>$id])->execute();

        }
        
        $this->redirect('/');
        exit;
        

    }
}