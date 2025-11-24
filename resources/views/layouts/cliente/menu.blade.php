<div class="cliente_menu_pricipal">
    <a href="{{ route('cliente.home') }}" class="">
        <span><i class="fa-solid fa-address-card"></i>Perfil</span>
        <i class="fa-solid fa-chevron-right"></i>
    </a>

    <a href="{{ route('cliente.direccion') }}" class="">
        <span><i class="fa-solid fa-map-location"></i> Direcciones</span>
        <i class="fa-solid fa-chevron-right"></i>
    </a>

    <a href="{{ route('cliente.lote') }}" class="">
        <span><i class="fa-solid fa-border-all"></i> Mis Lotes</span>
        <i class="fa-solid fa-chevron-right"></i>
    </a>

    <form method="POST" action="{{ route('logout.cliente') }}">
        @csrf
        <a href="">
            <span><i class="fa-solid fa-power-off"></i> Cerrar</span>
        </a>
    </form>
</div>