<header class="web_header">
    <div class="web_header_cuerpo">
        <a href="{{ route('home') }}">
            <img class="logo" src="{{ asset('assets/imagen/logo.png') }}" alt="Logo">
        </a>

        <button class="web_menu_toggle" id="web_menu_toggle" aria-label="Abrir menú">
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav class="web_nav_menu" id="web_nav_menu">
            <div class="cabecera_sidebar">
                <button class="web_menu_toggle" id="web_menu_cerrar" aria-label="Cerrar menú">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <a href="{{ route('home') }}">
                    <img class="logo" src="{{ asset('assets/imagen/logo.png') }}" alt="Logo">
                </a>
            </div>
            <ul class="menu_principal">
                @foreach ($menus as $menu)
                    <li class="menu_item {{ $menu->children->count() ? 'tiene_hijos' : '' }}">
                        @if ($menu->children->count())
                            <button type="button" class="nav_link toggle_submenu">
                                {{ $menu->nombre }}
                                <i class="fa-solid fa-chevron-down icono_flecha"></i>
                            </button>
                            <ul class="submenu">
                                @foreach ($menu->children as $child)
                                    <li>
                                        <i class="fa-solid fa-circle fa-2xs"></i>
                                        <a href="{{ $child->url ? url($child->url) : '#' }}">{{ $child->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <a href="{{ $menu->url ? url($menu->url) : '#' }}" class="nav_link">
                                {{ $menu->nombre }}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="web_nav_overlay" id="web_nav_overlay"></div>
    </div>
</header>

<script>
    const toggleMenu = document.getElementById('web_menu_toggle');
    const navMenu = document.getElementById('web_nav_menu');
    const overlay = document.getElementById('web_nav_overlay');
    const closeMenu = document.getElementById('web_menu_cerrar'); // 👈 botón cerrar

    // 👉 Función reutilizable para cerrar el menú
    const cerrarMenu = () => {
        navMenu.classList.remove('active');
        overlay.classList.remove('active');
        document.querySelectorAll('.menu_item.submenu_abierto').forEach(item => {
            item.classList.remove('submenu_abierto');
        });
    };

    // Abrir / cerrar menú lateral
    toggleMenu.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        overlay.classList.toggle('active');
    });

    // Cerrar al hacer clic fuera o en el botón "X"
    overlay.addEventListener('click', cerrarMenu);
    closeMenu.addEventListener('click', cerrarMenu);

    // Toggle submenús (solo uno abierto a la vez)
    document.querySelectorAll('.toggle_submenu').forEach(btn => {
        btn.addEventListener('click', () => {
            const parent = btn.closest('.menu_item');
            const abierto = parent.classList.contains('submenu_abierto');

            document.querySelectorAll('.menu_item.submenu_abierto').forEach(item => {
                item.classList.remove('submenu_abierto');
            });

            if (!abierto) {
                parent.classList.add('submenu_abierto');
            }
        });
    });

    // Si se hace clic en un enlace normal → cerrar menú
    document.querySelectorAll('.menu_item:not(.tiene_hijos) .nav_link').forEach(link => {
        link.addEventListener('click', cerrarMenu);
    });
</script>
