  <h3><strong>Área Administrativa<br></strong></h3>
<?php

  echo $this->Html->link("Listar Procedimentos",array('controller' => 'admin','action'=> 'procedimentos'));?><br></br>


<?php echo $this->Html->link("Exames Solicitados",
array('controller' => 'admin',
'action' => 'exameS'));?><br></br>

<?php echo $this->Html->link("Listar Pacientes",
array('controller' => 'admin',
'action' => 'pacientes'));?> <br></br>

<?php echo $this->Html->link("Exames por Pacientes",
array('controller' => 'admin',
'action' => 'totalE'));?> <br></br>

<?php echo $this->Html->link("Exames por Procedimento",
array('controller' => 'admin',
'action' => 'totalP'));?><br></br>
