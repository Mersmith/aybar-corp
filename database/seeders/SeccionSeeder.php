<?php

namespace Database\Seeders;

use App\Models\Seccion;
use Illuminate\Database\Seeder;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $secciones = [
            [
                'nombre' => 'Slider Principal - Inicio',
                'tipo' => 'bloque-1',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'link' => '',
                            'imagen_movil' => asset('assets/imagenes/slider/sliders-movil-1.jpg'),
                            'imagen_computadora' => asset('assets/imagenes/slider/sliders-computadora-1.jpg'),
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Carrusel de videos YouTube - Inicio',
                'tipo' => 'bloque-10',
                'contenido' => [
                    'titulo' => 'VIVE EN LA <br><span>MEJOR ZONA</span>',
                    'titulo_descripcion' => '',
                    'lista' => [
                        [
                            'id' => 1,
                            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/rdxrSIrZISE?si=TFZsrBZuOMuXO3E0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                        ],
                        [
                            'id' => 2,
                            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/uuw6UDjl0oo?si=mmtpECzEekblsZzc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                        ],
                        [
                            'id' => 3,
                            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/aguyG7M828M?si=-t_wOEvDXxIA4Mxc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                        ],
                        [
                            'id' => 4,
                            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/7A0_0K7AoAQ?si=N5J82OBnsCfDJeIe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                        ],
                        [
                            'id' => 5,
                            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/AlMNtbwCusM?si=alvsonKyufY4Ncn4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Cuadricula - Inicio',
                'tipo' => 'bloque-11',
                'contenido' => [
                    'titulo' => '¿POR QUÉ INVERTIR <br><span> CON NOSOTROS?</span>',
                    'titulo_descripcion' => '',
                    'lista' => [
                        [
                            'id' => 1,
                            'imagen' => asset('assets/imagenes/invertir/imagen-1.svg'),
                            'titulo' => 'INVERSIÓN <br> SEGURA',
                        ],
                        [
                            'id' => 2,
                            'imagen' => asset('assets/imagenes/invertir/imagen-2.svg'),
                            'titulo' => 'RENTABILIDAD <br> A LARGO PLAZO',
                        ],
                        [
                            'id' => 3,
                            'imagen' => asset('assets/imagenes/invertir/imagen-3.svg'),
                            'titulo' => 'PATRIMONIO PARA <br> TU FAMILIA',
                        ],
                        [
                            'id' => 4,
                            'imagen' => asset('assets/imagenes/invertir/imagen-4.svg'),
                            'titulo' => 'ALTA <br> REVALORIZACIÓN',
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Testimonios - INICIO',
                'tipo' => 'bloque-8',
                'contenido' => [
                    'titulo' => 'CONFÍAN EN AYBAR',
                    'titulo_descripcion' => '',
                    'lista' => [
                        [
                            'id' => 1,
                            'imagen' => asset('assets/imagenes/testimonios/testimonio-1.jpg'),
                            'imagen_seo' => 'Carlos Méndez',
                            'titulo' => 'Carlos Méndez',
                            'subtitulo' => 'Inversionista',
                            'descripcion' => 'Invertí en un terreno con Aybar y quedé muy satisfecho. Cumplieron con todo lo prometido y el valor de mi lote ha aumentado en poco tiempo.',

                        ],
                        [
                            'id' => 2,
                            'imagen' => asset('assets/imagenes/testimonios/testimonio-2.jpg'),
                            'imagen_seo' => 'Ana Torres',
                            'titulo' => 'Ana Torres',
                            'subtitulo' => 'Propietaria en Aybar Village',
                            'descripcion' => 'Gracias a Aybar pude adquirir mi primer lote con todas las facilidades. El proceso fue claro y rápido, y hoy ya estoy construyendo mi casa.',

                        ],
                        [
                            'id' => 3,
                            'imagen' => asset('assets/imagenes/testimonios/testimonio-3.jpg'),
                            'imagen_seo' => 'Jorge Salazar',
                            'titulo' => 'Jorge Salazar',
                            'subtitulo' => 'Joven profesional',
                            'descripcion' => 'Aybar me brindó la confianza que buscaba para comprar mi terreno. Las facilidades de pago fueron perfectas para empezar a invertir.',
                        ],
                        [
                            'id' => 4,
                            'imagen' => asset('assets/imagenes/testimonios/testimonio-4.jpg'),
                            'imagen_seo' => 'Lucía Rojas',
                            'titulo' => 'Lucía Rojas',
                            'subtitulo' => 'Cliente en Aybar Park',
                            'descripcion' => 'El equipo de Aybar me asesoró en todo momento. Encontré el lote ideal para mi familia, en una zona segura y con excelente proyección.',
                        ],
                    ],
                ],

                'activo' => true,
            ],
            /*[
                'nombre' => 'Presentación - Inicio',
                'tipo' => 'bloque-2',
                'contenido' => [
                    'boton' => [
                        'link' => 'http://127.0.0.1:8000/peru-tierra-de-incautos',
                        'icono' => 'fa-solid fa-book',
                        'texto' => 'Conoce más sobre mi libro',
                        'fondo_color' => '#02424e',
                        'texto_color' => '#ffffff',
                    ],
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-book-open',
                            'texto' => 'Autor de mi libro “Perú, Tierra de Incautos”',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-lightbulb',
                            'texto' => 'Comparto ideas que inspiran el cambio social y político',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-briefcase',
                            'texto' => 'Cuento con experiencia en el sector empresarial y gestión pública',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-microphone',
                            'texto' => 'Expreso mi voz crítica y analítica desde el periodismo independiente',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                    ],
                    'imagen' => asset('assets/imagenes/proyectos/proyecto-1.jpg'),
                    'titulo' => 'Soy Martín Caicho <span>Autor y Emprendedor Peruano</span>',
                    'invertir' => false,
                    'subtitulo' => 'Soy un <span>pensador</span> comprometido con el futuro del Perú',
                    'imagen_seo' => 'Martín Caicho Autor Peruano',
                    'titulo_descripcion' => 'Desde El Agustino para el Perú. Empresario, comunicador y apasionado por el desarrollo social. Autor del libro <span>“Perú, Tierra de Incautos”</span>, una mirada crítica y reflexiva sobre nuestra realidad nacional, con el deseo de inspirar un cambio verdadero basado en valores, trabajo y esperanza.',
                    'subtitulo_descripcion' => 'Combino mi experiencia como empresario y en gestión pública con mi vocación por el periodismo y la reflexión social. A través de mi obra, busco despertar conciencia, promover la participación ciudadana y contribuir al cambio que nuestro país necesita.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Tipos de Lotes - Inicio',
                'tipo' => 'bloque-3',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'boton' => [
                                'link' => '',
                                'icono' => '',
                                'texto' => 'Ver detalles',
                                'fondo_color' => '#0056D2',
                                'texto_color' => '#FFFFFF',
                            ],
                            'imagen' => asset('assets/imagenes/proyectos/proyecto-1.jpg'),
                            'titulo' => 'Lote para Vivienda',
                            'subtitulo' => 'Ideal para construir tu hogar',
                            'imagen_seo' => 'Lote para Vivienda',
                            'descripcion' => 'Pensado para proyectos habitacionales con excelente ubicación y servicios cercanos.',
                        ],
                        [
                            'id' => 2,
                            'boton' => [
                                'link' => '',
                                'icono' => '',
                                'texto' => 'Explorar',
                                'fondo_color' => '#0056D2',
                                'texto_color' => '#FFFFFF',
                            ],
                            'imagen' => asset('assets/imagenes/proyectos/proyecto-1.jpg'),
                            'titulo' => 'Lote Comercial',
                            'subtitulo' => 'Perfecto para negocios',
                            'imagen_seo' => 'Lote Comercial',
                            'descripcion' => 'Pensados para tiendas, oficinas o proyectos comerciales en zonas de alto crecimiento.',
                        ],
                        [
                            'id' => 3,
                            'boton' => [
                                'link' => '',
                                'icono' => '',
                                'texto' => 'Conocer más',
                                'fondo_color' => '#0056D2',
                                'texto_color' => '#FFFFFF',
                            ],
                            'imagen' => asset('assets/imagenes/proyectos/proyecto-1.jpg'),
                            'titulo' => 'Lote para Inversión',
                            'subtitulo' => 'Rentabilidad garantizada',
                            'imagen_seo' => 'Lote para Inversión',
                            'descripcion' => 'Lotes estratégicos ideales para generar valorización, alquiler o desarrollo futuro.',
                        ],
                    ],
                    'titulo' => 'Lotes con alta <span>rentabilidad</span>',
                    'titulo_descripcion' => 'Encuentra la mejor opción para vivir, invertir o emprender',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Call to Action - Inicio',
                'tipo' => 'bloque-4',
                'contenido' => [
                    'boton' => [
                        'link' => 'http://127.0.0.1:8000/peru-tierra-de-incautos',
                        'icono' => 'fa-solid fa-map-location-dot',
                        'texto' => 'Explora nuestros proyectos',
                        'fondo_color' => '#ffcd02',
                        'texto_color' => '#02424e',
                    ],
                    'imagen' => asset('assets/imagenes/call-to-action/familia.png',
                    'imagen_seo' => 'Terrenos y lotes en venta por Inmobiliaria Aybar',
                    'imagen_fondo' => asset('assets/imagenes/call-to-action/fondo.jpg'),
                    'imagen_fondo_seo' => 'Terrenos y lotes en venta por Inmobiliaria Aybar',
                    'titulo' => 'Ten tu <span>lote propio</span>',
                    'titulo_descripcion' => 'Ten tu <span>lote propio</span>',
                    'subtitulo' => 'Terrenos <span>seguros</span>, LEGALES y con excelente ubicación para ti y tu familia.',
                    'subtitulo_descripcion' => 'Terrenos <span>seguros</span>, LEGALES y con excelente ubicación para ti y tu familia.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Banner - Nosotros',
                'tipo' => 'bloque-5',
                'contenido' => [
                    'boton' => [
                        'link' => '',
                        'icono' => '',
                        'texto' => '',
                        'fondo_color' => '',
                        'texto_color' => '',
                    ],
                    'imagen' => asset('assets/imagenes/banner/banner-1.jpg'),
                    'titulo' => '¿Quiénes somos?',
                    'subtitulo' => '',
                    'imagen_seo' => '¿Quiénes somos?',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Titulo - Nosotros',
                'tipo' => 'bloque-6',
                'contenido' => [
                    'titulo' => 'La <span>Solución</span> para un Perú con futuro',
                    'subtitulo' => 'Propongo una visión renovadora basada en tres ejes: desarrollo económico inclusivo, fortalecimiento de los valores ciudadanos y modernización de la gestión pública. Desde mi experiencia en el sector privado y la función pública, impulso ideas que buscan unirnos como peruanos para construir un país más justo, productivo y solidario.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Desarrollo - Nosotros',
                'tipo' => 'bloque-2',
                'contenido' => [
                    'boton' => [
                        'link' => '',
                        'icono' => '',
                        'texto' => '',
                        'fondo_color' => '',
                        'texto_color' => '',
                    ],
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-hand-holding-dollar',
                            'texto' => 'Apoyo a los emprendedores y pequeñas empresas',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-chart-line',
                            'texto' => 'Promoción de la economía regional',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-industry',
                            'texto' => 'Fomento de la producción nacional',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-graduation-cap',
                            'texto' => 'Capacitación técnica y laboral',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 5,
                            'icono' => 'fa-solid fa-briefcase',
                            'texto' => 'Impulso a la formalización y al empleo digno',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                    ],
                    'imagen' => asset('assets/imagenes/nosotros/nosotros-1.jpg'),
                    'titulo' => '',
                    'invertir' => false,
                    'subtitulo' => 'Desarrollo económico con rostro humano',
                    'imagen_seo' => 'Martín Caicho Autor Peruano',
                    'titulo_descripcion' => '',
                    'subtitulo_descripcion' => 'Promuevo un modelo económico que prioriza al emprendedor, al trabajador y a las familias peruanas. Mi propuesta busca generar empleo digno, impulsar la innovación y fortalecer la producción nacional con justicia social.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Gestión - Nosotros',
                'tipo' => 'bloque-2',
                'contenido' => [
                    'boton' => [
                        'link' => 'http://127.0.0.1:8000/peru-tierra-de-incautos',
                        'icono' => 'fa-solid fa-book',
                        'texto' => 'Conoce más sobre mi libro',
                        'fondo_color' => '#02424e',
                        'texto_color' => '#ffffff',
                    ],
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-handshake',
                            'texto' => 'Promuevo la transparencia en el uso de los recursos públicos',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-laptop-code',
                            'texto' => 'Impulso la digitalización y el gobierno electrónico',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-city',
                            'texto' => 'Fortalezco la gestión de los gobiernos locales',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-chalkboard-user',
                            'texto' => 'Apoyo la capacitación constante de los servidores públicos',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 5,
                            'icono' => 'fa-solid fa-scale-balanced',
                            'texto' => 'Combato la corrupción con firmeza y compromiso',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                    ],
                    'imagen' => asset('assets/imagenes/nosotros/nosotros-2.jpg'),
                    'titulo' => '',
                    'invertir' => true,
                    'subtitulo' => 'Gestión pública moderna y transparente',
                    'imagen_seo' => 'Martín Caicho Autor Peruano',
                    'titulo_descripcion' => '',
                    'subtitulo_descripcion' => 'Desde mi experiencia en el sector público, defiendo una administración eficiente, meritocrática y enfocada en resultados. Busco eliminar la corrupción, digitalizar los procesos del Estado y acercar la gestión a los ciudadanos.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Valores - Nosotros',
                'tipo' => 'bloque-2',
                'contenido' => [
                    'boton' => [
                        'link' => '',
                        'icono' => '',
                        'texto' => '',
                        'fondo_color' => '',
                        'texto_color' => '',
                    ],
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-graduation-cap',
                            'texto' => 'Fomento la educación cívica y moral en todos los niveles',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-user-group',
                            'texto' => 'Impulso programas de liderazgo juvenil',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-heart',
                            'texto' => 'Promuevo una cultura basada en el respeto y la empatía',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-first-aid',
                            'texto' => 'Apoyo la formación en primeros auxilios y convivencia ciudadana',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 5,
                            'icono' => 'fa-solid fa-flag',
                            'texto' => 'Refuerzo la unidad y el orgullo de ser peruanos',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                    ],
                    'imagen' => asset('assets/imagenes/nosotros/nosotros-3.jpg'),
                    'titulo' => '',
                    'invertir' => false,
                    'subtitulo' => 'Valores y educación cívica para un nuevo Perú',
                    'imagen_seo' => 'Martín Caicho Autor Peruano',
                    'titulo_descripcion' => '',
                    'subtitulo_descripcion' => 'Estoy convencido de que el cambio real comienza en cada persona. Por eso, promuevo la educación en valores, la participación ciudadana y la formación de líderes comprometidos con el bien común y el respeto mutuo.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Compromiso con el Perú - Nosotros',
                'tipo' => 'bloque-7',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-bullseye',
                            'subtitulo' => 'Misión',
                            'subtitulo_descripcion' => 'Mi misión es inspirar a los peruanos a creer en el cambio a través de la educación, la ética y la acción. Busco promover un liderazgo ciudadano que transforme nuestra realidad desde los valores y el compromiso social.',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-eye',
                            'subtitulo' => 'Visión',
                            'subtitulo_descripcion' => 'Sueño con un Perú unido, próspero y transparente, donde el esfuerzo, la innovación y la honestidad sean las bases de nuestro desarrollo.',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-handshake',
                            'subtitulo' => 'Valores',
                            'subtitulo_descripcion' => 'Me guío por la honestidad, el trabajo, la justicia social, la empatía y la responsabilidad. Estos principios inspiran cada propuesta y cada acción que realizo por el bienestar de nuestro país.',
                        ],
                    ],
                    'titulo' => 'Estoy <span>comprometido</span> con mi Perú',
                    'titulo_descripcion' => 'Conóceme un poco más.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Call to Action - Nosotros',
                'tipo' => 'bloque-4',
                'contenido' => [
                    'boton' => [
                        'link' => 'http://127.0.0.1:8000/peru-tierra-de-incautos',
                        'icono' => 'fa-solid fa-map-location-dot',
                        'texto' => 'Explora nuestros proyectos',
                        'fondo_color' => '#ffcd02',
                        'texto_color' => '#02424e',
                    ],
                    'imagen' => asset('assets/imagenes/call-to-action/familia.png',
                    'imagen_seo' => 'Terrenos y lotes en venta por Inmobiliaria Aybar',
                    'imagen_fondo' => asset('assets/imagenes/call-to-action/fondo.jpg'),
                    'imagen_fondo_seo' => 'Terrenos y lotes en venta por Inmobiliaria Aybar',
                    'titulo' => 'Ten tu <span>lote propio</span>',
                    'titulo_descripcion' => 'Ten tu <span>lote propio</span>',
                    'subtitulo' => 'Terrenos <span>seguros</span>, LEGALES y con excelente ubicación para ti y tu familia.',
                    'subtitulo_descripcion' => 'Terrenos <span>seguros</span>, LEGALES y con excelente ubicación para ti y tu familia.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Slider - Landing Libro',
                'tipo' => 'bloque-1',
                'contenido' => [
                    'imagenes' => [
                        [
                            'id' => 1,
                            'link' => '',
                            'imagen_movil' => asset('assets/imagen/sliders-movil-1.jpg'),
                            'imagen_computadora' => asset('assets/imagen/sliders-computadora-1.jpg'),
                        ],
                        [
                            'id' => 2,
                            'link' => '',
                            'imagen_movil' => asset('assets/imagen/sliders-movil-2.jpg'),
                            'imagen_computadora' => asset('assets/imagen/sliders-computadora-2.jpg'),
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Presentación - Landing Libro',
                'tipo' => 'bloque-2',
                'contenido' => [
                    'boton' => [
                        'link' => '/descargar-libro',
                        'icono' => 'fa-solid fa-download',
                        'texto' => 'Descarga el libro ahora',
                        'fondo_color' => '#02424e',
                        'texto_color' => '#ffffff',
                    ],
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-book-open',
                            'texto' => 'Autor: Martín Caicho, empresario y comunicador',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-lightbulb',
                            'texto' => 'Ideas claras para reflexionar y actuar por un Perú mejor',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-people-roof',
                            'texto' => 'Analiza la realidad social, política y económica de nuestro país',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-flag',
                            'texto' => 'Propone soluciones concretas para generar empleo, educación y desarrollo',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                    ],
                    'imagen' => asset('assets/imagenes/proyectos/proyecto-1.jpg'),
                    'titulo' => 'Descubre <span>“Perú, Tierra de Incautos”</span>',
                    'invertir' => false,
                    'subtitulo' => 'Una obra que <span>inspira y transforma</span>',
                    'imagen_seo' => 'Martín Caicho Autor Peruano',
                    'titulo_descripcion' => 'Un libro que revela la realidad del Perú, analiza los problemas que nos afectan y propone soluciones concretas para construir un país más justo, productivo y solidario. Sumérgete en una lectura que despierta conciencia y acción.',
                    'subtitulo_descripcion' => 'Martín Caicho combina su experiencia como empresario, comunicador y líder social para ofrecer una mirada crítica, profunda y esperanzadora sobre el Perú. Este libro no solo denuncia, sino que propone soluciones claras y prácticas.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Call to Action 1 - Landing Libro',
                'tipo' => 'bloque-4',
                'contenido' => [
                    'boton' => [
                        'link' => '#formulario-libro',
                        'icono' => 'fa-solid fa-book',
                        'texto' => 'Descargar Libro',
                        'fondo_color' => '#02424e',
                        'texto_color' => '#ffffff',
                    ],
                    'imagen' => asset('assets/imagenes/call-to-action/familia.png',
                    'imagen_seo' => 'Terrenos y lotes en venta por Inmobiliaria Aybar',
                    'imagen_fondo' => asset('assets/imagenes/call-to-action/fondo.jpg'),
                    'imagen_fondo_seo' => 'Terrenos y lotes en venta por Inmobiliaria Aybar',
                    'titulo' => 'Ten tu <span>lote propio</span>',
                    'titulo_descripcion' => 'Ten tu <span>lote propio</span>',
                    'subtitulo' => 'Terrenos <span>seguros</span>, LEGALES y con excelente ubicación para ti y tu familia.',
                    'subtitulo_descripcion' => 'Terrenos <span>seguros</span>, LEGALES y con excelente ubicación para ti y tu familia.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Autor - Landing Libro',
                'tipo' => 'bloque-2',
                'contenido' => [
                    'titulo' => 'Martín Caicho <span>Autor y Emprendedor Peruano</span>',
                    'titulo_descripcion' => '',
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-book-open',
                            'texto' => 'Autor de “Perú, Tierra de Incautos”',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-lightbulb',
                            'texto' => 'Ideas que inspiran acción y cambio social',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-briefcase',
                            'texto' => 'Experiencia en empresas y gestión pública',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-microphone',
                            'texto' => 'Voz crítica desde el periodismo y la comunicación',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                    ],
                    'invertir' => false,
                    'imagen' => asset('assets/imagenes/proyectos/proyecto-1.jpg'),
                    'imagen_seo' => 'Martín Caicho Autor Peruano',
                    'subtitulo' => 'Un pensador comprometido con el Perú',
                    'subtitulo_descripcion' => 'Desde El Agustino, Martín Caicho combina su experiencia empresarial, su trayectoria en gestión pública y su pasión por el periodismo para inspirar cambios reales en nuestro país. Autor de <span>“Perú, Tierra de Incautos”</span>, propone soluciones concretas y reflexiones profundas sobre la realidad peruana.',
                    'boton' => [
                        'link' => '',
                        'icono' => '',
                        'texto' => '',
                        'fondo_color' => '',
                        'texto_color' => '',
                    ],
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Call to Action Final - Landing Libro',
                'tipo' => 'bloque-4',
                'contenido' => [
                    'boton' => [
                        'link' => '#formulario-libro',
                        'icono' => 'fa-solid fa-book',
                        'texto' => 'Descargar Libro',
                        'fondo_color' => '#02424e',
                        'texto_color' => '#ffffff',
                    ],
                    'imagen' => asset('assets/imagenes/call-to-action/familia.png',
                    'imagen_seo' => 'Terrenos y lotes en venta por Inmobiliaria Aybar',
                    'imagen_fondo' => asset('assets/imagenes/call-to-action/fondo.jpg'),
                    'imagen_fondo_seo' => 'Terrenos y lotes en venta por Inmobiliaria Aybar',
                    'titulo' => 'Ten tu <span>lote propio</span>',
                    'titulo_descripcion' => 'Ten tu <span>lote propio</span>',
                    'subtitulo' => 'Terrenos <span>seguros</span>, LEGALES y con excelente ubicación para ti y tu familia.',
                    'subtitulo_descripcion' => 'Terrenos <span>seguros</span>, LEGALES y con excelente ubicación para ti y tu familia.',
                ],
                'activo' => true,
            ],
            [ //18
                'nombre' => 'Terminos y Condiciones',
                'tipo' => 'bloque-9',
                'contenido' => [
                    'titulo' => 'Terminos y Condiciones',
                    'subtitulo' => '',
                    'content_html' => '<p>Declaro haber sido informado, conforme a Ley N° 29733 - Ley de Protección de Datos Personales (“la Ley”) y al Decreto Supremo 003-2013/JUS - Reglamento de la Ley (“el Reglamento)”, doy mi consentimiento libre, previo , informado, expreso e inequívoco para que <strong>AYBAR S.A.C. </strong>realice el tratamiento de mis datos personales que le proporcione de manera física o digital , con la finalidad de ejecutar cualquier relación contractual que mantengo y/o mantendré con la misma, contactarme y para fines estadísticos y/o analíticos.</p>',
                ],
                'activo' => true,
            ],
            [ //19
                'nombre' => 'Políticas de Privacidad',
                'tipo' => 'bloque-9',
                'contenido' => [
                    'titulo' => 'Políticas de Privacidad',
                    'subtitulo' => '',
                    'content_html' => '<p>Declaro haber sido informado, conforme a Ley N° 29733 - Ley de Protección de Datos Personales (“la Ley”) y al Decreto Supremo 003-2013/JUS - Reglamento de la Ley (“el Reglamento)”, doy mi consentimiento libre, previo , informado, expreso e inequívoco para que <strong>AYBAR S.A.C. </strong>realice el tratamiento de mis datos personales que le proporcione de manera física o digital , con la finalidad de ejecutar cualquier relación contractual que mantengo y/o mantendré con la misma, contactarme y para fines estadísticos y/o analíticos.</p>',
                ],
                'activo' => true,
            ],*/
        ];

        foreach ($secciones as $seccion) {
            Seccion::create($seccion);
        }
    }
}
