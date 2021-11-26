<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateConfiguracaoTable extends Migration
{
    private $table = 'configuracao';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'telefone_fixo' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'telefone_whatsapp' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'telefone_vendas_fixo' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'telefone_vendas_whatsapp' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'facebook' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'instagram' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'linkedin' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'youtube' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'whatsapp' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'whatsapp_vendas' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'chat_online' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'central_vendas' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'horario_atendimento' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'endereco' => [
                'type' => 'TEXT',
                'null' => true
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
