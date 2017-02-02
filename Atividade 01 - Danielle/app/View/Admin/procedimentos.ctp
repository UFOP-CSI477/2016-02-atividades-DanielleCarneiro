<br><br>
<?php echo $this->Html->link("Exames Solicitados",
array('controller' => 'admin',
'action' => 'exameS'));?><br></br>

<?php echo $this->Html->link("Exames por Pacientes",
array('controller' => 'admin',
'action' => 'totalE'));?> <br></br>

<?php echo $this->Html->link("Exames por Procedimento",
array('controller' => 'admin',
'action' => 'totalP'));?><br></br>
<?php echo $this->Html->link("Listar Pacientes",
array('controller' => 'admin',
'action' => 'pacientes'));?><br></br>


<h3><strong>Procedimentos Oferecidos<br></strong></h3>

<div class="container text-center">
  <?php  echo $this->Html->link("Inserir Procedimento",
  array('controller' => 'procedimentos',
  'action'=> 'add'));
  ?>
<table class="table table-bordered table-hover">
  <tbody>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Opções de Configuração</th>
    </tr>

    <?php foreach($procedimentos as $p): ?>
      <tr>
        <td>
          <?php echo $p['Procedimento']['id']; ?>

          <td>
            <?php echo $p['Procedimento']['nome']; ?>
          </td>
          <td>
            <?php echo $p['Procedimento']['preco']; ?>
          </td>

          <td><?php echo $this->Html->link('Editar', array('action' => 'editarP', $p['Procedimento']['id'])); ?>
            | <?php echo $this->Html->link(
            'Excluir', array(
              'action' => 'excluirP',
              $p['Procedimento']['id']), array('confirm' => 'Deseja excluir este procedimento?')
            ); ?></td>
          </tr>

        </tr>
      <?php endforeach ?>

    </tbody>
  </table>
