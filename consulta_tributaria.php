<?php
session_start();
$cedula = $_SESSION['documento'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dian | Obligaciones Tributarias</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/factura.css">

    <script src="https://kit.fontawesome.com/f19eccc197.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <main>
        <div class="cab">
            <img id="logo" src="/assets/img/logo.png" alt="" srcset="">
            <hr>
        </div>


        <div class="factura">
            <div class="textF">Factura Electrónica</div>
            <a>Serie: HET9</a>
            <a>Folio: 1279</a>
            <a>Fecha consulta Factura: <?php $fecha_actual = date("d-m-Y");
            echo "$fecha_actual";
            ?> </a>
        </div>
  
        <div class="datosC">
    <h2>Datos del Contribuyente</h2>
    <a>Número Documento: <?php echo " ".$cedula; ?> </a>
    <div class="impuestos">Impuestos en Mora</div>
    
   <center><table style="text-aling:center;">
        <tr >
            <th><center>Impuesto</center></th>
            <th><center>Detalle</center></th>
        </tr>
        <tr>
            <td>$8.560</td>
            <td> <i id="icono" class="fa-solid fa-circle-info" data-bs-toggle="popover" title="Consulta Impuestos" data-bs-content="
            Tiene un saldo pendiente de $8.560 N° Factura: 0157660001574"></i></td>
        </tr>
        <tr>
            <td>$5.725</td>
            <td><i id="icono" class="fa-solid fa-circle-info" data-bs-toggle="popover" title="Consulta Impuestos" data-bs-content="
            Tiene un saldo pendiente de $5.725 N° Factura: 0287652302247  "></i></td>
        </tr>
        <tr>
            <td>$4.754</td>
            <td><i id="icono" class="fa-solid fa-circle-info" data-bs-toggle="popover" title="Consulta Impuestos" data-bs-content="
            Tiene un saldo pendiente de $4.754 N° Factura: 00047851770 "></i></td>
        </tr>
        <tr>
            <td>$1.250</td>
            <td><i id="icono" class="fa-solid fa-circle-info" data-bs-toggle="popover" title="Consulta Impuestos" data-bs-content=" 
            Tiene un saldo pendiente de $1.250 N° Factura: 0745689412563"></i></td>
        </tr>
      
    </table> 

    <div class="total">
        <a>Total a Pagar: $20.280
        <i id="icono" class="fa-solid fa-question" data-bs-toggle="popover" title="Saldo a Pagar" data-bs-content=" 
            Este valor corresponde a la suma de todos los impuestos adeudados hasta la fecha: <?php echo "$fecha_actual"; ?> "></i>
        </a>
    </div>
    <div class="pagar" style="margin-top:50px;">
    <i class="fa-solid fa-file-invoice"></i><br>
    <form action="pagar.php" method="post">

    <button type="submit" class="btn btn-success">Realizar Pago</button>

    </form>
    </div>

</center>

    <div class="aviso">
        <!-- <h2>¡Aviso Importante!</h2>
        <h4>Ignorar esta Factura Electronica despues de ser generada iniciará automaticamente un proceso administrativo para el embargo de bienes y cuentas por obligaciones tributarias morosas.
    <hr> -->
        Ley 1437 De 2011<br>Por la cual se expide el Código de Procedimiento Administrativo y de lo Contencioso Administrativo.
        </h4>
    </div>
    
   
</div>
       
    </main>
    
    <footer class="he_footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-12 col-sm-12 split screen-lg logos">
                    <div class="logo">
                        <a href="https://www.gov.co">
                            <img src="https://www.dian.gov.co/imagenes/logo_footer.png" alt="logo">
                        </a>
                    </div>
                    <div class="logo_co">
                        <a href="https://www.colombia.co">
                            <img src="https://www.dian.gov.co/imagenes/logo_co_footer.png" alt="logo co">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-12 col-sm-12 split">
                    <h4>Dirección de Impuestos y Aduanas Nacionales</h4>
                    <h7>NIT: 800.197.268-4</h7>
                    <p></p>
                    <p>
                        Dirección: Sede principal | Bogotá, Nivel Central, carrera 8 Nº 6C - 38 Edificio San Agustín<br>
                        Código Postal: 111711<br>
                        Horario Contact Center: Lunes a Viernes 8:00 a.m. a 7:00 p.m. y Sábados de 8:00 a.m. a 12:00 m.
                    </p>
                    <ul class="he_footer_redes">
                        <li><a href="https://twitter.com/DIANColombia" target="_blank"><i aria-hidden="true"><img
                                        src="https://www.dian.gov.co/imagenes/X-54x54C.png" alt="Twitter"></i></a>
                            <div class="fa_text"></div>
                        </li>
                        <li><a href="https://www.youtube.com/channel/UCkaPJ8afIoa_RDKEHaQIxrw" target="_blank"><i
                                    aria-hidden="true"><img src="https://www.dian.gov.co/imagenes/youtube.png" alt="Youtube"></i></a>
                            <div class="fa_text"></div>
                        </li>
                        <li><a href="https://www.linkedin.com/company/diancolombia/" target="_blank"><i
                                    aria-hidden="true"><img src="https://www.dian.gov.co/imagenes/linkedin.png" alt="Linkedin"></i></a>
                            <div class="fa_text"></div>
                        </li>
                        <li><a href="https://www.facebook.com/DIANCol/" target="_blank"><i aria-hidden="true"><img
                                        src="https://www.dian.gov.co/imagenes/facebook.png" alt="Facebook"></i></a>
                            <div class="fa_text"></div>
                        </li>
                        <li><a href="https://www.instagram.com/diancolombia/?hl=es-la" target="_blank"><i
                                    aria-hidden="true"><img src="https://www.dian.gov.co/imagenes/instagram.png" alt="Instagram"></i></a>
                            <div class="fa_text"></div>
                        </li>
                        <li><a href="https://www.tiktok.com/@diancolombia" target="_blank"><i aria-hidden="true"><img
                                        src="https://www.dian.gov.co/imagenes/Tiktok-54x54C.png" alt="Tiktok"></i></a>
                            <div class="fa_text"></div>
                        </li>
                    </ul>
                    <br>
                </div>
                <div class="col-lg-4 col-12 col-sm-12 no-split">
                    <h4><img src="https://www.dian.gov.co/imagenes/Phone.png" alt="Contacto"><i class="fa fa-phone"
                            aria-hidden="true"></i> Contacto</h4>
                    <h4><i class="fa fa-phone" aria-hidden="true"></i> Contact Center</h4>
                    <p>

                        57 601 307 8064 Línea de Contact Center atención de Impuestos<br>
                        57 601 307 8065 Línea de Contact Center atención de Aduanas<br>
                        Nivel central: PBX 601 7428973 / (+57) 310 3158107<br>
                        <!--Fax (57+1) 607 94 50<br>-->
                    </p>
                    <h4><strong><b>Servicio en Línea de Contacto</b></strong> <br></h4>
                    <a href="https://www.dian.gov.co/atencionciudadano/PQSRD/Paginas/Inicio.aspx"
                        style="text-decoration: underline;">PQSR y Denuncias</a> |
                    <!--<a href="https://webrtc.inconcertcc.com/DianCall/" target="_blank" style="text-decoration: underline;">Llamada en Línea</a> |-->
                    <a href="https://www.dian.gov.co/atencionciudadano/contactenos/Paginas/puntosdecontacto.aspx"
                        target="_blank" style="text-decoration: underline;">Puntos de contacto</a><br>
                    <a href="https://www.dian.gov.co/Documents/POLITICA_GENERAL_DE_SEGURIDAD_Y_PRIVACIDAD_DE_LA_INFORMACION.pdf"
                        style="text-decoration: underline;" target="_blank">Política de Seguridad de la
                        Información</a><br><b>
                        <p><!--<h4><i class="fa fa-phone" aria-hidden="true"></i> Contact Center: 057(1) 3556922</h4>-->
                            <a href="https://www.dian.gov.co/Paginas/Privacidad.aspx"
                                style="text-decoration: underline;" target="_blank">Política de privacidad y Términos de
                                uso</a><br><a
                                href="https://www.dian.gov.co/normatividad/Normatividad/Circular-000001-de-25-01-2019.pdf"
                                style="text-decoration: underline;" target="_blank">Política de tramiento de datos
                                personales</a> <br> <a
                                href="https://www.dian.gov.co/Paginas/Notificaciones-Judiciales-Formulario.aspx"
                                style="text-decoration: underline;" target="_blank">Notificaciones Judiciales</a> | <a
                                href="#" style="text-decoration: underline;" target="_blank">Mapa del sitio</a>
                        </p>
                    </b>
                </div><b>
                    <div class="col-lg-2 col-12 col-sm-12 no-split split-top screen-md-sm logos_movil">
                        <div class="logo">
                            <a href="https://www.gov.co">
                                <img src="https://www.dian.gov.co/imagenes/logo_footer.png" alt="logo">
                            </a>
                        </div>
                        <div class="logo_co">
                            <a href="https://www.colombia.co">
                                <img src="https://www.dian.gov.co/imagenes/logo_co_footer.png" alt="logo co">
                            </a>
                        </div>
                    </div>
                </b>
            </div><b>
            </b>
        </div><b>
        </b>
    </footer>

    <div class="overlay" style="display:none;">
  <div class="loader"></div>
</div>

<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>
    <script>
        document.getElementById('miFormulario').addEventListener('submit', function(event) {
  // Evitar que el formulario se envíe
  event.preventDefault();
  
  // Mostrar la ventana de carga
  document.getElementById('overlay').style.display = 'block';

  // Aquí podrías agregar lógica para enviar el formulario, por ejemplo, AJAX
  // Una vez completado el proceso que desencadena la carga, puedes ocultar la ventana de carga nuevamente
});

    </script>
</body>

</html>