<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContatoTable extends Migration
{
    private $table = 'contato';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => false
            ],
            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'assunto' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => false
            ],
            'mensagem' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'empreendimento_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
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
