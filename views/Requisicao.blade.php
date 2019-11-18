<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/funcao.js"></script>

   <title>Requisicao</title>
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>


<body>
<!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
$(document).ready(function(){
  alert('jQuery Loaded!');
});
</script>-->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand md-0" href="#"></a>  

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target #navbarSite>
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSite">

<ul class="navbar-nav mr-auto">
  <li class="navbar-item">
    <a class="nav-link" href="#">Inicio</a>
  </li>
  <li class="navbar-item">
    <a class="nav-link" href="#">Perfil</a>
  </li>
  <li class="navbar-item">
    <a class="nav-link" href="#">Servicos</a>
  </li>
  <li class="navbar-item">
    <a class="nav-link" href="#">Depoimentos</a>
  </li>
  <li class="navbar-item">
    <a class="nav-link" href="#">Contactos</a>
  </li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Social </a>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Facebook</a>
    <a class="dropdown-item" href="#">Twitter</a>
    <a class="dropdown-item" href="#">Whatsapp</a>
  </div> 
  </li>
   
</ul>
<form class="form-inline">
  <input class="form-control ml-5 mr-2" type="search" placeholder="Buscar...">
  <button class="btn btn-success " type="Submit">OK</button>
</form>
</div>
</div>  
</nav>
<div   align="right" class="container-fluid" style="margin-top:30px">
    <div class="row">
    <div class="col-sm-4">
       <img src="img\COSYS.jpg"  width="180" height="150" >
      <p>Boane, Matola-Rio, Comunidade de Djuba</p>
      <p>Cel: +258 82 30309 Fax:21019812</p>
      <p>E-mail: info@cosys.co.mz</p>
      <p>Nuit: 400403333</p>
      <p>Maputo-Moçambique</p>
      
</div>
<div class="form-group col-md-6">
    

<form>
 <TABLE BORDER=2 CELLPADDING=8 width="800">

<TR>

<TD ROWSPAN="16" align="center">Requisição de compra</TD>

<TD align="left"> <label>Referencia:</label></TD></TR><TR><TD><input type="text" name="Referencia"></TD>

</TR>

</TABLE> <br>
<table border="1" align="right" CELLPADDING=3 width="200">
   <tr> <td>Data:  </td> <td align="center"><input type="date" name="datarequisicao"></td> </tr>
</table>
<br><br><br><br>

    
  <div class="form-row">
    <div class="form-group col-md-6">
     <!-- <label align="" for="inputRequisicao">Requisição:</label>-->
      <input type="text" class="form-control" id="nome" placeholder="Requisitante">
    </div>
    <div class="form-group col-md-6">
    <!--  <label for="inputSector">Sector:</label>-->
      <input type="text" class="form-control" id="sector" placeholder="Sector">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
     <!-- <label for="inputEmail4">Destino:</label>-->
      <input type="text" class="form-control" id="Destino" placeholder="Destino">
    </div>
    </div>
    <div>
      <table>
        <tr>
                <th><input type="text" id="descricao" name="Descricao">&nbsp;</th>
                <td><input type="text" id="qtd" name="Qtd">&nbsp;</td>
                <th><input type="text" id="punid" name="P.unid">&nbsp;</th>
                <th><input type="text" id="montante" name="Montante">&nbsp;</th>
                <td> <button onclick="AddTableRow()" type="button" class="btn btn-primary">Adicionar Descricao</button></td>
            </tr>
      </table>
    </div>
    <table class="table table-striped"  id="descricao-req">
        <thead>
            <tr>
                <th>Descricao do material</th>
                <th>Qtd</th>
                <th>P.Unid</th>
                <th>Montante</th>
            </tr>
        </thead>
        <tbody>
            <!--tr>
                <th><input type="text" name="Descricao">&nbsp;</th>
                <td><input type="text" name="Qtd">&nbsp;</td>
                <th><input type="text" name="P.unid">&nbsp;</th>
                <th><input type="text" name="Montante">&nbsp;</th>
                <td> <button onclick="RemoveTableRow(this)" type="button" class="btn btn-danger">Remover</button></td>
            </tr-->
        </tbody>
        <tfoot> 
         <!--tr>
          <td colspan="5" style="text-align: left;">        <button onclick="AddTableRow()" type="button" class="btn btn-primary">Adicionar Descricao</button>      
          </td>     
         </tr-->  
          </tfoot>


    </table>
    <label align="right">Sao:</label>

   <table style="width:100%">
  <tr style="width:50%">
    <th>Justificativa para compra:<input type="text" name="justificativa" style="width:100%"></th>
    <!--<td><input type="text" name="justificativa" style="width:100%"></td>-->
  </tr>
  <tr>
    <th rowspan="2">Indicacao de Fornecedor:<input type="text" name="indicacao" style="width:100%"></th>
   <!-- <td><input type="text" name="indicacao" style="width:100%"></td>-->
  </tr>
</table>
</form> 





<script src="js/bootstrap.min.js"></script>
  <script src="popper.js/dist/umd/popper.js"></script>
  <script src="js/app.js"></script>

<script type="text/javascript" src="src="js/funcoes.js"></script>
<script src=“js/jquery.js”></script>

</body>
</html>