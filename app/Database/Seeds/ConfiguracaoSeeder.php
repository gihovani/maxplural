<?php
declare(strict_types=1);

namespace App\Database\Seeds;

use App\Models\ConfiguracaoModel;
use CodeIgniter\Database\Seeder;
use Exception;

class ConfiguracaoSeeder extends Seeder
{
    public function run()
    {
        $model = new ConfiguracaoModel();
        try {
            $newLine = '<br />' . PHP_EOL;
            $model->insert([
                'email' => 'comercial@maxplural.com.br',
                'telefone_fixo' => '(81) 3032.2261',
                'telefone_whatsapp' => '(81) 99827.0035',
                'facebook' => 'https://www.facebook.com/MaxpluralDesenvolvimentoImobiliario',
                'instagram' => 'https://www.instagram.com/max_plural/',
                'linkedin' => 'https://www.linkedin.com/company/maxplural/',
                'youtube' => 'https://www.youtube.com/channel/UCzFdmtYAGSVZT-deI7lBYww',
                'whatsapp' => 'https://api.whatsapp.com/send/?phone=5581998870019',
                'chat_online' => 'https://api.whatsapp.com/send/?phone=5581998870019&text=Olá',
                'central_vendas' => 'tel:+558130322261',
                'horario_atendimento' => 'Segunda-Quinta: 08h ás 18h' . $newLine .
                    'Sexta: 08h ás 17h',
                'endereco' => 'Rua Antonio Lumack de Monte, 128.' . $newLine .
                    'Salas 1501 e 1502' . $newLine .
                    'Empresarial Center 3' . $newLine .
                    'Boa Viagem - Recife/PE - CEP 51020-350',
            ]);
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }
}
