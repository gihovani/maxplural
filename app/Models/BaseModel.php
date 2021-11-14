<?php
declare(strict_types=1);

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $beforeInsert = ['defineValor'];
    protected $beforeUpdate = ['defineValor'];

    public function defineValor(array $data): array
    {
        return $data;
    }
}
