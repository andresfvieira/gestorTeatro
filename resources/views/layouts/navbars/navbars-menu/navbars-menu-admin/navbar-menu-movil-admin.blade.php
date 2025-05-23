<div x-show="abrir"
        x-transition
        class="absolute top-full left-0 w-full bg-white shadow-md rounded-b-xl md:hidden flex flex-col items-center gap-4 pb-4 px-8 z-10">
        <a href="{{ url('/') }}" class="animation-scale"><svg width="20" height="20" class="svg-home-navbar" viewBox="0 0 42 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.6667 35.4167V22.9167H25V35.4167H35.4167V18.75H41.6667L20.8333 0L0 18.75H6.25V35.4167H16.6667Z" fill="#990000" />
            </svg>
        </a>
        <span class="navbar-text text-center">
            <span class="block">Bienvenido <span class="font-semibold">{{ session('nombre_rol') }}</span></span>
            <span class="block text-[#990000]">{{ session('usuario') }}</span>
        </span>
        <div class="flex w-full">
            <!-- Menú desplegable móvil: Reservas -->
            <details class="w-full text-center">
                <summary class="cursor-pointer text-[#990000] font-semibold py-2">Reservas</summary>
                <div class="flex flex-col items-center pl-4">
                    <a href="{{ url('buscar-sala') }}" class="hover:text-[#990000] py-1 list-style-circle">Nuevas Reservas</a>
                    <a href="{{ url('buscar-reservas') }}" class="hover:text-[#990000] py-1 list-style-circle">Gestión reservas</a>
                </div>
            </details>

            <!-- Menú desplegable móvil: Salas -->
            <details class="w-full self-start text-center">
                <summary class="cursor-pointer text-[#990000] font-semibold py-2">Salas</summary>
                <div class="flex flex-col pl-4">
                    <a href="{{ url('busquedas-salas') }}" class="hover:text-[#990000] py-1 list-style-circle">Búsquedas Salas</a>
                    <a href="{{ url('modificar-salas') }}" class="hover:text-[#990000] py-1 pr-3 list-style-circle">Modificar Salas</a>
                    <a href="{{ url('gestion-salas') }}" class="hover:text-[#990000] py-1 list-style-circle">Creación Sala</a>
                </div>
            </details>
        </div>

        <a href="{{ url('proximos-eventos') }}" class="text-[#990000] font-semibold">Próximos eventos</a>
        <a href="{{ url('faq') }}" class="text-[#990000] font-semibold">FAQ</a>
        <a href="{{ route('salir') }}" class="button-primary-auto w-full text-center">Cerrar sesión</a>
    </div>
