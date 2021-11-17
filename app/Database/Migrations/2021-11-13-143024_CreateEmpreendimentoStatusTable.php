<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmpreendimentoStatusTable extends Migration
{
    private $table = 'empreendimento_status';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'empreendimento_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false
            ],
            'terraplenagem' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false
            ],
            'fundacao' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false
            ],
            'revestimento' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false
            ],
            'alvenaria' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false
            ],
            'infraestrutura' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false
            ],
            'acabamento' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false
            ],
            'total' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false
            ],
            'updated_at datetime default current_timestamp on update current_timestamp',
            'created_at datetime default current_timestamp',
            'deleted_at datetime default null'
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('empreendimento_id', 'empreendimento', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
