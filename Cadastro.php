<!DOCTYPE html>
<html>

<!-- Exportado por miguel....-->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.png">

        <title>Marista Docs</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="assets/images/favicon.png" sizes="128x128">

        <script src="assets/js/modernizr.min.js"></script>

    </head>
    <body>

        <div class="account-pages">
        	<div class="text-center">
			<a class="letras"><img src="assets/images/computer.png" height="655"/></a>
		</div>
        </div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="card-box">
            	<div class="painel-logo">
					<div class="text-center">
						<a class="logo"><img class="img img-responsive" src="assets/images/logo.png" height="100"/></a>
					</div>
				</div>
                <div class="p-20">
                    <form class="form-horizontal m-t-20" method="POST" action="cadastrando.php">

                    	<div class="form-group ">
                            <div class="col-12">
                                <input class="form-control" type="text" name="nome" placeholder="Nome" required>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-12">
                                <input class="form-control" type="Email" name="email"  placeholder="Email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="password" name="senha" placeholder="Senha" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <select name="select_nivel_formacao" class="form-control" required>
                                <option>Escolha a Formação</option>
                                <?php
                                include'conexao.php';
                                $sql2 = "SELECT * FROM nivel_formacao";
                                $query2 = mysql_query($sql2);
                                if(mysql_num_rows($query2)>0)
                                {
                                    while($row2 = mysql_fetch_assoc($query2))
                                    {
                                ?><div>
                                  <option value="<?php echo $row2['id_nivel_formacao'];?>"><?php echo $row2['formacao'];?></option>
                                <?php
                                    }
                                }
                                ?>
                              </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-12">
                            <select name="select_unidade_educador" class="form-control" required>
                              <option>Escolha a Unidade</option>
                              <?php
                              include'conexao.php';
                              $sql = "SELECT * FROM unidades WHERE status ='Ativa'";
                              $query = mysql_query($sql);
                              if(mysql_num_rows($query)>0)
                              {
                                  while($row = mysql_fetch_assoc($query))
                                  {
                              ?><div>
                                <option value="<?php echo $row['id_unidade'];?>"><?php echo $row['nome_unidade'];?></option>
                              <?php
                                  }
                              }
                              ?>
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <select name="select_setor_educador" class="form-control" required>
                                <option>Escolha o Setor</option>
                                <?php
                                include'conexao.php';
                                $sql3 = "SELECT * FROM setores WHERE status = 'Ativo'";
                                $query3 = mysql_query($sql3);
                                if(mysql_num_rows($query3)>0)
                                {
                                    while($row3 = mysql_fetch_assoc($query3))
                                    {
                                ?><div>
                                  <option value="<?php echo $row3['id_setor'];?>"><?php echo $row3['nome_setor'];?></option>
                                <?php
                                    }
                                }
                                ?>
                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <select name="select_disciplina_educador" class="form-control" required>
                                <option>Escolha o Componente Curricular</option>
                                <?php
                                include'conexao.php';
                                $sql4 = "SELECT * FROM disciplinas";
                                $query4 = mysql_query($sql4);
                                if(mysql_num_rows($query4)>0)
                                {
                                    while($row4 = mysql_fetch_assoc($query4))
                                    {
                                ?><div>
                                  <option value="<?php echo $row4['id_disciplina'];?>"><?php echo $row4['disciplina'];?></option>
                                <?php
                                    }
                                }
                                ?>
                              </select>
                            </div>
                        </div>


                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <button class="btn btn-bluer btn-block waves-effect waves-light" type="submit" name="cadastro" style="width:200px;">Cadastrar
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>




    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

	</body>

<!-- Exportado por miguel....-->
</html>
