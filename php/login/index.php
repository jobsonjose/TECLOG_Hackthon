<?php  
include_once("config.php");
$sql = 'SELECT * FROM products';
// foreach ($pdo->query($sql) as $row) {
//     $id=$row['id'];
//     echo "<tr>";
//         echo "<td>".$row['descricao']."</td>"."\t";
//         echo "<td>".$row['quantidade_atual']."</td>" . "\t";
//         echo "<td>".$row['preco_por_caixa']."</td>" . "\t";
//         echo "<td>".$row['demanda']."</td>" . "\t";
//         echo "<td>".$row['created']."</td>" . "\t";
//         echo "<td>".$row['modified']."</td>" . "\n";
//         echo "<td>"."<a href=editProduct.php?id=$id>editar</a>"."</td>";
//     echo "</tr>";
    
//     }
//     echo "</table>";

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container theme-showcase">
      <div class="page-header">
        <h1>Listagem de Farmacos</h1>
      </div>
      <div class="pull-right">
        <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#exampleModalcad">Cadastrar</button>
      </div>

      <div class="modal fade" id="exampleModalcad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Cadastrar</h5> -->
        <h5 class="modal-title" id="cadastro">Cadastrar Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="http://localhost/teclog2/processaAdc.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Descrição:</label>
            <input type="text" name="descricao" class="form-control" >
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">quantidade atual:</label>
            <input type="text" name="quantidade_atual" class="form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">preço por caixa:</label>
            <input type="text" name="preco_por_caixa" class="form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Demanda:</label>
            <input type="text" name="demanda" class="form-control" >
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">created:</label>
            <input type="date" name="created" class="form-control" >
          </div>

          <div class="form-group">
            <label for="message-text" class="form-control-label">modified:</label>
            <input type="date" class="form-control" name="modified" >
          </div>
          
        <button type="submit" class="btn btn-primary">cadastrar</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>


      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>descriçao</th>
                <th>quantidade atual</th>
                <th>Preço por caixa</th>
                <th>Demanda</th>
                <th>Created</th>
                <th>Modified</th>
                <th>ação</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach ($pdo->query($sql) as $row): ?>
                
                <tr>
                  <td><?php echo $row['descricao']; ?></td>
                  <td><?php echo $row['quantidade_atual']; ?></td>
                  <td><?php echo $row['preco_por_caixa']; ?></td>
                  <td><?php echo $row['demanda']; ?></td>
                  <td><?php echo $row['created']; ?></td>
                  <td><?php echo $row['modified']; ?></td>
                  <td>
                     <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row['id']; ?>"
                     data-whateverdesc="<?php echo $row['descricao']; ?>"
                     data-whateverqtd="<?php echo $row['quantidade_atual']; ?>"
                     data-whateverpreco="<?php echo $row['preco_por_caixa']; ?>"
                     data-whateverdemanda="<?php echo $row['demanda']; ?>"
                     data-whatevercreated="<?php echo $row['created']; ?>"
                     data-whatevermodified="<?php echo $row['modified']; ?>">Editar</button>
                     <a href="processaDel.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-danger" onclick="confirm('tem certeza que deseja deletar ?');">Apagar</a>
                  </td>
                </tr>
              <?php endforeach ?>
                
            </tbody>
          </table>
        </div>
    </div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="http://localhost/teclog2/processa.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Descrição:</label>
            <input type="text" name="descricao" class="form-control" id="recipient-descricao">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">quantidade atual:</label>
            <input type="text" name="quantidade_atual" class="form-control" id="recipient-qtd">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">preço por caixa:</label>
            <input type="text" name="preco_por_caixa" class="form-control" id="recipient-preco">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Demanda:</label>
            <input type="text" name="demanda" class="form-control" id="recipient-demanda">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">created:</label>
            <input type="date" name="created" class="form-control" id="recipient-created">
          </div>

          <div class="form-group">
            <label for="message-text" class="form-control-label">modified:</label>
            <input type="date" class="form-control" name="modified" id="recipient-modified">
          </div>
          <input type="hidden" id="id" name="id">
          <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
         var recipientdesc = button.data('whateverdesc')
         var recipientpreco = button.data('whateverpreco')
         var recipientqtd = button.data('whateverqtd')
         var recipientdemanda = button.data('whateverdemanda')
         var recipientcreated = button.data('whatevercreated')
         var recipientmodified = button.data('whatevermodified')
        var modal = $(this)
        modal.find('.modal-title').text('Atualizar item : ' + recipient)
        modal.find('#exampleModalLabel').text('Cadastrar Produtos')
        modal.find('#id').val(recipient)
        modal.find('#recipient-descricao').val(recipientdesc)
        modal.find('#recipient-qtd').val(recipientqtd)
        modal.find('#recipient-preco').val(recipientpreco)
        modal.find('#recipient-demanda').val(recipientdemanda)
        modal.find('#recipient-created').val(recipientcreated)
        modal.find('#recipient-modified').val(recipientmodified)
      })  
    </script>
    
  </body>
</html>