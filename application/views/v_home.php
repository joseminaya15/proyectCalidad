<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="Evento Smartbytes">
    <meta name="keywords"               content="Evento Smartbytes">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="March 21, 2019"/>
    <meta name="language"               content="en">
    <meta name="theme-color"            content="#253646">
	<title>Evento Smartbytes</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.theme.default.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>opensans.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <div class="js-header">
        <div class="js-header--container">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/logo-richi.jpg">
            </div>
            <div class="js-header--right">
                <p>Calidad de Software</p>
            </div>
        </div>
    </div>
    <section id="home">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="js-fondo fondo1"></div>
                <div class="js-container">
                    <div class="js-home js-flex jm-home--one">
                        <div class="js-contenido">
                            <h2>Sistema de Gesti&oacute;n de Calidad.</h2>
                            <p>M&eacute;tricas de calidad basado en la estandarizaci&oacute;n de c&oacute;digo fuente de clases.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="js-fondo fondo2"></div>
                <div class="js-container">
                    <div class="js-home js-flex jm-home--three">
                        <div class="js-contenido">
                            <h2>Sistema de Gesti&oacute;n de Calidad.</h2>
                            <p>M&eacute;tricas de calidad basado en la estandarizaci&oacute;n de c&oacute;digo fuente de clases.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="js-fondo fondo3"></div>
                <div class="js-container">
                    <div class="js-home js-flex jm-home--two">
                        <div class="js-contenido">
                            <h2>Sistema de Gesti&oacute;n de Calidad.</h2>
                            <p>M&eacute;tricas de calidad basado en la estandarizaci&oacute;n de c&oacute;digo fuente de clases.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="register" class="js-section">
        <div class="js-container">
            <div class="jm-metricas">
                <div class="js-title">
                    <h2>Registre sus m&eacute;tricas</h2>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="js-input">
                            <label for="text">Limite Superior*</label>
                            <input type="text" id="limitesuperior" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="js-input">
                            <label for="text">Limite Inferior*</label>
                            <input type="text" id="limiteinferior">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="js-input">
                            <label for="text">Valor esperado*</label>
                            <input type="text" id="valoresperado">
                        </div>
                    </div>
                </div>
                <div class="js-section--button">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-login" onclick="sendMetricas()">Registrar M&eacute;tricas</button>
                </div>
            </div>
            <div class="jm-valores active">
                <div class="js-title">
                    <h2>Ingrese sus valores</h2>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="js-input">
                            <label for="text">Valor*</label>
                            <input type="text" id="valor" >
                        </div>
                    </div>
                </div>
                <div class="js-section--button">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-login" onclick="sendValores()">Registar valores</button>
                </div>
            </div>
        </div>
    </section>

    <div id="container"></div>

    <footer class="js-section p-t-20 p-b-20">
        <div class="js-container text-center js-flex">
            <div class="jm-left">
                <p>&copy;Copyright 2019 Jose Minaya - Pedro Yturrizaga - Sebastian Peredo.</p>
            </div>
        </div>
    </footer>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>inputmask/jquery.mask.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
</body>
</html>