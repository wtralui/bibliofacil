
<?php
session_start();
include_once('bin/conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title> BIBLIO </title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/angular_material/0.11.0/angular-material.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://kit.fontawesome.com/46eed91c90.js" crossorigin="anonymous"></script>
</head>

<body  onLoad="setTimeout(carregar, 510);">
    <script>
        var data = sessionStorage.getItem('session');
        if(data !== "@!Logado!@"){
            alert("Falha no login");
            window.location.href = "https://localhost/admin/";
        }
        
        </script>

  <div id="teste13"  style="display:none;">
<!-- partial:index.partial.html -->
<div ng-app="app">
<script>
          $(document).ready(function () {
              $('.btn-cadastrar').on('click', function () {

                  $('#cadastromodal').modal('hide');
                  $('#cadastrolivro').modal('hide');
                  $('#cadastroapenado').modal('hide');
                  $("#alertok").fadeIn("slow");
                  setTimeout(function(){ 
                    $("#alertok").fadeOut('slow');
                    }, 3333);
                  
                })
              });
          </script>
    <div ng-controller="appController as ctrl">
        <div class="toolbar">
            <!-- TOOLBAR -->
            <md-toolbar>
                <div class="md-toolbar-tools">
                    <md-button class="md-icon-button" aria-label="Menu" ng-show="true" ng-click="ctrl.toggleMainMenu()">
                        <i class="fa fa-bars"></i>
                    </md-button>

                    <h2>
            <span class="app-name">
              <img id="logo" src="logo.png"/>
            </span>
                    </h2>

                    <span flex></span>

                    <div class="identification" layout="column">
                        <div class="name">Admin</div>
                        <md-button class="role" ng-click="ctrl.changeRole($event)">
                            <i class="fa fa-refresh"></i> {{ctrl.role}}
                        </md-button>
                    </div>

                    <md-button class="md-icon-button toolbar-icon" aria-label="Log out menu" ng-click="ctrl.toggleLogOutMenu($event)">
                        <i class="fa fa-ellipsis-v"></i>
                    </md-button>
                </div>
            </md-toolbar>

            <!-- LOG OFF MENU -->
            <div class="log-out-menu md-whiteframe-z1" ng-class="{'visible': ctrl.logOutMenuVisible}">
                <md-button class="md-list-item-content" aria-label="Log Out" ng-click="ctrl.logOut()">
                    <i class="fa fa-sign-out"></i>
                    <span class="md-inline-list-icon-label">Log out</span>
                </md-button>
            </div>

            <!-- LEFT SIDE MENU -->
            <section layout="row" flex>
                <md-sidenav class="md-sidenav-left md-whiteframe-z2" md-component-id="menu-left">
                    <md-toolbar></md-toolbar>

                    <md-content class="md-padding side-menu">
                        <div class="menu-item" layout="row" layout-align="start center" ng-repeat="view in ctrl.views" ng-class="{'separator': view.separator, 'selected': ctrl.currentView === view.label}" ng-click="ctrl.changeView(view.label)">
                            <i class="fa {{view.icon}} icon-all-requests"></i>
                            <span>{{view.label}}</span>
                        </div>
                    </md-content>
                </md-sidenav>
            </section>
        </div>

        <div class="view dashboard" ng-if="ctrl.currentView === 'Página Inicial'" ng-controller="DashboardController as ctrl">
        
      

           <script>
              var atualizaNotificacao1 = function (tempoParaChecarNovamenteEmSegundos) {
                  $.ajax({
                      url: 'bin/getstatus2.php',
                      type: 'GET',
                      beforeSend: function () {
                          // loading..
                          $('.devolvido').html('<font size="3">Carregando...</font>');
                      },

                      success: function (emprestado) {
                        
                          $('.devolvido').html(emprestado);

                          setTimeout(function() { atualizaNotificacao1(tempoParaChecarNovamenteEmSegundos); }, tempoParaChecarNovamenteEmSegundos * 1000);
                      },

                  });
              }

              // inicializando contador de tempo para atualizacao de 2 segundos...
              atualizaNotificacao1(5);
          </script>
          <script>
          $(document).ready(function () {
              $('#cadmod').on('click', function () {

                  $('#cadastromodal').modal('show');
                })

                $('#cad_livro').on('click', function () {

                    $('#cadastrolivro').modal('show');
                  });

                  $('#cad_apenado').on('click', function () {

                      $('#cadastroapenado').modal('show');
                    });
              });
          </script>
           
          <div id="alertok" class="alert alert-success alertok" role="alert" style="display:none;">
              Ação realizada com sucesso, atualize a página para apresentar os novos resultados.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
        </button>
            </div>
          <h1>Dashboard</h1>
          <div class=" d-flex justify-content-around row mx-md-n5">
     
            <div class="col px-md-5"><div class="p-3 mb-2 text-white border-top-0 totalcolor"><p class="text-center font-weight-light" style="font-size: 30px;">Total de Apenados<br><p class="text-center font-weight-light text-monospace tapenados" style="font-size: 43px;"></p></p></div></div>
            <script>
              var atualizaNotificacao = function (tempoParaChecarNovamenteEmSegundos) {
                  $.ajax({
                      url: 'bin/totallivro.php',
                      type: 'GET',
                      beforeSend: function () {
                          // loading..
                          $('.tlivro').html('<font size="3">Carregando...</font>');
                      },

                      success: function (resultado) {
                          $('.tlivro').html(resultado);
                          setTimeout(function() { atualizaNotificacao(tempoParaChecarNovamenteEmSegundos); }, tempoParaChecarNovamenteEmSegundos * 1000);
                      },
                  });
              }
              var atualizaNotificacao2 = function (tempoParaChecarNovamenteEmSegundos) {
                  $.ajax({
                      url: 'bin/totalapen.php',
                      type: 'GET',
                      beforeSend: function () {
                          // loading..
                          $('.tapenados').html('<font size="3">Carregando...</font>');
                      },

                      success: function (resultado) {
                          $('.tapenados').html(resultado);
                          setTimeout(function() { atualizaNotificacao2(tempoParaChecarNovamenteEmSegundos); }, tempoParaChecarNovamenteEmSegundos * 500);
                      },
                  });
              }

              var atualizaNotificacao3 = function (tempoParaChecarNovamenteEmSegundos) {
                  $.ajax({
                      url: 'bin/getstatus.php',
                      type: 'GET',
                      beforeSend: function () {
                          // loading..
                          $('.emprestado').html('<font size="3">Carregando...</font>');
                      },

                      success: function (emprestado) {
                        
                          $('.emprestado').html(emprestado);

                          setTimeout(function() { atualizaNotificacao3(tempoParaChecarNovamenteEmSegundos); }, tempoParaChecarNovamenteEmSegundos * 1000);
                      },

                  });
              }

              // inicializando contador de tempo para atualizacao de 2 segundos...
              atualizaNotificacao(10);
              // inicializando contador de tempo para atualizacao de 2 segundos...
              atualizaNotificacao2(10);
              // inicializando contador de tempo para atualizacao de 2 segundos...
              atualizaNotificacao3(10);

          </script>
          <script>
    var atualizaNotificacao = function (tempoParaChecarNovamenteEmSegundos) {
        $.ajax({
            url: 'bin/getusers.php',
            type: 'GET',
            beforeSend: function () {
                // loading..
                $('.myselect').html('Carregando...');

            },


            success: function (resultado) {

                $('.myselect').html(resultado);

            },

        });
        $.ajax({
            url: 'bin/getlivros.php',
            type: 'GET',
            beforeSend: function () {
                // loading..
                $('.myselectbook').html('Carregando...');

            },


            success: function (resultado) {

                $('.myselectbook').html(resultado);

            },

        });
    }

    // inicializando contador de tempo para atualizacao de 2 segundos...
    atualizaNotificacao(10);
</script>
            <div class="col px-md-5"><div class="p-3 mb-2 text-white border-top-0 totalcolor"><p class="text-center font-weight-light" style="font-size: 30px;" >Total de Livros<br><p class="text-center font-weight-light text-monospace tlivro" style="font-size: 43px;"></p></p></div></div>
            <div class="col px-md-5"><div class="p-3 mb-2 text-white border-top-0 totalcolor"><p class="text-center font-weight-light" style="font-size: 30px;" >Livros Emprestados<br><p class="text-center font-weight-light text-monospace emprestado" style="font-size: 43px;"></p></p></div></div>
            <div class="col px-md-5"><div class="p-3 mb-2 text-white border-top-0 totalcolor"><p class="text-center font-weight-light" style="font-size: 30px;" >Livros Devolvidos<br><p class="text-center font-weight-light text-monospace devolvido" style="font-size: 43px;">0</p></p></div></div>
          </div>
          <br><br>
          <h1>Funções do Sistema</h1>
          <div class=" d-flex justify-content-around row mx-md-n5">
            <div class="col px-md-5"><div class="card p-3 mb-2 text-white border-top-0 buttonscad">
                      <div class="card-body"  id="cadmod" name="cadmod">
                        <h5 class="card-col px-md-title"><i class="fas fa-book-medical" aria-hidden="true"></i>   Cadastrar Empréstimo</h5>
                        <p class="card-text font-weight-light">Clique aqui para realizar o cadastro de um novo empréstimo.</p>
                      </div>
                    </div>
                  </div>
                    <div class="col px-md-5"><div class="card p-3 mb-2 text-white border-top-0 buttonscad">
                              <div class="card-body" id="cad_livro" name="cad_livro">
                                <h5 class="card-col px-md-title"><i class="fas fa-book-medical" aria-hidden="true"></i>   Cadastrar Livro</h5>
                                <p class="card-text font-weight-light">Clique aqui para realizar o cadastro de um novo livro.</p>
                              </div>
                            </div></div>
                            <div class="col px-md-5"><div class="card p-3 mb-2 text-white border-top-0 buttonscad">
                                      <div class="card-body" id="cad_apenado" name="cad_apenado">
                                        <h5 class="card-col px-md-title"><i class="fas fa-book-medical" aria-hidden="true"></i>   Cadastrar Apenado</h5>
                                        <p class="card-text font-weight-light">Clique aqui para realizar o cadastro de um novo apenado.</p>
                                      </div>
                                    </div></div>
          </div>
        </div> <!-- DIV DASHBOARD -->
        <div class="view orders" ng-if="ctrl.currentView === 'Funções do Sistema'" ng-controller="OrdersController as ctrl">
          <script>
          $(document).ready(function () {
            $('#cancelademprestimo').on('click', function () {
                $('.cadastromodal').modal('hide');
              });
              $('#cad_apenado1').on('click', function () {
                  $('#cadastroapenado').modal('show');
                });
                $('#cad_livro').on('click', function () {

                    $('#cadastrolivro').modal('show');
                   
                  });

                  $('#cad_emp').on('click', function () {

                      $('#cadastromodal').modal('show');
                     
                    });
              });
          </script>
          <!--- <div class=" d-flex justify-content-around row mx-md-n5"> --->
            <div class="col px-md-5"><div class="card p-3 mb-2 text-white border-top-0 buttonscad">
                      <div class="card-body"  id="cad_emp" name="cad_emp">
                        <h5 class="card-col px-md-title"><i class="fas fa-book-medical" aria-hidden="true"></i>   Cadastrar Empréstimo</h5>
                        <p class="card-text font-weight-light">Clique aqui para realizar o cadastro de um novo empréstimo.</p>
                      </div>
                    </div>
                  </div>
            <div class="col px-md-5"><div class="card p-3 mb-2 text-white border-top-0 buttonscad">
                    <div class="card-body" id="cad_livro" name="cad_livro">
                        <h5 class="card-col px-md-title"><i class="fas fa-book-medical" aria-hidden="true"></i>   Cadastrar Livro</h5>
                        <p class="card-text font-weight-light">Clique aqui para realizar o cadastro de um novo livro.</p>
                      </div>
                    </div></div>
                    <div class="col px-md-5"><div class="card p-3 mb-2 text-white border-top-0 buttonscad">
                              <div class="card-body" id="cad_apenado1" name="cad_apenado1">
                                <h5 class="card-col px-md-title"><i class="fas fa-book-medical" aria-hidden="true"></i>   Cadastrar Apenado</h5>
                                <p class="card-text font-weight-light">Clique aqui para realizar o cadastro de um novo apenado.</p>
                              </div>
                            </div></div>
      <!--- </div> --->
  </div>
  <div class="view Sair exitt" ng-if="ctrl.currentView === 'Sair'" ng-controller="Sair as ctrl">
      <h1>Settings</h1>
  </div>
        <div id="cadastt" name="cadastt" class="view contracts" ng-if="ctrl.currentView === 'Gerar relatório'">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('.editbtn').on('click', function () {
                        $('#editmodal').modal('show');
                    });
                    $('.editbtn2').on('click', function () {
                        $('#editmodal').modal('hide');
                    $("#alertok").fadeIn("slow");
                        setTimeout(function(){ 
                    $("#alertok").fadeOut();
                    }, 6000);
                    });
                    $('.editbtn3').on('click', function () {
                        $('#editmodal2').modal('hide');
                        $('#editmodal').modal('show');
                        document.getElementById("cpslct4").innerHTML = "<input name=cpslct id=cpslct class=form-control value=Emprestado>";
                    });
                    $('.editbtn4').on('click', function () {
                        $('#editmodal2').modal('hide');
                        $('#editmodal').modal('show');
                        document.getElementById("cpslct4").innerHTML = "<input name=cpslct id=cpslct class=form-control value=Devolvido>";
                    });
                    $('.cancela').on('click', function () {

                        $('#cadastromodal').modal('hide');
                      });
                      $('.cancela').on('click', function () {

                          $('#cadastroapenado').modal('hide');
                        });
                        $('.cancela').on('click', function () {

                            $('#cadastrolivro').modal('hide');
                          });
                });
                </script>

            <div class="container mb-3 mt-3">

        
