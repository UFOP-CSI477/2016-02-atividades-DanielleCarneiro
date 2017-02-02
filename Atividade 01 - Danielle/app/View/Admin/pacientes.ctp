<br><?php echo $this->Html->link("Exames Solicitados",
array('controller' => 'admin',
'action' => 'exameS')); ?> <br></br>

<?php echo $this->Html->link("Exames por Pacientes",
array('controller' => 'admin',
'action' => 'totalE'));?> <br></br>

<?php echo $this->Html->link("Exames por Procedimento",
array('controller' => 'admin',
'action' => 'totalP'));?><br></br>
<?php echo $this->Html->link("Listar Procedimentos",
array('controller' => 'admin',
'action' => 'procedimentos'));?><br>

<center><h3><strong>Pacientes Cadastrados<br></strong></h3></center><br>

<table class="table table-bordered table-hover">
  <tbody>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Opções de Configuração</th>
    </tr>

    <?php foreach($pacientes as $e): ?>
      <tr>
        <td>
          <?php echo $e['Paciente']['id']; ?>
        </td>
        <td>
          <?php echo $e['Paciente']['nome']; ?>
        </td>
        <td>
          <?php echo $this->Html->link('Editar Paciente', array('action' => 'editar', $e['Paciente']['id'])); ?>
          | <?php echo $this->Html->link( 'Excluir Paciente', array(
            'action' => 'excluir',$e['Paciente']['id']), array('confirm' => 'Deseja excluir este Paciente?')); ?>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
