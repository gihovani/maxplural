<?php
declare(strict_types=1);

namespace App\Database\Seeds;

class DataSeeder extends \CodeIgniter\Database\Seeder
{
    public function  run()
    {
        $this->call('AdminSeeder');
        $this->call('ConfiguracaoSeeder');
    }
}