</div>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.0/js/dataTables.dateTime.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.0/css/dataTables.dateTime.min.css">

    
<script>
var minDate, maxDate;
 
 // Custom filtering function which will search data in column four between two values
 $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var max = maxDate.val();
         var date = new Date( data[4] );
  
         if (
             ( min === null && max === null ) ||
             ( min === null && date <= max ) ||
             ( min <= date   && max === null ) ||
             ( min <= date   && date <= max )
         ) {
             return true;
         }
         return false;
     }
 );
  
     // Create date inputs
     minDate = new DateTime($('#min'), {
         format: 'DD-MM-YYYY'
     });
     maxDate = new DateTime($('#max'), {
         format: 'DD-MM-YYYY'
     });
  
     // DataTables initialisation

     var table = $('#example3').DataTable({
        
          "dom": '<"toolbar">Bfrtip',
                "buttons": [

                    {
                        extend: 'excelHtml5',
                        className: 'btn btn-dark rounded-0',
                        text: '<i class="far fa-file-excel"></i> Excel'
                    },

                    {
                        extend: 'csvHtml5',
                        className: 'btn btn-dark rounded-0',
                        text: '<i class="fas fa-file-csv"></i> CSV'
                    },
                    {
                        extend: 'pdfHtml5',
                        className: 'btn btn-dark rounded-0',
                        text: 'Imprimir | PDF'
                    },
                    {
                        className: 'btn btn-danger editbtn',
                        text: 'Editar Status'
                    }
                ],
                "language": {
            "zeroRecords": "<span class='zero' style='background:#dc3545'>Nenhum resultado encontrado, pesquise novamente</span>",
            "info": "Exibindo página _PAGE_ de _PAGES_",
            "infoFiltered": "(filtrado de _MAX_ registros no total)",
            "search":         "Pesquisar:",
            "paginate": {
        "next": "Próximo",
        "previous": "Anterior",
        "first": "Primeiro",
        "last": "Último"
             }
        },
                
                ajax:'bin/MeuArquivo.php',
    columns: [
        { data: 'id', className:"count_id"}, 
        { data: 'nome_apenada' },
        { data: 'nome_livro' },
        { data: 'autor' },
        { data: 'data_emprestimo' },
        { data: 'data_devolucao' },            
        { data: 'status' },
        { data: 'condicao_emprestimo' },
        { data: 'condicao_devolucao' }
    ]
     });
     // Refilter the table
     $('#min, #max').on('change', function () {
         table.draw();
     });
