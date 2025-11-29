<div x-data="{ open: @entangle('modal') }">
    <div x-show="open" class="modal">
        <div class="modal-content">
            <h2 class="text-xl font-bold">
                {{ $cita_id ? 'Editar Cita' : 'Crear Cita' }}
            </h2>

            <form wire:submit.prevent="guardar">
                <div>
                    <label>Solicita</label>
                    <select wire:model="usuario_solicita_id">
                        <option value="">-- Seleccionar --</option>
                        @foreach($users as $u)
                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Recibe</label>
                    <select wire:model="usuario_recibe_id">
                        <option value="">-- Seleccionar --</option>
                        @foreach($users as $u)
                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Sede</label>
                    <select wire:model="sede_id">
                        <option value="">-- Ninguna --</option>
                        @foreach($sedes as $s)
                        <option value="{{ $s->id }}">{{ $s->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Motivo</label>
                    <select wire:model="motivo_cita_id">
                        @foreach($motivos as $m)
                        <option value="{{ $m->id }}">{{ $m->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Fecha</label>
                    <input type="date" wire:model="fecha">
                </div>

                <div>
                    <label>Hora Inicio</label>
                    <input type="time" wire:model="hora_inicio">
                </div>

                <div>
                    <label>Hora Fin</label>
                    <input type="time" wire:model="hora_fin">
                </div>

                <button type="submit">Guardar</button>
            </form>

        </div>
    </div>
</div>
