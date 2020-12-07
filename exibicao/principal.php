<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Projeto php fundamentos</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Cursos de linguagem de programação</span>
    </nav>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome do curso</th>
                    <th scope="col">Carga Horária</th>
                    <th scope="col">Versão da ferramenta</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cursos as $curso) : ?>
                    <?php if (!$curso->getStatus()) {
                        continue;
                    } ?>

                    <tr>
                        <th scope="row"><?= $curso->getNome() ?></th>
                        <td><?= App\Uteis\Formatador::cargaHoraria($curso->getCargaHoraria()) ?></td>
                        <td><?= $curso->getVersaoFerramenta() ?></td>
                        <td><button type="button" class="btn btn-dark">Deletar <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNome4">Nome do Curso</label>
      <input type="nome" class="form-control" id="inputNome4" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCargaHoraria4">Carga Horária</label>
      <input type="carga-horaria" class="form-control" id="inputCargaHoraria4" placeholder="Carga Horária">
    </div>
    <div class="form-group col-md-6">
      <label for="inputVersao4">Versão da ferramenta</label>
      <input type="versao-ferramenta" class="form-control" id="inputVersao4" placeholder="Versão da ferramenta">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>