</script>
<!-- Alerta ao executar a edição de STATUS -->
<div id="alertok" class="alert alert-success alertok" role="alert" style="display:none;">
              Ação realizada com sucesso, atualize a página para apresentar os novos resultados.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                </button>
</div>
<div class="titlelist">
     <h1>Gerar relatório</h1>
    <table class="date" border="0" cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td><b><img src="icons\date.png" />Data inicial:</b></td>
            <td><b><img src="icons\date.png" />Data final:</b></td>
        </tr>
        <tr>
            <td><input type="text" id="min" name="min" autocomplete="off"></td>
            <td><input type="text" id="max" name="max" autocomplete="off"></td>
        </tr>
    </tbody></table>
</div>
            <table id="example3" class="display table table-bordered" style="width:100%">
            
                    <thead class="table-dark">
                        <tr>
                        <th><img src="icons\id.png" /> ID</th>
                            <th><img src="icons\group.png" /> Apenada</th>
                            <th><img src="icons\book.png" /> Livro</th>
                            <th><img src="icons\status.png" /> Autor</th>
                            <th><img src="icons\status.png" />Empréstimo</th>
                            <th><img src="icons\status.png" />Devolução</th>
                            <th><img src="icons\data.png" /></i> Status</th>
                            <th><img src="icons\data.png" /></i> Condição emprestimo</th>
                            <th><img src="icons\data.png" /></i> Condição devolução</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --> <!-- Modal -->

    <div name="editmodal" id="editmodal" class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
                    <form method="POST" action="bin/atualiza.php" target="dummyframe" class="ui-modal" autocomplete="off">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Id:
                                <input type="text" name="update_id" id="update_id" class="form-control"></input>
                            </label><br>
                            <label>Data de devolução
                            <input type="date" name="data_devolu" class="form-control" aria-label="Default select example">
                            </label><br>
                            <label>
                            <p class="fs-6">Condição na devolução do livro</p>
                            <select name="cond_devolu"  class="form-select" >
                                <option>Perfeito estado</option>
                                <option>Conservado</option>
                                <option>Com marcas de uso</option>
                                <option>Paginas rasuradas e rasgadas</option>
                            </select>
                            </label><br>
                            <label for="recipient-name" class="col-form-label">Status:
                                <div name="cpslct4" id="cpslct4">
                                    <select class="form-control " name="cpslct">
                                        <option>Emprestado</option>
                                        <option>Devolvido</option>
                                     </select>
                                </div>
                            </label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <td class="center">
                                    <button type="Submit" class="btn btn-primary editbtn2"> Alterar status </button>
                                </td>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <script type="text/ng-template" id="dialogRole.html">
            <md-dialog aria-label="Mango (Fruit)">
                <form>
                    <md-toolbar>
                        <div class="md-toolbar-tools">
                            <h2>Selecione o perfil</h2>
                        </div>
                    </md-toolbar>
                    <md-dialog-content style="max-width:800px;max-height:810px; ">
                        <div>
                            <md-radio-group ng-model="selected">
                                <md-radio-button ng-repeat="role in roles" value="{{role}}" class="md-primary">{{role}}</md-radio-button>
                            </md-radio-group>
                        </div>
                    </md-dialog-content>

                    <div class="md-actions" layout="row">
                        <md-button ng-click="cancel()" md-autofocus>
                            Cancelar
                        </md-button>
                        <span flex></span>
                        <md-button ng-click="select(selected)" style="margin-right:20px;">
                            Selecionar
                        </md-button>
                    </div>
                </form>
            </md-dialog>
        </script>
    </div>
    <!-- MODAL2 --><!-- MODAL2 --><!-- MODAL2 --><!-- MODAL2 --><!-- MODAL2 -->
