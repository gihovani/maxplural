<?php
declare(strict_types=1);

namespace App\Database\Seeds;

use App\Models\CaracteristicaModel;
use CodeIgniter\Database\Seeder;
use Exception;

class CaracteristicaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'imagem' => 'localizacao.svg',
                'titulo' => 'Localização privilegiada',
                'prioridade' => 1
            ],
            [
                'imagem' => 'fechadura.svg',
                'titulo' => 'Fechadura<br />digital',
                'prioridade' => 2
            ],
            [
                'imagem' => 'lavanderia.svg',
                'titulo' => 'Lavanderia compartilhada',
                'prioridade' => 3
            ],
            [
                'imagem' => 'pet.svg',
                'titulo' => 'Pet Place',
                'prioridade' => 4
            ],
            [
                'imagem' => 'bike.svg',
                'titulo' => 'Bicicletário',
                'prioridade' => 5
            ],
            [
                'imagem' => 'academia.svg',
                'titulo' => 'Academia',
                'prioridade' => 6
            ],
            [
                'imagem' => 'piscina.svg',
                'titulo' => 'Piscina<br />panorâmica',
                'prioridade' => 7
            ],
            [
                'imagem' => 'work.svg',
                'titulo' => 'Work zone',
                'prioridade' => 8
            ],
            [
                'imagem' => 'diamond.svg',
                'titulo' => 'Áreas gourmet individuais',
                'prioridade' => 9
            ],
        ];
        foreach ($data as $tmp) {
            $this->insert($tmp);
        }
    }

    private function insert(array $data)
    {
        try {
            $model = new CaracteristicaModel();
            $model->insert($data);
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }
}
