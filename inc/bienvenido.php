

<?php
if (!isset($_SESSION)) exit("<script>window.location.href = '../';</script>");
?>



        <div class="position-relative">
            

                <div class="img-settings">
                    <img src="img/fondo-inicio.jpg" alt="fondo-despensa" class="img-home">

                    <h3 class="text-center texto-usuario" >Bienvenido 
                        <?php inicia_sesion_segura();
                         echo $_SESSION["nombre_de_usuario"] . " ";?>
                    </h3>

                </div>
        </div>