<!-- Modal -->
<!-- Button trigger modal -->
<!-- Modal -->
<!--- MODAL CADASTRO EMPRESTIMO --->
<div id="cadastromodal" name="cadastromodal" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>
<form method="POST" action="bin\cadastroemprestimo.php" target="hiddenFrame" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Empréstimo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="fs-6">Selecione um usuário</p>
        <select id="selectuser" name="selectuser" class="form-select myselect" aria-label="Default select example">
        </select>
        <p class="fs-6">Selecione o livro emprestado</p>
        <select id="selectb" name="selectb"  class="form-select myselectbook" aria-label="Default select example">
        </select>
        <p class="fs-6">Data de empréstimo</p>
        <input type="date" name="data_emprestimo" class="form-control" aria-label="Default select example"/>
        
        <p class="fs-6">Condição atual do livro</p>
        <select name="condicao_atual"  class="form-select" >
            <option>Perfeito estado</option>
            <option>Conservado</option>
            <option>Com marcas de uso</option>
            <option>Paginas rasuradas e rasgadas</option>
        </select>
        <p class="fs-6">Condições de Recolhimento do Livro</p>
        <select  name="condicao_recolhimento"  class="form-select" >
            <option>Perfeito estado</option>
            <option>Conservado</option>
            <option>Com marcas de uso</option>
            <option>Paginas rasuradas e rasgadas</option>
        </select>
          </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary cancela" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary btn-cadastrar">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--- MODAL CADASTRO LIVRO --->
