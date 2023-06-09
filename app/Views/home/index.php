 <?php
    echo view('header/header');
    ?>

 <body>
    <?php
        echo view('nav/nav');
    ?>
     <div class="mx-auto" style="max-width: 1000px;">
         <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2 shadow p-3 mb-5 bg-white rounded" tabindex="0" style="max-width: 1000px;">
             <h4 id="scrollspyHeading1" class="Font-weight-bold text-center">¡Bienvenidos a Mi Portafolio!</h4>
             <p>Mi nombre es Alejandro Vazquez y soy un desarrollador web autodidacta con una pasión por crear hermosos y funcionales sitios web. Aunque todavía estoy en proceso de aprendizaje, he adquirido experiencia en el desarrollo web utilizando tecnologías como HTML, CSS, JavaScript y PHP.

                 Mis habilidades en JavaScript y PHP aún están en proceso de desarrollo, pero me apasiona aprender y mejorar para poder crear proyectos más avanzados y desafiantes en el futuro.

                 En mi portafolio, encontrarás una selección de mis proyectos más recientes y experimentales, que reflejan mi estilo y enfoque en la creación de sitios web limpios y modernos. Además, encontrarás información sobre mi experiencia y habilidades técnicas, así como detalles sobre mis proyectos anteriores.

                 Estoy emocionado de estar en el camino del aprendizaje y espero poder seguir mejorando y creciendo en mi carrera como desarrollador web. ¡Gracias por visitar mi portafolio y espero poder colaborar en algún proyecto contigo en el futuro!</p>

             <h4 id="scrollspyHeading1" class="Font-weight-bold text-center mt-5">Habilidades</h4>
             <p>...</p>
         </div>
     </div>

     <?php
        echo view('footer/footer')
        ?>
 </body>

 </html>