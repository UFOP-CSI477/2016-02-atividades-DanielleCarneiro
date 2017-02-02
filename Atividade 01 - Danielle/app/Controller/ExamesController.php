<?php
class ExamesController extends AppController{
  public $helpers = array('Html','Form');
  public $components = array('Flash');

  public function index(){
    $this-> set('exames', $this->Exame->find('all',
    array( 'order' => "nome ASC")));
  }
  public function view($codigo){
      $cidade = $this->Exames->findById($codigo);
      $this->set('exame', $exame);
    }

  public function edit($codigo){
    if (empty($this->request->data)){
      
      $procedimentos = $this->Exame->Procedimento->find('list',
      array('fields'=>array('id','nome','preco')));
      $procedimentos = $this->Exame->Paciente->find('list',
      array('fields'=>array('id','nome')));
      
      $this->set('procedimentos',$procedimentos);
      $this->set('pacientes',$pacientes);

      $this->request->data = $this -> Exame->findById($codigo);

    }else{
      if ($this->Exame->save($this->request->data)){
        $this->Flash->set('Exame alterado com Sucesso');
        $this->redirect(array('action' => 'index'));
      }
    }
  }
}
?>
