<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaginaTable extends Migration
{
    private $table = 'pagina';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tipo' => [
                'type' => 'ENUM',
                'constraint' => ['pagina', 'noticias', 'empreendimentos'],
                'default' => 'pagina',
            ],
            'imagem' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'palavras_chave' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'descricao' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => false
            ],
            'conteudo' => [
                'type' => 'LONGTEXT',
                'null' => false
            ],
            'style' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'javascript' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'situacao' => [
                'type' => 'ENUM',
                'constraint' => ['1', '0'],
                'default' => '1',
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
