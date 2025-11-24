<?php

namespace App\Livewire\Web\OpenAi;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use OpenAI;

#[Layout('layouts.web.layout-web')]
class ProcesarImagenLivewire extends Component
{
    use WithFileUploads;

    public $imagen;
    public $datos = [];
    public $procesando = false;

    public function procesarImagen()
    {
        $this->validate([
            'imagen' => 'required|image|max:4096'
        ]);

        $this->procesando = true;

        try {
            // Convertir imagen a base64
            $imageData = base64_encode(file_get_contents($this->imagen->getRealPath()));

            $client = OpenAI::client(config('services.openai.key'));

            // --- PETICIÓN CORRECTA ---
            $response = $client->chat()->create([
                'model' => 'gpt-4o-mini',
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => [
                            [
                                "type" => "text",
                                "text" => "Extrae los datos EXACTOS del comprobante BCP.
Devuelve únicamente un JSON válido con esta estructura:

{
  \"numero_operacion\": \"\",
  \"banco\": \"\",
  \"monto\": \"\",
  \"fecha\": \"\"
}

NO agregues explicación ni texto adicional. Solo JSON."
                            ],
                            [
                                "type" => "image_url",
                                "image_url" => [
                                    "url" => "data:image/jpeg;base64,{$imageData}"
                                ]
                            ]
                        ]
                    ]
                ]
            ]);

            // --- PROCESAR RESPUESTA ---
            $content = $response->choices[0]->message->content;

            $texto = '';

            // Si devuelve blocks
            if (is_array($content)) {
                foreach ($content as $block) {
                    if (($block['type'] ?? null) === 'text') {
                        $texto .= $block['text'];
                    }
                }
            } else {
                $texto = $content;
            }

            // Limpiar ```json
            $texto = trim(preg_replace('/```json|```/', '', $texto));

            // Decodificar JSON
            $data = json_decode($texto, true);

            if (!$data) {
                session()->flash('error', 'No se pudo extraer la información correctamente.');
                $this->procesando = false;
                return;
            }

            // Asignar datos
            $this->datos = [
                'numero' => $data['numero_operacion'] ?? null,
                'banco'  => $data['banco'] ?? null,
                'monto'  => $data['monto'] ?? null,
                'fecha'  => $data['fecha'] ?? null,
            ];
        } catch (\Exception $e) {
            session()->flash('error', '❌ Error: ' . $e->getMessage());
        }

        $this->procesando = false;
    }

    public function guardar()
    {
        session()->flash('success', 'Comprobante guardado correctamente.');
        $this->reset(['imagen', 'datos']);
    }

    public function render()
    {
        return view('livewire.web.open-ai.procesar-imagen-livewire');
    }
}
