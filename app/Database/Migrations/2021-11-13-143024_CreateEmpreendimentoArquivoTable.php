<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmpreendimentoArquivoTable extends Migration
{
    private $table = 'empreendimento_arquivo';

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
            'tabela_valores' => [
                'type' => 'ENUM',
                'constraint' => ['0', '1'],
                'default' => '0',
            ],
            'arquivo' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => false
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
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
