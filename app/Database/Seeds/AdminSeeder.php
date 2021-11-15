<?php
declare(strict_types=1);

namespace App\Database\Seeds;

use App\Models\AdminModel;
use CodeIgniter\Database\Seeder;
use Exception;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $this->insert($this->getAdmin('gihovani', 'Gihovani Filipp'));
        $this->insert($this->getAdmin('kleverton', 'Kleverton Kulmann'));
        for ($i = 0; $i < 5; $i++) {
            $data = $this->getAdmin();
            $this->insert($data);
        }
    }

    private function insert(array $data)
    {
        try {
            $model = new AdminModel();
            $model->insert($data);
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }

    private function getAdmin(string $login = '', string $nome = ''): array
    {
        if (empty($nome)) {
            $nome = static::faker()->streetName;
        }
        if (empty($login)) {
            $email = static::faker()->email;
            $situacao = (static::faker()->boolean) ? 0 : 1;
            $login = static::faker()->colorName;
        } else {
            $situacao = 1;
            $email = $login . '@mt2015.com';
        }
        return [
            'login' => $login,
            'nome' => $nome,
            'email' => $email,
            'senha' => 'senha',
            'situacao' => $situacao,
        ];
    }
}
