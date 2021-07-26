<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon.ico">

        <title>Formulario</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

         <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/material-bootstrap-wizard.css" rel="stylesheet" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../css/demo.css" rel="stylesheet" />
        <link href="../css/formulario.css" rel="stylesheet">
    </head>

    <body>
        <!--   Big container   -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!--      Wizard container        -->
                        <div class="wizard-container">
                            <div class="card wizard-card" data-color="green" id="wizardProfile">
                                <form action="" method="">
                                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                                   
                                    <div class="wizard-navigation">
                                        <ul>
                                            <li><a href="#about" data-toggle="tab">Login</a></li>
                                            <li><a href="#account" data-toggle="tab">Crear Cuenta</a></li>
                                           
                                        </ul>
                                    </div>

                                
                                    
                                    <div class="tab-content">
                                     
                                        <div class="tab-pane" id="about">
                                        <h2 class="">   Iniciar Sesion</h2> 
                                            <div class="row">
                                           
                                               

                                                   <div class="col-sm-7">
                                

                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="material-icons">email</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Email <small>(*)</small></label>
                                                            <input name="txtApellidos" type="email" class="form-control">
                                                        </div>
                                                      </div>

                                                      <div class="input-group">
                                                      <span class="input-group-addon">
                                                       <i class="material-icons">lock</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Clave <small>(*)</small></label>
                                                            <input name="txtCorreo" type="password" class="form-control">
                                                        </div>
                                                          </div>
                                                       

                                                        <button  class=" " id="ingre" type="submit">Ingresar</button>
                                                        </div>
                                                        
                                                

                                                
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <div class="input-group">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        
                                        <div class="tab-pane" id="account">
                                        <h2 class="">   Iniciar Sesion</h2> 
                                            <div class="row">
                                           
                                                <div class="col-sm-4 col-sm-offset-1">
                                               
                                                    <div class="picture-container">
                                                        <div class="picture">
                                                            <img src="../img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                            <input type="file" id="wizard-picture">
                                                        </div>
                                                        <h6>ELEGIR LA FOTO</h6>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Nombre <small>(*)</small></label>
                                                            <input name="txtNombre" type="text" class="form-control">
                                                        </div>

                                                    </div>

                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>

                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Apellidos <small>(*)</small></label>
                                                            <input name="txtApellidos" type="text" class="form-control">
                                                        </div>
                                                      </div>

                                                      <div class="input-group">
                                                      <span class="input-group-addon">
                                                            <i class="material-icons">email</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Correo <small>(*)</small></label>
                                                            <input name="txtCorreo" type="email" class="form-control">
                                                        </div>
                                                          </div>
                                                       

                                                        <button  class=" " id="ingre" type="submit">Registrar</button>
                                    </div>
 

                               
                                </form>
                            </div>
                        </div> <!-- wizard container -->
                    </div>
                </div><!-- end row -->
            </div> <!--  big container -->

            

    </body>
    <!--   Core JS Files   -->
    <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/jquery.bootstrap.js" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="../js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="../js/jquery.validate.min.js"></script>

</html>
