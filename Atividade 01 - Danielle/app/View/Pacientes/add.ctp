  <h3><strong>Adicionar Procedimento<br></strong></h3>

<?php
    echo $this->Form->create('Exame');
    echo $this->Form->input('paciente_id', array(
                        'class' => 'form-control',
                        'type' => 'hidden',
                        'value'=> $id));
    echo $this->Form->input('data', array(
                        'class' => 'form-control'));
    echo $this->Form->select('procedimento_id', $procedimentos,array('empty'=> 'Selecione:','class' => 'form-control'));
    echo $this->Form->end('Salvar');
?>
