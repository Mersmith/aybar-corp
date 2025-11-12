@section('tituloPagina', 'Editar blog')
@section('anchoPantalla', '100%')

<div class="g_gap_pagina">
    <!-- CABECERA -->
    <div class="g_panel cabecera_titulo_pagina">
        <h2>Editar blog</h2>
        <div class="cabecera_titulo_botones">
            <a href="{{ route('admin.blog.vista.todo') }}" class="g_boton g_boton_light">
                Inicio <i class="fa-solid fa-house"></i></a>

            <a href="{{ route('admin.blog.vista.crear') }}" class="g_boton g_boton_primary">
                Crear <i class="fa-solid fa-square-plus"></i></a>

            <button type="button" class="g_boton g_boton_danger" onclick="alertaEliminarBlog()">
                Eliminar <i class="fa-solid fa-trash-can"></i>
            </button>

            <a href="{{ route('admin.blog.vista.todo') }}" class="g_boton g_boton_darkt">
                <i class="fa-solid fa-arrow-left"></i> Regresar</a>
        </div>
    </div>

    <!-- FORMULARIO -->
    <div class="formulario">
        <div class="g_fila">
            <div class="g_columna_8 g_gap_pagina">
                <div class="g_panel">
                    <!-- Titulo -->
                    <div class="g_margin_bottom_10">
                        <label for="titulo">Titulo <span class="obligatorio"><i
                                    class="fa-solid fa-asterisk"></i></span></label>
                        <input type="text" id="titulo" wire:model.live="titulo" required>
                        @error('titulo')
                        <p class="mensaje_error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!--SLUG-->
                    <div class="g_margin_bottom_10">
                        <label for="slug">Slug <span class="obligatorio"><i
                                    class="fa-solid fa-asterisk"></i></span></label>
                        <input type="text" id="slug" name="slug" wire:model.live="slug" required disabled>
                        <p class="leyenda">Se genera automático</p>
                        @error('slug')
                        <p class="mensaje_error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Imagen -->
                    <div class="g_margin_bottom_10">
                        <label for="imagen">Imagen <span class="obligatorio"><i
                                    class="fa-solid fa-asterisk"></i></span></label>
                        <input type="text" id="imagen" wire:model.live="imagen" required>
                        @error('imagen')
                        <p class="mensaje_error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="g_panel">
                    <!-- contenido -->
                    <div wire:ignore style="g_ckeditor">
                        <label for="contenido">Contenido</label>
                        <textarea id="contenido" class="w-full form-control" rows="6" wire:ignore x-data x-init="ClassicEditor.create($refs.miEditor, {
                                toolbar: [
                                    'undo', 'redo', '|',
                                    'heading', '|',
                                    'bold', 'italic', '|',
                                    'link', 'uploadImage', 'insertTable', 'blockQuote',
                                    'mediaEmbed', '|',
                                    'bulletedList', 'numberedList', '|',
                                    'outdent', 'indent'
                                ],
                                ckfinder: {
                                    uploadUrl: '{{ route('admin.imagen.upload-local') }}?_token={{ csrf_token() }}'
                                },
                                link: {
                                    addTargetToExternalLinks: true,
                                    defaultProtocol: 'https://'
                                }
                            })
                            .then(editor => {
                                editor.model.document.on('change:data', () => {
                                    @this.set('contenido', editor.getData())
                                });
                            })
                            .catch(error => {
                                console.error(error);
                            });" x-ref="miEditor">{!! $contenido !!}</textarea>

                        @error('contenido')
                        <p class="mensaje_error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

            </div>

            <div class="g_columna_4 g_gap_pagina g_columna_invertir">
                <!-- Activo -->
                <div class="g_panel">
                    <h4 class="g_panel_titulo">Activo</h4>
                    <select id="activo" wire:model.live="activo">
                        <option value="0">DESACTIVADO</option>
                        <option value="1">ACTIVO</option>
                    </select>
                </div>

                <div class="g_panel">
                    <!-- Titulo -->
                    <div class="g_margin_bottom_10">
                        <label for="meta_title">Meta titulo <span class="obligatorio"><i
                                    class="fa-solid fa-asterisk"></i></span></label>
                        <input type="text" id="meta_title" wire:model.live="meta_title" required>
                        @error('meta_title')
                        <p class="mensaje_error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!--DESCRIPCION-->
                    <div class="">
                        <label for="meta_description">Meta descripción <span class="obligatorio"><i
                                    class="fa-solid fa-asterisk"></i></span></label>
                        <textarea id="meta_description" wire:model.live="meta_description" rows="3"></textarea>
                        @error('meta_description')
                        <p class="mensaje_error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Imagen -->
                    <div class="g_margin_bottom_10">
                        <label for="meta_image">Meta imagen <span class="obligatorio"><i
                                    class="fa-solid fa-asterisk"></i></span></label>
                        <input type="text" id="meta_image" wire:model.live="meta_image" required>
                        @error('meta_image')
                        <p class="mensaje_error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="g_margin_top_20">
            <div class="formulario_botones">
                <button wire:click="store" class="guardar" wire:loading.attr="disabled" wire:target="store">
                    <span wire:loading.remove wire:target="store">Actualizar</span>
                    <span wire:loading wire:target="store">Actualizando...</span>
                </button>

                <a href="{{ route('admin.blog.vista.todo') }}" class="cancelar">Cancelar</a>
            </div>
        </div>
    </div>

    <script>
        function alertaEliminarBlog() {
            Swal.fire({
                title: '¿Quieres eliminar?',
                text: "No podrás recuperarlo.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('eliminarBlogOn');

                    Swal.fire(
                        '¡Eliminado!',
                        'Eliminaste correctamente.',
                        'success'
                    )
                }
            });
        }
    </script>
</div>
