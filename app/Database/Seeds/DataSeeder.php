<?php
declare(strict_types=1);

namespace App\Database\Seeds;

class DataSeeder extends \CodeIgniter\Database\Seeder
{
    public function  run()
    {
        $this->call('AdminSeeder');
        $this->call('ConfiguracaoSeeder');
        $this->call('LinhaSeeder');
        $this->call('CaracteristicaSeeder');
        $this->call('EmpreendimentoSeeder');
        $this->call('PaginaSeeder');
        $this->call('BannerImagemSeeder');
        $this->call('NoticiaSeeder');
    }
}
