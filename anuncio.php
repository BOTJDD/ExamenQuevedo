<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
    ?>
    <main class="contenedor seccion contenido-centrado"> 
        <h1>Casa En Venta Frente Al Bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
            <p>In incididunt ad minim magna fugiat cupidatat. Non et adipisicing eiusmod ullamco deserunt tempor nulla Lorem. Enim fugiat incididunt ut do ullamco magna aliqua quis. Enim enim Lorem in dolor nisi magna irure. Ex in pariatur Lorem do elit et cillum cupidatat cupidatat nulla.Eu nulla Lorem deserunt quis adipisicing excepteur. Commodo anim nisi reprehenderit non nostrud voluptate pariatur in fugiat deserunt amet do dolore excepteur. Est aliqua culpa dolor occaecat dolor quis irure consequat aute. Ut consequat dolore mollit mollit deserunt ullamco.</p>
            <p>Incididunt mollit minim enim Lorem pariatur. In magna irure officia labore esse est velit cillum. Officia in officia laborum duis id. Incididunt et commodo proident velit minim duis nostrud consectetur culpa laborum duis minim. Duis adipisicing consequat id quis consectetur anim aute magna laborum quis do. Laboris commodo est aute non culpa reprehenderit elit officia ea. Minim reprehenderit ex qui laboris.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellendus distinctio expedita fugit quia dolorum! Amet eos voluptas voluptates? Quisquam necessitatibus ut voluptas aspernatur tenetur recusandae eos vel magni fugiat.</p>
        </div>
    </main>
    <?php incluirTemplate('footer');?>