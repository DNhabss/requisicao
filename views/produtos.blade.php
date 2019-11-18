<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
</head>
<link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
	<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apelido</label>
      <input type="text" class="form-control" id="apelido" placeholder="Apelido">
    </div>
  </div>
  <div class="col-sm-10">
        <div class="form-check">
          <label for="Sexo">Sexo:</label>
                <input type="radio" name="sexo" value="M" checked>
                <label for="masculino">Masculino</label>
                <span class="check"></span>
                <input type="radio" name="sexo" value="F" checked>
                <label for="feminino">Feminino</label>
        </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Endereco</label>
      <input type="text" class="form-control" id="Endereco" placeholder="Endereco">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Telefone</label>
      <input type="text" class="form-control" id="Telefone" placeholder="Telefone">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" placeholder="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nuit</label>
      <input type="text" class="form-control" id="nuit" placeholder="Nuit">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>

</body>
</html>