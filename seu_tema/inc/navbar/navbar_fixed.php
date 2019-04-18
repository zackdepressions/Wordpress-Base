<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light">
  <?php 
    $informacoes_empresa = pods( 'informacoes_empresa', array('limit' => 0)); 

  ?>
  <a class="navbar-brand" href="#"><img src="<?= $informacoes_empresa->display('logo');?>"></a>

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

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav mx-auto">
      
      <?php wp_nav_menu( ['theme_location' => 'max_mega_menu_1', 'menu_class' => 'navbar-nav']); ?>

    </div>
    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>