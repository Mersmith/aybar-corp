@extends('layouts.web.layout-web')

@section('titulo', 'Libro de Reclamaciones')

@section('contenido')
<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">

        <div class="g_contenedor_columna">
            @include('partials.titulo-encabezado', [
            'titulo' => 'Libro de <span>Reclamaciones</span>',
            'descripcion' =>
            'Ponemos a tu disposición nuestro libro de reclamaciones, aplicativo de atención de reclamos y solicitudes
            en línea.',
            'alineacion' => 'center',
            'color' => 'color_1',
            ])

            @if (session('success'))
            <div class="g_alerta_succes">
                <i class="fa-solid fa-circle-check"></i>
                <div>{{ session('success') }}</div>
            </div>

            @if (session('formulario'))
            @php
            $f = session('formulario');
            @endphp

            <div class="contenedor_card_reclamacion">
                <h4>📄 Detalles de tu reclamo</h4>
                <p><strong>ID:</strong> {{ $f->ticket }}</p>
                <p><strong>Ticket N°:</strong> {{ $f->codigo }}</p>
                <p><strong>Fecha de envío:</strong> {{ $f->created_at->format('d/m/Y H:i') }}</p>
                <p><strong>Tipo de solicitud:</strong> {{ ucfirst($f->tipo_pedido) }}</p>
                <p><strong>Nombre:</strong> {{ $f->nombre }} {{ $f->apellido_paterno }}
                    {{ $f->apellido_materno }}</p>
                <p><strong>Descripción:</strong> {{ $f->descripcion }}</p>
            </div>
            @endif
            @else
            @if ($errors->any())
            <div class="g_alerta_error">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <strong>Por favor corrige los siguientes errores:</strong>
            </div>
            @endif

            <form action="{{ route('reclamaciones.enviar') }}" method="POST" class="g_gap_pagina formulario">
                @csrf

                <div class="g_panel">
                    <div class="g_panel_titulo">
                        <h2>1.- Información del consumidor reclamante</h2>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_top_20 g_columna_4">
                            <label>Nombres</label>
                            <input type="text" name="nombre" placeholder="" value="{{ old('nombre') }}" required>
                            @error('nombre')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="g_margin_top_20 g_columna_4">
                            <label>Apellido paterno</label>
                            <input type="text" name="apellido_paterno" placeholder=""
                                value="{{ old('apellido_paterno') }}" required>
                            @error('apellido_paterno')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="g_margin_top_20 g_columna_4">
                            <label>Apellido manterno</label>
                            <input type="text" name="apellido_materno" placeholder=""
                                value="{{ old('apellido_materno') }}" required>
                            @error('apellido_materno')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_top_20 g_columna_4">
                            <label>Domicilio</label>
                            <input type="text" name="domicilio" placeholder="" value="{{ old('domicilio') }}" required>
                            @error('domicilio')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="g_margin_top_20 g_columna_4">
                            <label>Teléfono</label>
                            <input type="text" name="telefono" placeholder="(opcional)" value="{{ old('telefono') }}">
                            @error('telefono')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="g_margin_top_20 g_columna_4">
                            <label>Correo electrónico</label>
                            <input type="email" name="email" placeholder="(opcional)" value="{{ old('email') }}">
                            @error('email')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_top_20 g_columna_4">
                            <label>Tipo de documento</label>
                            <select name="tipo_documento" required>
                                <option value="" selected disabled>-- Selecciona --</option>
                                <option value="dni" {{ old('tipo_documento')=='dni' ? 'selected' : '' }}>DNI
                                </option>
                                <option value="ruc" {{ old('tipo_documento')=='ruc' ? 'selected' : '' }}>RUC
                                </option>
                                <option value="ce" {{ old('tipo_documento')=='ce' ? 'selected' : '' }}>Carné de
                                    Extranjería
                                </option>
                            </select>
                            @error('tipo_documento')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="g_margin_top_20 g_columna_4">
                            <label>Número de Documento</label>
                            <input type="text" name="numero_documento" placeholder=""
                                value="{{ old('numero_documento') }}" required>
                            @error('numero_documento')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="g_panel">
                    <div class="g_panel_titulo">
                        <h2>2.- Identificación del bien contratado</h2>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_top_20 g_columna_12">
                            <label><strong class="g_negrita">Tipo de bien contratado</strong></label>
                            <label>
                                <input type="radio" name="tipo_bien_contratado" value="producto" {{
                                    old('tipo_bien_contratado', 'producto' )=='producto' ? 'checked' : '' }} required>
                                Producto
                            </label>
                            <label>
                                <input type="radio" name="tipo_bien_contratado" value="servicio" {{
                                    old('tipo_bien_contratado')=='servicio' ? 'checked' : '' }} required>
                                Servicio
                            </label>
                            @error('tipo_bien_contratado')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_top_20">
                            <label>Monto Reclamado</label>
                            <input type="number" step="0.01" name="monto_reclamado" placeholder="(opcional)"
                                value="{{ old('monto_reclamado') }}">
                            @error('monto_reclamado')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_top_20">
                            <label>Descripción del producto o servicio</label>
                            <textarea name="descripcion" placeholder="" required
                                rows="4">{{ old('descripcion') }}</textarea>
                            @error('descripcion')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="g_panel">
                    <div class="g_panel_titulo">
                        <h2>3.- Detalle de la reclamación y pedido del consumidor</h2>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_top_20">
                            <label><strong class="r_negrita">Tipo de solicitud:</strong></label>
                            <label>
                                <input type="radio" name="tipo_pedido" value="reclamo" {{ old('tipo_pedido', 'reclamo'
                                    )=='reclamo' ? 'checked' : '' }} required>
                                Reclamo(1)
                            </label>
                            <label>
                                <input type="radio" name="tipo_pedido" value="queja" {{ old('tipo_pedido')=='queja'
                                    ? 'checked' : '' }} required>
                                Queja(2)
                            </label>
                            @error('tipo_pedido')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_top_20">
                            <label>Detalle del reclamo o queja</label>
                            <textarea name="detalle" placeholder="" required rows="4">{{ old('detalle') }}</textarea>
                            @error('detalle')
                            <div class="error">{{ $message }}</div>
                            @enderror

                            <div class="g_margin_top_10">
                                <p><strong class="g_negrita">(1) RECLAMO:</strong> Disconformidad relacionada a los
                                    productos o servicios.</p>
                                <p><strong class="g_negrita">(2) QUEJA:</strong> Disconformidad no relacionada a los
                                    productos o servicios; o, malestar o descontento respecto a la atención al público.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_top_20">
                            <label>Pedido del consumidor</label>
                            <textarea name="pedido" placeholder="" required rows="4">{{ old('pedido') }}</textarea>
                            @error('pedido')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_top_20">
                            <div>
                                <label>
                                    <input type="checkbox" name="conformidad" value="1" {{ old('conformidad')
                                        ? 'checked' : '' }}>
                                    Me encuentro conforme con los términos de mi reclamo o queja.
                                </label>
                            </div>
                            @error('conformidad')
                            <div class="error">{{ $message }}</div>
                            @enderror

                            <div class="g_margin_top_10">
                                <p>* La formulación del reclamo no impide acudir a otras vías de solución de
                                    controversias
                                    ni es requisito previo para interponer una denuncia ante el INDECOPI.</p>
                                <p>* El proveedor deberá dar respuesta al reclamo en un plazo no mayor a quince (15)
                                    días
                                    hábiles,
                                    el cual es improrrogable.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="g_margin_top_20">
                    <div class="formulario_botones">
                        <button type="submit" class="guardar">
                            <i class="fa-solid fa-paper-plane"></i> Enviar Reclamo
                        </button>
                    </div>
                </div>
            </form>
            @endif
        </div>

    </div>
</div>
@endsection