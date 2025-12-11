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
            [ //1
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
                        [
                            'id' => 2,
                            'link' => '',
                            'imagen_movil' => asset('assets/imagenes/slider/sliders-movil-2.jpg'),
                            'imagen_computadora' => asset('assets/imagenes/slider/sliders-computadora-2.jpg'),
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [ //2
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
            [ //3
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
            [ //4
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
            [ //5
                'nombre' => 'Banner - NOSOTROS',
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
                    'titulo' => '¿QUIÉNES SOMOS?',
                    'subtitulo' => '',
                    'imagen_seo' => '¿Quiénes somos?',
                ],
                'activo' => true,
            ],
            [ //6
                'nombre' => 'Titulo Somos - NOSOTROS',
                'tipo' => 'bloque-6',
                'contenido' => [
                    'titulo' => 'SOMOS',
                    'subtitulo' => 'Una inmobiliaria 100% peruana, especializada en el desarrollo y comercialización de terrenos destinados a vivienda y proyectos de inversión en distintas regiones del país. Nos enfocamos en ofrecer espacios estratégicamente ubicados, garantizando seguridad, accesibilidad y oportunidades de crecimiento para nuestros clientes.',
                ],
                'activo' => true,
            ],
            [ //7
                'nombre' => 'Valores - NOSOTROS',
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
                            'icono' => 'fa-solid fa-handshake-angle',
                            'texto' => 'Solidaridad',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-scale-balanced',
                            'texto' => 'Respeto',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-shield-heart',
                            'texto' => 'Integridad',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-heart',
                            'texto' => 'Empatía',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                        [
                            'id' => 5,
                            'icono' => 'fa-solid fa-handshake',
                            'texto' => 'Compromiso',
                            'icono_color' => '#02424e',
                            'texto_color' => '#333',
                        ],
                    ],
                    'imagen' => asset('assets/imagenes/nosotros/nosotros-2.jpg'),
                    'titulo' => '',
                    'invertir' => false,
                    'subtitulo' => 'NOS ENFOCAMOS EN ALCANZAR LOS OBJETIVOS',
                    'imagen_seo' => '',
                    'titulo_descripcion' => '',
                    'subtitulo_descripcion' => 'Fomentando la cooperación y el apoyo mutuo, trabajando en equipo para alcanzar un bien común y fortalecer nuestra comunidad.',
                ],
                'activo' => true,
            ],
            [ //8
                'nombre' => 'Mision - NOSOTROS',
                'tipo' => 'bloque-7',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-bullseye',
                            'subtitulo' => 'Misión',
                            'subtitulo_descripcion' => 'Somos una inmobiliaria que ayuda a los peruanos a obtener su propio lote con espacios de calidad y eco sostenibles. Ofrecemos asesoramiento integral para satisfacer tus necesidades inmobiliarias y maximizar tu rentabilidad con integridad y empatía.',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-eye',
                            'subtitulo' => 'Visión',
                            'subtitulo_descripcion' => 'Queremos ser reconocidos como la mejor inmobiliaria en proyectos económicos y ecosostenibles, liderando en gestión y satisfaciendo a nuestros clientes en sus inversiones ideales.',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-handshake',
                            'subtitulo' => 'Valores',
                            'subtitulo_descripcion' => 'Fomentamos un ambiente de trabajo colaborativo y de apoyo mutuo, valorando a nuestro equipo humano. Esto nos permite satisfacer mejor las necesidades y deseos de nuestros clientes.',
                        ],
                    ],
                    'titulo' => '',
                    'titulo_descripcion' => '',
                ],
                'activo' => true,
            ],
            /*[
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
                    'imagen' => asset('assets/imagenes/call-to-action/familia.png'),
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
                    'imagen' => asset('assets/imagenes/call-to-action/familia.png'),
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
