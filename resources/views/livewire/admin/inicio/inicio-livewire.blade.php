<div>
    <h3>Hola Admin</h3>

    <form method="POST" action="{{ route('logout.admin') }}">
        @csrf
        <button type="submit" class="text-red-600 hover:underline">
            Cerrar sesión
        </button>
    </form>
</div>
