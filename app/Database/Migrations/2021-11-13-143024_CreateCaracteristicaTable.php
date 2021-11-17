<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCaracteristicaTable extends Migration
{
    private $table = 'caracteristica';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'imagem' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true
            ],
            'prioridade' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false
            ],
            'updated_at datetime default current_timestamp on update current_timestamp',
            'created_at datetime default current_timestamp',
            'deleted_at datetime default null'
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
