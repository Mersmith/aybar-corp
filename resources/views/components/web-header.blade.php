<div x-data="{ menuAbierto: false, submenu: null, scrollY: 0, ocultarBanner: false }" x-init="window.addEventListener('scroll', () => {
    ocultarBanner = window.scrollY > scrollY && window.scrollY > 30;
    scrollY = window.scrollY;
})" :class="{ 'web_header_contenedor': ocultarBanner }"
    x-effect="document.body.classList.toggle('no-scroll', menuAbierto)">

    <!-- Banner -->
    {{-- <div class="web_header_banner" :class="{ 'oculto': ocultarBanner }">
        @include('components.web-header-banner')
    </div> --}}

    <!-- Header -->
    <header class="web_header">
        <div class="web_header_cuerpo">

            <a href="{{ route('home') }}">
                <img class="logo" src="{{ asset('assets/imagen/logo.png') }}" alt="Logo">
            </a>

            <!-- Botón menú móvil -->
            <button class="web_menu_toggle" @click="menuAbierto = true" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>
            </button>

            <!-- Menú lateral -->
            <nav class="web_nav_menu" :class="{ 'active': menuAbierto }">

                <div class="cabecera_sidebar">
                    <button class="web_menu_toggle" @click="menuAbierto = false" aria-label="Cerrar menú">
                        <i class="fa-solid fa-xmark"></i>
                    </button>

                    <a href="{{ route('home') }}">
                        <img class="logo" src="{{ asset('assets/imagen/logo.png') }}" alt="Logo">
                    </a>
                </div>

                <ul class="menu_principal">
                    @foreach ($menus as $menu)
                        <li class="menu_item {{ $menu->children->count() ? 'tiene_hijos' : '' }}"
                            :class="{ 'submenu_abierto': submenu === {{ $menu->id }} }">
                            @if ($menu->children->count())
                                <button type="button" class="nav_link toggle_submenu"
                                    @click="submenu = submenu === {{ $menu->id }} ? null : {{ $menu->id }}">
                                    {{ $menu->nombre }}
                                    <i class="fa-solid fa-chevron-down icono_flecha"></i>
                                </button>
                                <ul class="submenu" x-show="submenu === {{ $menu->id }}" x-collapse>
                                    @foreach ($menu->children as $child)
                                        <li>
                                            <i class="fa-solid fa-circle fa-2xs"></i>
                                            <a href="{{ $child->url ? url($child->url) : '#' }}"
                                                @click="menuAbierto = false">
                                                {{ $child->nombre }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <a href="{{ $menu->url ? url($menu->url) : '#' }}" class="nav_link"
                                    @click="menuAbierto = false">
                                    {{ $menu->nombre }}
                                </a>
                            @endif
                        </li>
                    @endforeach

                    <li class="menu_item"><a href="/consulta-codigo-cliente"
                            class="boton_personalizado boton_personalizado_blanco_v2">CONSULTA TU CÓDIGO</a></li>

                    @guest
                        <li class="menu_item">
                            <a href="/ingresar" class="boton_personalizado boton_personalizado_amarillo_v2"><i class="fa-solid fa-user-circle"></i> MI PLATAFORMA
                                DIGITAL</a>
                        </li>
                    @else
                        @if (auth()->user()->rol === 'cliente')
                            <li class="menu_item">
                                <a href="{{ route('cliente.home') }}"
                                    class="boton_personalizado boton_personalizado_amarillo_v2"><i class="fa-solid fa-user-circle"></i> MI
                                    PLATAFORMA DIGITAL</a>
                            </li>

                            <li class="menu_item menu_cliente">
                                <a href="{{ route('cliente.lote') }}"
                                    class="boton_personalizado boton_personalizado_blanco_v2">MIS
                                    LOTES</a>
                            </li>

                            <li class="menu_item menu_cliente">
                                <a href="{{ route('cliente.direccion') }}"
                                    class="boton_personalizado boton_personalizado_blanco_v2">DIRECCION</a>
                            </li>                           

                            <li class="menu_item menu_cliente">
                                <form method="POST" action="{{ route('logout.cliente') }}">
                                    @csrf
                                    <button type="submit" class="boton_personalizado boton_personalizado_negro">
                                        SALIR
                                    </button>
                                </form>
                            </li>
                        @elseif (auth()->user()->rol === 'admin')
                            <li class="menu_item">
                                <a href="{{ route('admin.home') }}"
                                    class="boton_personalizado boton_personalizado_amarillo_v2">BACKOFFICE</a>
                            </li>
                        @elseif (auth()->user()->rol === 'socio')
                            <li class="menu_item">
                                <a href="{{ route('socio.home') }}"
                                    class="boton_personalizado boton_personalizado_blanco_v2">MI
                                    PERFIL</a>
                            </li>
                        @endif

                    @endguest

                </ul>
            </nav>

            <!-- Fondo oscuro -->
            <div class="web_nav_overlay" :class="{ 'active': menuAbierto }" @click="menuAbierto = false">
            </div>

        </div>
    </header>
</div>
