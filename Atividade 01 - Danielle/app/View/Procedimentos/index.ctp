<div class="container text-center">
  <h3><strong>Procedimentos Oferecidos<br></strong></h3>
  <center><h3>Exames Laboratorias de qualidade - Você encontra aqui!</h3></center>
<table class="table table-bordered table-hover">
  <tbody>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
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
        </tr>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
