<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
    ?>
    <main class="contenedor seccion"> 
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>25 Años De Experiencia</blockquote>
                <p>Laboris duis magna magna reprehenderit laborum Lorem nisi esse sit aute dolor officia fugiat occaecat. Est culpa ex ea minim commodo sit. Cillum labore voluptate commodo in quis minim magna in aliqua consequat nulla ullamco sunt.Non labore eiusmod ipsum irure magna voluptate esse nulla aute ullamco sint deserunt cillum sint. Laborum veniam veniam est pariatur dolor velit dolore reprehenderit ut occaecat dolore incididunt ad fugiat. Velit Lorem deserunt ullamco quis in commodo cupidatat incididunt reprehenderit incididunt nostrud quis.</p>
                <p>Consequat culpa nulla officia sit. Consectetur mollit cupidatat aliqua ut nostrud. Adipisicing non commodo officia amet laboris tempor mollit nisi. Quis aliquip minim irure excepteur. Exercitation occaecat enim quis exercitation. Fugiat laborum cillum cillum qui minim aliquip sunt. Aliquip duis labore aliqua dolore culpa sunt Lorem. Ullamco laborum occaecat dolor laborum laborum anim consectetur id in. Id occaecat elit ipsum ut labore incididunt aliqua occaecat. Consectetur esse irure amet quis amet veniam dolor eu aliqua eiusmod ullamco do.</p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion"> 
        <h1>Mas Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Blue Lattel Es Un Elisir ewngkunwklicmdslqfnioew oqndmoiqwmdlkwqmaclksmndoqi coqkwnmdlkqmndlokwnqod</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Blue Lattel Es Un Elisir ewngkunwklicmdslqfnioew oqndmoiqwmdlkwqmaclksmndoqi coqkwnmdlkqmndlokwnqod</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Blue Lattel Es Un Elisir ewngkunwklicmdslqfnioew oqndmoiqwmdlkwqmaclksmndoqi coqkwnmdlkqmndlokwnqod</p>
            </div>
        </div>
    </section>
    <?php incluirTemplate('footer');?>