  <?php 
    $informacoes_empresa = pods( 'informacoes_empresa', array('limit' => 0)); 

  ?>

  <nav class="top-30  navbar-expand-md">
  <?php 
    $informacoes_empresa = pods( 'informacoes_empresa', array('limit' => 0)); 

  ?>
  <div class="container">
      <div class="row">
        <div class="logo my-0 mr-md-auto">
  <a class="navbar-brand" href="#"><img src="<?= $informacoes_empresa->display('logo');?>"></a>
  </div>
  <!-- Hamburguer Custom -->
  <button type="button" class="hamburger hamburger--slider-r d-block d-sm-none" tabindex="0"
     aria-label="Menu" role="button" aria-controls="navbarCollapse" data-toggle="collapse" data-target="#navbarCollapse">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </button>

<!-- Hamburguer default -->
<!-- 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->


  <div class="collapse navbar-collapse nav-paralax" id="navbarCollapse">
    <div class="navbar-nav mx-auto" style="margin-right: 0px !important;">
      
      <?php wp_nav_menu( ['theme_location' => 'max_mega_menu_1']); ?>

    </div>
  </div>


       
      
</div>
   </div>
</nav>
