@extends('layouts.web.layout-web')

@section('titulo', 'Libro de Reclamaciones')

@section('contenido')
    <div class="r_centrar_pagina">
        <div class="r_pading_pagina r_gap_pagina">

            <div class="r_contenedor_columna">
                @include('partials.titulo-encabezado', [
                    'titulo' => 'Libro de <span>Reclamaciones</span>',
                    'descripcion' =>
                        'Ponemos a tu disposición nuestro libro de reclamaciones, aplicativo de atención de reclamos y solicitudes en línea.',
                    'alineacion' => 'center',
                    'color' => 'color_1',
                ])

                @if (session('success'))
                    <div class="g_alerta_succes">
                        <i class="fa-solid fa-circle-check"></i>
                        <div>{{ session('success') }}</div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="g_alerta_error">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <strong>Por favor corrige los siguientes errores:</strong>
                    </div>
                @endif

                <form action="{{ route('reclamaciones.enviar') }}" method="POST" class="g_formulario">
                    @csrf

                    <div class="r_fila">
                        <h3 class="r_sub_titulo_1 color_1">1.- Información del consumidor reclamante</h3>

                        <div class="form_grupo r_columna_4">
                            <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" required>
                            @error('nombre')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_grupo r_columna_4">
                            <input type="text" name="apellido_paterno" placeholder="Apellido Paterno"
                                value="{{ old('apellido_paterno') }}" required>
                            @error('apellido_paterno')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_grupo r_columna_4">
                            <input type="text" name="apellido_materno" placeholder="Apellido Materno"
                                value="{{ old('apellido_materno') }}" required>
                            @error('apellido_materno')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="r_fila">
                        <div class="form_grupo r_columna_4">
                            <input type="text" name="domicilio" placeholder="Domicilio" value="{{ old('domicilio') }}"
                                required>
                            @error('domicilio')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_grupo r_columna_4">
                            <input type="text" name="telefono" placeholder="Teléfono (opcional)"
                                value="{{ old('telefono') }}">
                            @error('telefono')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_grupo r_columna_4">
                            <input type="email" name="email" placeholder="Correo electrónico (opcional)"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="r_fila">
                        <div class="form_grupo r_columna_4">
                            <select name="tipo_documento" required>
                                <option value="">-- Tipo de Documento --</option>
                                <option value="dni" {{ old('tipo_documento') == 'dni' ? 'selected' : '' }}>DNI
                                </option>
                                <option value="ruc" {{ old('tipo_documento') == 'ruc' ? 'selected' : '' }}>RUC
                                </option>
                                <option value="ce" {{ old('tipo_documento') == 'ce' ? 'selected' : '' }}>Carné de
                                    Extranjería
                                </option>
                            </select>
                            @error('tipo_documento')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_grupo r_columna_4">
                            <input type="text" name="numero_documento" placeholder="Número de Documento"
                                value="{{ old('numero_documento') }}" required>
                            @error('numero_documento')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="r_fila">
                        <h3 class="r_sub_titulo_1 color_1">2.- Identificación del bien contratado</h3>

                        <div class="form_grupo r_columna_12">
                            <label><strong class="r_negrita">Tipo de bien contratado:</strong></label>
                            <div class="radio_group">
                                <label>
                                    <input type="radio" name="tipo_bien_contratado" value="producto"
                                        {{ old('tipo_bien_contratado', 'producto') == 'producto' ? 'checked' : '' }}
                                        required>
                                    Producto
                                </label>
                                <label>
                                    <input type="radio" name="tipo_bien_contratado" value="servicio"
                                        {{ old('tipo_bien_contratado') == 'servicio' ? 'checked' : '' }} required>
                                    Servicio
                                </label>
                            </div>
                            @error('tipo_bien_contratado')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_grupo r_columna_12">
                            <input type="number" step="0.01" name="monto_reclamado"
                                placeholder="Monto Reclamado (opcional)" value="{{ old('monto_reclamado') }}">
                            @error('monto_reclamado')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_grupo r_columna_12">
                            <textarea name="descripcion" placeholder="Descripción del producto o servicio" required>{{ old('descripcion') }}</textarea>
                            @error('descripcion')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="r_fila">
                        <h3 class="r_sub_titulo_1 color_1">3.- Detalle de la reclamación y pedido del consumidor</h3>

                        <div class="form_grupo r_columna_12">
                            <label><strong class="r_negrita">Tipo de solicitud:</strong></label>
                            <div class="radio_group">
                                <label>
                                    <input type="radio" name="tipo_pedido" value="reclamo"
                                        {{ old('tipo_pedido', 'reclamo') == 'reclamo' ? 'checked' : '' }} required>
                                    Reclamo
                                </label>
                                <label>
                                    <input type="radio" name="tipo_pedido" value="queja"
                                        {{ old('tipo_pedido') == 'queja' ? 'checked' : '' }} required>
                                    Queja
                                </label>
                            </div>
                            @error('tipo_pedido')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_grupo r_columna_12">
                            <textarea name="detalle" placeholder="Detalle del reclamo o queja" required>{{ old('detalle') }}</textarea>
                            @error('detalle')
                                <div class="error">{{ $message }}</div>
                            @enderror

                            <p><strong class="r_negrita">(1) RECLAMO:</strong> Disconformidad relacionada a los
                                productos o servicios.</p>
                            <p><strong class="r_negrita">(2) QUEJA:</strong> Disconformidad no relacionada a los
                                productos o servicios; o, malestar o descontento respecto a la atención al público.</p>
                        </div>

                        <div class="form_grupo r_columna_12">
                            <textarea name="pedido" placeholder="Pedido del consumidor" required>{{ old('pedido') }}</textarea>
                            @error('pedido')
                                <div class="error">{{ $message }}</div>
                            @enderror

                            <p>* La formulación del reclamo no impide acudir a otras vías de solución de controversias
                                ni es requisito previo para interponer una denuncia ante el INDECOPI.
                            </p>
                            <p> * El proveedor deberá dar respuesta al reclamo en un plazo no mayor a quince (15) días
                                hábiles, el cual es improrrogable.</p>
                        </div>
                    </div>

                    <button type="submit">
                        <i class="fa-solid fa-paper-plane"></i> Enviar Reclamo
                    </button>
                </form>

            </div>

        </div>
    </div>
@endsection
