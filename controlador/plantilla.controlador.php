<?php
/*Este fragmento de código define una clase PlantillaControlador con un método cargarPlantilla() que se utiliza para cargar y mostrar una plantilla de vista almacenada en
el archivo "vista/plantilla.php". Esto es típico en el contexto de aplicaciones web basadas 
en PHP, donde se utilizan patrones de diseño MVC (Modelo-Vista-Controlador) para separar la 
lógica de negocio (controlador) de la presentación (vista).*/
    class PlantillaControlador{//clase
        public function cargarPlantilla(){//metodo
            include "vista/plantilla.php";
        }
    }
?>