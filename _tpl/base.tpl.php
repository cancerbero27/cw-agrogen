<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Agrogen</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo $_n ?>img/logos/favicon.png">
    <!-- ====== main style start ====== -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_n ?>style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_n ?>css/effect.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_n ?>css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- ====== main style end ====== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="preloader text-center">
        <img src="<?php echo $_n ?>img/logos/preloader-logo.png" alt="">
        <h1 class="preloader-texto f1">Más de 27 años sirviendo al campo Mexicano</h1>
        <div class="spinner"></div>
    </div>
    <!-- page-wrapper start -->
    <div class="page-wrapper">
        <!-- header start -->
        <header class="header1">
            <nav class="navbar nav-solid mb-0">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu"> <span></span>  <span></span>  <span></span> 
                        </button>
                        <a class="navbar-brand" href="<?php echo $_n ?>index.html">
                            <img src="<?php echo $_n ?>img/logos/logotipo.png" alt="logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav f1 mainMenu text-capitalize">
                            <li <?php if ($tpl["activo"] == "inicio"){ echo "class='active'"; } ?>>
                                <a href="<?php echo $_n ?>index.html">Home</a>
                            </li>
                            <li <?php if ($tpl["activo"] == "nosotros"){ echo "class='active'"; } ?>>
                                <a href="<?php echo $_n ?>nosotros.html">Nosotros</a>
                            </li>
                            <li <?php if ($tpl["activo"] == "productos"){ echo "class='active'"; } ?>>
                                <a href="<?php echo $_n ?>productos.html">Productos</a>
                            </li>
                            <li <?php if ($tpl["activo"] == "recursos"){ echo "class='active'"; } ?>>
                                <a href="<?php echo $_n ?>recursos-tecnicos.html">Recursos Técnicos</a>
                            </li>
                            
                            <li <?php if ($tpl["activo"] == "contacto"){ echo "class='active'"; } ?>>
                                <a href="<?php echo $_n ?>contacto.html">Contacto</a>
                            </li>

                        </ul>
                        <ul class="nav navbar-nav social-nav navbar-right">
                            <li>
                                <a href="https://www.facebook.com/AgrogenOficial/" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right mainMenu botones navbar-factura" >
                            <li> <a href="#" class="thm-btn hvr-3 cw">Proveedores</a>
                                <ul class="sub-menu">
                                    <li><a href="http://cfdiee.com/ValidadorAgrogen/AGR920618218?panel=1" target="_blank">Validación de facturas proveedores</a>
                                    </li>
                                    <li><a href="descargas/manual-validacion.pdf" target="_blank">Manuales</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="http://sistema.agrogen.com.mx//" class="thm-btn bgAlt hvr-3  cw" target="_blank">
                                    Acceso a Clientes
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- header end -->

        <?php include $tpl["contenido"]; ?>

        <!-- footer start -->        
        <footer>

            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 clearfix mb-sm-50">
                            <div class="fooler-col f1">
                                <h2 class="footer-title">Enlaces de interés</h2>
                                <ul>
                                    <li>
                                        <a href="directorio.html" class="thm-btn hvr-3 bg1 cw btn-nv text-center" target="_blank">
                                            Directorio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="descargas/privacidadagrogen.pdf" target="_blank" class="thm-btn hvr-3 bg1 cw btn-nv text-center">
                                            Aviso de privacidad
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 mb-sm-50">
                            <div class="footer-contact">
                                <h2 class="footer-title">Planta Querétaro</h2>
                                <h3>Carr. a Tlacote El Bajo, km. 5.5 Querétaro, Qro. C.P. 76000</h3>
                                <ul>
                                    <li><i class="fa fa-phone-square"></i> Tel. (442) 238 0000</li>
                                    <li><i class="fa fa-phone-square"></i> Lada 01 800 111 0038</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 mb-sm-50">
                            <div class="footer-contact">
                                <h2 class="footer-title">Oficinas México</h2>
                                <h3>Andrés Bello No. 45 piso 13 Polanco, Chapultepec C.P.11560 Ciudad de México</h3>
                                <ul>
                                    <li><i class="fa fa-phone-square"></i> Tel. (55) 5246 4400</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-contact f1">
                                <h2 class="footer-title">Facturas Proveedores</h2>
                                <ul class="mt-0">
                                    <li>
                                        <a href="http://cfdiee.com/ValidadorAgrogen/AGR920618218?panel=1" class="thm-btn hvr-3 bg1 cw btn-nv text-center" target="_blank">
                                            Subir factura
                                        </a>                                        
                                    </li>
                                </ul>
                                <br>
                                <a href="descargas/manual-validacion.pdf" class="footer-enlace" target="_blank">Manual de validación de XML</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom f1">
                <div class="container">
                    <p>Derechos Reservados ® 2008-2011, AGROGEN, S.A. DE C.V. </p>
                </div>
            </div>
        </footer>
        <!-- footer end -->
    </div>
    <!-- page-wrapper end -->
    <div class="back2Top bg1"> <i class="fa fa-angle-up fa-2x cw"></i>
    </div>
    <script src="<?php echo $_n ?>js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo $_n ?>js/html5lightbox/html5lightbox.js"></script>
    <script src="<?php echo $_n ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $_n ?>js/jquery.enllax.min.js"></script>
    <script src="<?php echo $_n ?>js/isotope.js"></script>
    <script src="<?php echo $_n ?>js/owl.carousel.js"></script>
    <script src="<?php echo $_n ?>js/main.js"></script>
</body>

</html>