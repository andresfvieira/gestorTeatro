<?php $__env->startSection('title', 'Proximos eventos'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/css/nuevas-reservas.css'); ?>
<!-- http://localhost/TeatroGest/public/nuevas-reservas -->
<?php $__env->startSection("main"); ?>

<main class="flex-grow bg-white">
    <div x-data="{ openCiudades: false, openTipo: false, openFiltros: false, openAforo: false }" class="flex flex-col items-center min-w-[320px] gap-4 lg:items-start lg:flex-row">
        <!-- Sidebar de filtros -->
        <aside class="w-52 px-2 shadow-md">
            <h2 id="h2" @click="openFiltros = !openFiltros">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M9 5a1 1 0 1 0 0 2a1 1 0 0 0 0-2M6.17 5a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 0 1 0-2zM15 11a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-1.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2zM9 17a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2z" />
                </svg>
                Filtros
            </h2>

            <form method="GET" action="<?php echo e(route('buscar-sala')); ?>" class="space-y-0 mb-2 pl-1">
                <!-- Ciudades -->
                <div>
                    <h3 id="h3" class="flex gap-1 items-center" @click="openCiudades = !openCiudades">
                        Ciudades
                        <span x-show="!openCiudades" class="text-[#990000]"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18 10h-4V6a2 2 0 0 0-4 0l.071 4H6a2 2 0 0 0 0 4l4.071-.071L10 18a2 2 0 0 0 4 0v-4.071L18 14a2 2 0 0 0 0-4" />
                            </svg></span>
                        <span x-show="openCiudades"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
                                <path fill="currentColor" d="M2 15.99c0-1.69 1.38-3.06 3.06-3.06h21.85c1.69 0 3.06 1.38 3.06 3.06c0 1.69-1.38 3.06-3.06 3.06H5.06C3.38 19.05 2 17.67 2 15.99" />
                            </svg></span>
                    </h3>
                    <div x-show="openCiudades" x-transition>
                        <div class="mb-2">
                            <!-- <h3 id="h3">Equipamiento</h3> -->
                            <input type="text" name="localidad" value="<?php echo e(request()->input('localidad')); ?>" class="w-full border rounded p-1 mr-2" placeholder="Localidad">
                        </div>
                        <?php $__currentLoopData = ['Madrid', 'Barcelona', 'Sevilla', 'Málaga', 'Granada', 'Huelva', 'Valencia', 'Cádiz', 'Tarragona', 'Cádiz', 'Salamanca', 'León', 'Jaén']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ciudad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="block text-sm text-gray-600">
                            <input type="checkbox" name="ciudades[]" value="<?php echo e($ciudad); ?>" class="mr-2">
                            <?php echo e($ciudad); ?>

                        </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Tipo de sala -->
                <div>
                    <h3 id="h3" class="flex gap-1 items-center" @click="openTipo = !openTipo">
                        Tipo de sala
                        <span x-show="!openTipo" class="text-[#990000]"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18 10h-4V6a2 2 0 0 0-4 0l.071 4H6a2 2 0 0 0 0 4l4.071-.071L10 18a2 2 0 0 0 4 0v-4.071L18 14a2 2 0 0 0 0-4" />
                            </svg></span>
                        <span x-show="openTipo"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
                                <path fill="currentColor" d="M2 15.99c0-1.69 1.38-3.06 3.06-3.06h21.85c1.69 0 3.06 1.38 3.06 3.06c0 1.69-1.38 3.06-3.06 3.06H5.06C3.38 19.05 2 17.67 2 15.99" />
                            </svg></span>
                    </h3>

                    <div x-show="openTipo" x-transition>
                        <?php $__currentLoopData = ['Obra', 'Ensayo']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="block text-sm text-gray-600">
                            <input type="radio" name="tipo" value="<?php echo e(strtolower($tipo)); ?>" class="mr-2">
                            <?php echo e($tipo); ?>

                        </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Capacidad (AFORO) -->
                <div>
                    <h3 id="h3" class="flex gap-1 items-center" @click="openAforo = !openAforo">
                        Aforo
                        <span x-show="!openAforo" class="text-[#990000]"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18 10h-4V6a2 2 0 0 0-4 0l.071 4H6a2 2 0 0 0 0 4l4.071-.071L10 18a2 2 0 0 0 4 0v-4.071L18 14a2 2 0 0 0 0-4" />
                            </svg></span>
                        <span x-show="openAforo"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
                                <path fill="currentColor" d="M2 15.99c0-1.69 1.38-3.06 3.06-3.06h21.85c1.69 0 3.06 1.38 3.06 3.06c0 1.69-1.38 3.06-3.06 3.06H5.06C3.38 19.05 2 17.67 2 15.99" />
                            </svg></span>
                    </h3>
                    <?php $__currentLoopData = ['10' => 'Hasta 10 personas', '20' => 'Hasta 20 personas', '30' => 'Hasta 30 personas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label class="block text-sm text-gray-600" x-show="openAforo">
                        <input type="radio" name="capacidad" value="<?php echo e($valor); ?>" class="mr-2">
                        <?php echo e($label); ?>

                    </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- + Filtros -->
                <div class="mt-4">
                    <h3 id="h3" class="flex gap-1 items-center" @click="openFiltros = !openFiltros">
                        Filtros
                        <span x-show="!openFiltros" class="text-[#990000]"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18 10h-4V6a2 2 0 0 0-4 0l.071 4H6a2 2 0 0 0 0 4l4.071-.071L10 18a2 2 0 0 0 4 0v-4.071L18 14a2 2 0 0 0 0-4" />
                            </svg></span>
                        <span x-show="openFiltros"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
                                <path fill="currentColor" d="M2 15.99c0-1.69 1.38-3.06 3.06-3.06h21.85c1.69 0 3.06 1.38 3.06 3.06c0 1.69-1.38 3.06-3.06 3.06H5.06C3.38 19.05 2 17.67 2 15.99" />
                            </svg></span>
                    </h3>
                    <div x-show="openFiltros" x-transition class="pl flex flex-col gap-1">
                        <!-- Equipamiento -->
                        <div>
                            <!-- <h3 id="h3">Equipamiento</h3> -->
                            <input type="text" name="equipamiento" value="<?php echo e(request()->input('equipamiento')); ?>" class="w-full border rounded p-1 mr-2" placeholder="Equipamiento">
                        </div>

                        <!-- Nombre del teatro -->
                        <div>
                            <!-- <h3 id="h3">Nombre del teatro</h3> -->
                            <input type="text" name="nombre" value="<?php echo e(request()->input('nombre')); ?>" class="w-full border rounded p-1" placeholder="Nombre del teatro">
                        </div>

                        <!-- Dirección -->
                        <div>
                            <!-- <h3 id="h3">Dirección</h3> -->
                            <input type="text" name="direccion" value="<?php echo e(request()->input('direccion')); ?>" class="w-full border rounded p-1" placeholder="Dirección">
                        </div>

                        <!-- Nombre de sala -->
                        <div>
                            <!-- <h3 id="h3">Nombre de sala</h3> -->
                            <input type="text" name="nombre_sala" value="<?php echo e(request()->input('nombre_sala')); ?>" class="w-full border rounded p-1" placeholder="Nombre de sala">
                        </div>
                    </div>
                </div>
                <div class="w-full text-center">
                    <!-- Botón de búsqueda -->
                    <button type="submit" class="button-primary-auto mt-2 w-[61.97]">
                        <div class="flex justify-center">
                            <svg width="50" height="18" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35 35L27.75 27.75M31.6667 18.3333C31.6667 25.6971 25.6971 31.6667 18.3333 31.6667C10.9695 31.6667 5 25.6971 5 18.3333C5 10.9695 10.9695 5 18.3333 5C25.6971 5 31.6667 10.9695 31.6667 18.3333Z" stroke="white" stroke-width="2.56" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </button>
                </div>
            </form>
        </aside>

        <!-- Resultados -->
        <section class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 3xl:grid-cols-5 4xl:grid-cols-6">
            <?php $__currentLoopData = $espacios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $espacio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="relative h-[150px] md:h-[180px] group cursor-pointer" tabindex="0">
                <div class="bg-white rounded-xl shadow p-3 border-t-4 border-[#990000] lg:h-[180px] lg:w-[280px]">
                    <div class="lg:h-[100px]">
                        <div class="flex justify-between gap-4">
                            <h4 class="text-lg font-semibold text-[#990000] items-center justify-between truncate"><?php echo e($espacio->nombre); ?>

                            </h4>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="text-gray-800 group-hover:hidden" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m16.577 20l-5.767-5.766a5.035 5.035 0 0 1-6.336-7.76a5.035 5.035 0 0 1 7.761 6.335L18 18.576L16.577 20ZM8.034 7.014a3.02 3.02 0 1 0-.004 6.04a3.02 3.02 0 0 0 .004-6.04ZM19 11h-2V9h-2V7h2V5h2v2h2v2h-2v2Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="text-gray-500 hidden group-hover:block" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m16.577 20l-5.767-5.766a5.035 5.035 0 0 1-6.336-7.76a5.035 5.035 0 0 1 7.761 6.335L18 18.576L16.577 20ZM8.034 7.014a3.02 3.02 0 1 0-.004 6.04a3.02 3.02 0 0 0 .004-6.04ZM21 9h-6V7h6v2Z" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-700">Localidad: <?php echo e($espacio->localidad); ?></p>
                        <p class="text-sm text-gray-700 truncate">Dirección: <?php echo e($espacio->direccion); ?></p>
                    </div>
                    <div class="mt-3 flex items-center justify-between">
                        <!-- Botón con Mapa y Flecha -->
                        <a href="<?php echo e(route('detalle-espacio',['id'=> $espacio->idespacios] )); ?>" class="inline-flex items-center button-filtro-a-reserva">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 100 100" class="svg-botones">
                                <path fill="currentColor" d="M91.967 7.961c0-.016.005-.031.005-.047a2.733 2.733 0 0 0-2.73-2.733H39.559v.011L8.031 36.721h-.003v55.365h.003v.001a2.735 2.735 0 0 0 2.734 2.731h78.479a2.73 2.73 0 0 0 2.663-2.15h.06v-.536l.004-.044c.002-.022-.004-.029-.004-.044zm-24.328 7.177H82.01v24.597L63.897 21.621zM39.57 39.453a2.73 2.73 0 0 0 2.722-2.73V15.138H61.88l-27.17 47.06l-16.725-16.725v-6.02zM17.985 84.862V52.527L32.128 66.67L21.626 84.862zm9.4 0l33.93-58.769l20.696 20.696v38.073z" />
                                <path fill="currentColor" d="M62.03 45.576c-6.645 0-12.026 5.387-12.026 12.027c0 2.659.873 5.109 2.334 7.1l7.759 13.439q.069.142.157.271l.016.027l.004-.002a2.16 2.16 0 0 0 3.405.132l.02.011l.075-.129a2.3 2.3 0 0 0 .287-.497l7.608-13.178a11.96 11.96 0 0 0 2.39-7.175c-.003-6.639-5.384-12.026-12.029-12.026M61.911 63.7a5.924 5.924 0 0 1-5.926-5.925a5.926 5.926 0 1 1 5.926 5.925" />
                            </svg>
                            <svg class="ml-1 w-3 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Detalle aparece abajo, ligeramente a la derecha -->
                <div class="contenedor-mas-detalles top-[100px] left-[140px] -translate-x-1/4 mt-2 shadow-lg group-hover:opacity-100 group-focus-within:opacity-100">
                    <p><strong>Nombre:</strong> <?php echo e($espacio->nombre); ?></p>
                    <p><strong>Sala:</strong> <?php echo e($espacio->nombre_sala); ?></p>
                    <p><strong>Direccion:</strong> <?php echo e($espacio->direccion); ?></p>
                    <p><strong>Tel:</strong> <?php echo e($espacio->telefono); ?></p>
                    <p><strong>Tipo:</strong> <?php echo e($espacio->tipo); ?></p>
                    <p><strong>Capacidad:</strong> <?php echo e($espacio->capacidad); ?></p>
                    <p><strong>Equipamiento:</strong> <?php echo e($espacio->equipamiento); ?></p>
                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>


    </div>
</main>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/nuevas-reservas.js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Victor\Documents\GitHub\TeatroGest\resources\views/nuevas-reservas.blade.php ENDPATH**/ ?>