<footer class="w-full mx-auto relative">
    <div class="contenedor-contacto-redes-footer flex justify-between items-center h-full">
        <!-- Contenedor izquierdo footer -->
        <div class="contenedor-redes space-y-3">
            <h3 class="text-[#990000]">TeatroGest</h3>
            <p>Redes sociales</p>
            <!-- Iconos de redes sociales -->
            <div class="contenedor-svg flex gap-[8px]">
                <?php
                $facebookSvg = file_get_contents(resource_path('svg/facebook.svg'));
                $instagramSvg = file_get_contents(resource_path('svg/instagram.svg'));
                $linkedinSvg = file_get_contents(resource_path('svg/linkedin.svg'));
                $youtubeSvg = file_get_contents(resource_path('svg/youtube.svg'));
                ?>

                <a href="https://facebook.com" class="animation-scale svg-redes"><?php echo $facebookSvg; ?></a>
                <a href="https://instagram.com" class="animation-scale svg-redes"><?php echo $instagramSvg; ?></a>
                <a href="https://linkedin.com" class="animation-scale svg-redes"><?php echo $linkedinSvg; ?></a>
                <a href="https://youtube.com" class="animation-scale svg-redes"><?php echo $youtubeSvg; ?></a>
            </div>
        </div>

        <!-- Contenedor derecho footer - contacto-->
        <div class="contenedor-contacto flex flex-col ml-14 items-end">
            <p class="font-semibold text-xl text-[#990000]">Contacto</p>
            <p class="m-0">956666666</p>
            <p class="m-0">appteatro@teatro.com</p>
            <p class="m-0">Av. de la paz 6, Sevilla, 41018</p>
        </div>
    </div>
    <!-- Logo central footer -->
    <div class="contenedor-logo-footer absolute left-1/2 transform -translate-x-1/2 bottom-[16px]">
        <img src="<?php echo e(asset('img/deco-footer.png')); ?>" alt="footer-icon" class="min-w-8 h-[35px]">
    </div>
</footer>
<?php /**PATH C:\Users\Victor\Documents\GitHub\prueba-laravel\resources\views/layouts/footer.blade.php ENDPATH**/ ?>