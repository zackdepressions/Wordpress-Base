
<?php

ob_start();

$imagem = pods('informacoes_empresa', array('limit' => 1));
$imagem->fetch();

$img = $imagem->display('fotos_empresa');
?>


<!--HOME-->
<section class="home" id="home" style="background: url(<?= $img ?>) 50% 50% fixed;background-size: cover;"> 
    <div class="home-content">
        <div class="container">
            <h1>Você sonha<span class="element" data-text1="" data-text2=", nós construimos!" data-loop="true" data-backdelay="3000"></span></h1> 
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
            </div>
            <a class="home-down bounce" href="#about"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
    <svg class="diagonal home-left" width="21%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <!-- <div class="arrow bounce"></div> -->
    <svg class="diagonal home-right" width="80%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>
</section>