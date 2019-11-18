
<!DOCTYPE html>
<html lang="en">

<head>
  <html>

<head>

<script type="text/javascript">
 var total = 0;
 var subtotal = 0;
 /*calcular o subtotal*/
function id( el ){
        return document.getElementById( el );
}
function montante( punid, qtd )
{
  document.getElementById('subtotal').value=0;
     var subtotal=punid*qtd;
    
document.getElementById('subtotal').value=subtotal;

        return subtotal;

      
}


window.onload = function()
{
        id('punid').onkeyup = function()
        {
                id('montante').value = montante( this.value , id('qtd').value );
        }      
        id('qtd').onkeyup = function()
        {
                id('montante').value = montante( id('punid').value , this.value );
        }
}
</script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/funcao.js"></script>

   




</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cosys<sup>Requisicao</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Componentes</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Componentes:</h6>
            <a class="collapse-item" href="regusuario">Cadastrar Usuario</a>
            
            <a class="collapse-item" href="cards.html">Cadastrar Produto</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="{{ route('login') }}">Login</a>
            <a class="collapse-item" href="{{ route('register') }}">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="Requisicao">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--{{ config('app.name', ' ') }}-->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
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
    <div>
     <!-- <label for="inputEmail4">Destino:</label>-->
      <input type="text" class="form-control" id="Destino" placeholder="Destino">
    </div>
    </div>
   <div><br><br><br>
     <div>
      <table>
        <tr>
                <th>Descricao<input type="text" id="descricao" name="Descricao" required></th>
                <td>Quantidade<input type="text" id="qtd" name="qtd" required></td>
                <th>Preco por Unidade<input type="text" id="punid" name="punid" required></th>
                <th><input type="hidden" id="montante" name="montante" readonly="readonly"></th><br>
                <td> <button onclick="AddTableRow()" type="button" class="btn btn-primary">Adicionar</button></td>
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
           
        </tbody>
        <tfoot> 
           
          </tfoot>


    </table>
    <table>
        <tr>
                <th>Total:<input type="text" id="total" name="total" readonly="readonly" ><input type="hidden" name="subtotal"
                  id="subtotal"></th>  
            </tr>
      </table>
    <!-- <label align="right">Sao:</label> -->

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
<br>
<button type="button" class="btn btn-secondary"> Emitir</button>
</form> 






      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Cosys 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

 
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
<script type="text/javascript" src="src="js/funcoes.js"></script>
<script src=“js/jquery.js”></script>

</body>

</html>