<div id="cadastrolivro" name="cadastrolivro" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>
<form method="POST" action="bin\cadastrolivro.php" target="hiddenFrame">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Livro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-floating">
          <input type="text" class="form-control" id="namebook" name="namebook" required>
          <label >Nome do livro</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="nameautor" name="nameautor" required>
          <label >Autor do livro</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="generolivro" name="generolivro" required>
          <label >Gênero do livro</label>
        </div>
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary cancela" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary btn-cadastrar">Cadastrar</button>
</form>
      </div>
    </div>
  </div>
</div>
<!--- MODAL CADASTRO APENADO -->
<div id="cadastroapenado" name="cadastroapenado" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>
<form method="POST" action="bin\cadastroapenado.php" target="hiddenFrame">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Apenado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="id_apenadoff" name="id_apenadoff" placeholder="Digite o número de identificado do(a) apenado(a)">
          <label for="floatingInput">ID(identificação)</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control"id="nome_apenado" name="nome_apenado" placeholder="Digite o nome do(a) apenado(a)">
          <label for="floatingPassword">Nome do apenado</label>
        </div>
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary cancela" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary btn-cadastrar">Cadastrar</button>
      </div>
    </div>
  </div>
    </div>
</form>
</div>
<script>

function carregar() {
    document.getElementById("teste13").style.display="block";
}
</script>
    <!-- partial -->
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/angular_material/0.11.0/angular-material.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-animate.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-aria.min.js'>
    </script><script  src="./script.js"></script>


</body>
</html>