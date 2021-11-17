<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBannerImagemTable extends Migration
{
    private $table = 'banner_imagem';

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
                'constraint' => 200,
                'null' => false
            ],
            'imagem_mobile' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true
            ],
            'link' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => false
            ],
            'conteudo' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'prioridade' => [
                'type' => 'INT',
                'constraint' => 11,
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
