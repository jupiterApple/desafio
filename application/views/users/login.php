<html>
   <head>
      <meta charset="utf-8">
      <link href="<?php echo base_url('application/bootstrap/css/theme-default.css');?>" rel="stylesheet">
       <title>R2CODE</title>
   </head>
   <body>
      <div class="login-container">
         <div class="login-box animated fadeInDown">
            <div class="login-body">
               <div class="login-title"><strong>Login</strong> Digite suas credenciais</div>
                  <form role="form" method="post" id="user_login" action="<?php echo base_url('user/login_user'); ?>">
                     <div class="form-group">
                        <div class="col-md-12">
                           <input type="text" name="username" id="username" class="form-control" placeholder="E-mail"/>
                        </div>
                     </div>
                     <br>
                     <br>
                     <br>
                     <div class="form-group">
                        <div class="col-md-12">
                           <input type="password" name="password" id="password" class="form-control" placeholder="Senha"/>
                        </div>
                     </div>
                     <br>
                     <br>
                     <br>
                     <?php
                        $success_msg= $this->session->flashdata('success_msg');
                        $error_msg= $this->session->flashdata('error_msg');

                        if($success_msg){
                     ?>
                           <span class="alert alert-success">
                              <?php echo $success_msg; ?>
                           </span>
                     <?php
                        }
                        if($error_msg){
                     ?>
                           <span class="alert alert-danger">
                              <?php echo $error_msg; ?>
                           </span>
                     <?php
                        }
                     ?>
                      <div class="form-group">
                          <div class="col-md-6">
                              <button type="submit" id="logar" class="btn btn-info btn-block">Acessar</button>
                          </div>
                      </div>
                  </form>
            </div>
            <div class="login-footer">
               <div class="pull-left">
                   &copy; 2018 DESAFIO
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
<script type="text/javascript" src="<?php echo base_url('application/bootstrap/js/plugins/jquery/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('application/bootstrap/js/plugins/jquery/jquery-ui.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('application/bootstrap/js/plugins/bootstrap/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/objects/user.js');?>"></script>


<script type="text/javascript">
   $().ready(function() {

     $("#user_login").validate({
         rules:{
            username:{
                required: true,
                minlength: 3,
                email: true
            },
            password:
            {
                required: true,
                minlength: 3
            }
         },
         messages:{
             username:{
                required: "Please enter your email address.",
                email: "Please enter a valid email address.",
             },
             password: "Please enter a password."
         },
         submitHandler: function(form)
         {
            form.submit();
         }
     });

});
</script>




