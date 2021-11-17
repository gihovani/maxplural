<?php
declare(strict_types=1);

namespace App\Database\Seeds;

use App\Models\LinhaModel;
use CodeIgniter\Database\Seeder;
use Exception;

class LinhaSeeder extends Seeder
{
    public function run()
    {
        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ' .
            'Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend, ' .
            'vitae tincidunt risus rutrum.';
        $data = [
            [
                'imagem' => 'MAX-beach.png',
                'titulo' => 'Max Beach',
                'descricao' => $lorem,
                'prioridade' => 1
            ],
            [
                'imagem' => 'MAX-compact.png',
                'titulo' => 'Max Compact',
                'descricao' => $lorem,
                'prioridade' => 2
            ],
            [
                'imagem' => 'MAX-concept.png',
                'titulo' => 'Max Concept',
                'descricao' => $lorem,
                'prioridade' => 3
            ],
            [
                'imagem' => 'PBQP.png',
                'titulo' => 'Programa Brasileiro da Qualidade e Produtividade do Habitat',
                'descricao' => $lorem,
                'prioridade' => 4
            ],
            [
                'imagem' => 'gptw.png',
                'titulo' => 'Great Place to Work',
                'descricao' => $lorem,
                'prioridade' => 4
            ],
        ];
        foreach ($data as $linha) {
            $this->insert($linha);
        }
    }

    private function insert(array $data)
    {
        try {
            $model = new LinhaModel();
            $model->insert($data);
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }
}
