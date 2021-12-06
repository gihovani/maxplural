<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterEmpreendimentoTable extends Migration
{
    private $table = 'empreendimento';

    public function up()
    {
        $this->forge->addColumn($this->table, [
            'tipologia' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
                'after' => 'especificacoes_tecnicas'
            ],
            'bairro' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'after' => 'tipologia'
            ],
            'cidade' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'after' => 'bairro'
            ],
            'estado' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
                'null' => true,
                'after' => 'cidade'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn($this->table, 'tipologia');
        $this->forge->dropColumn($this->table, 'bairro');
        $this->forge->dropColumn($this->table, 'cidade');
        $this->forge->dropColumn($this->table, 'estado');
    }
}
