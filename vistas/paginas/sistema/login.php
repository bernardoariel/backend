<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Sistema </b>ABC</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingreso al Sistema</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="usuario" class="form-control" placeholder="Usuario" id="usuarioLogin" name="usuarioLogin">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="passwordLogin" id="passwordLogin">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="errorLogin text-danger"></div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">

            <button type="submit" class="btn btn-primary btn-block" id="ingresoForm">Ingresar al Sistema</button>

          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div id="alerta"></div>
        </div>
        
        <?php

          $login = new ControladorLogin();
          $login -> ctrLoguearse();
        
        ?>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
