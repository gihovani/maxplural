<?php
declare(strict_types=1);

namespace App\Database\Seeds;

use App\Models\NoticiaModel;
use CodeIgniter\Database\Seeder;
use Exception;

class NoticiaSeeder extends Seeder
{
    public function run()
    {
        $empreendimento = [
            'imagem' => 'img-post-content.png',
            'categoria' => 'Empreendimentos',
            'titulo' => 'Exemplo de Título Grande em 3 Linhas para um Empreendimento',
            'descricao' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend vitae tincidunt risus rutrum. Etiam mattis pellentesque dictum.',
            'conteudo' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu ultrices dui. Praesent lacinia ligula dolor. Proin vitae nisl suscipit, ultrices lacus vitae, scelerisque quam. Fusce dui turpis, luctus at accumsan vel, maximus at dolor. Morbi lobortis metus augue, a porttitor nibh ullamcorper id. Praesent ultrices porttitor arcu, sed bibendum lacus commodo eget. Cras non eros sapien. Ut facilisis est arcu, nec convallis purus rhoncus vel. In hac habitasse platea dictumst. Integer eu pellentesque ante. Phasellus sem diam, malesuada vitae sem non, posuere pretium diam.</p><p>Vivamus imperdiet elit eget tortor posuere porta. Suspendisse facilisis, enim a euismod iaculis, lacus ligula aliquam elit, vel vulputate tortor dolor at justo. Suspendisse in scelerisque odio, quis pharetra leo. Sed pretium tortor eget tristique convallis. Aenean rhoncus volutpat quam, vel imperdiet nulla accumsan non. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec augue lacus, fringilla a laoreet sed, malesuada id nisi. Pellentesque sit amet vehicula nunc. Vivamus ullamcorper tortor eu augue ultrices, sed molestie nulla vestibulum.</p><p>Curabitur ultrices dolor vulputate urna molestie, in accumsan purus volutpat. Maecenas porttitor euismod accumsan. Aenean leo enim, lacinia nec cursus a, pharetra in magna. Vestibulum congue ante dolor, non consectetur libero tincidunt id. Suspendisse at tellus non elit dapibus mollis. Maecenas at nisi semper felis sollicitudin congue. Aenean luctus mi ac enim egestas consectetur.</p>",
            'situacao' => 1
        ];
        $evento = [
            'imagem' => 'img-post-content.png',
            'categoria' => 'Eventos',
            'titulo' => 'Exemplo de Título Grande em 3 Linhas para um Evento',
            'descricao' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend vitae tincidunt risus rutrum. Etiam mattis pellentesque dictum.',
            'conteudo' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu ultrices dui. Praesent lacinia ligula dolor. Proin vitae nisl suscipit, ultrices lacus vitae, scelerisque quam. Fusce dui turpis, luctus at accumsan vel, maximus at dolor. Morbi lobortis metus augue, a porttitor nibh ullamcorper id. Praesent ultrices porttitor arcu, sed bibendum lacus commodo eget. Cras non eros sapien. Ut facilisis est arcu, nec convallis purus rhoncus vel. In hac habitasse platea dictumst. Integer eu pellentesque ante. Phasellus sem diam, malesuada vitae sem non, posuere pretium diam.</p><p>Vivamus imperdiet elit eget tortor posuere porta. Suspendisse facilisis, enim a euismod iaculis, lacus ligula aliquam elit, vel vulputate tortor dolor at justo. Suspendisse in scelerisque odio, quis pharetra leo. Sed pretium tortor eget tristique convallis. Aenean rhoncus volutpat quam, vel imperdiet nulla accumsan non. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec augue lacus, fringilla a laoreet sed, malesuada id nisi. Pellentesque sit amet vehicula nunc. Vivamus ullamcorper tortor eu augue ultrices, sed molestie nulla vestibulum.</p><p>Curabitur ultrices dolor vulputate urna molestie, in accumsan purus volutpat. Maecenas porttitor euismod accumsan. Aenean leo enim, lacinia nec cursus a, pharetra in magna. Vestibulum congue ante dolor, non consectetur libero tincidunt id. Suspendisse at tellus non elit dapibus mollis. Maecenas at nisi semper felis sollicitudin congue. Aenean luctus mi ac enim egestas consectetur.</p>",
            'situacao' => 1
        ];
        for ($i=0;$i<20;$i++) {
            $data = ($i % 2) ? $evento : $empreendimento;
            $data['slug'] = 'slug-noticia-'.$i;
            $this->insert($data);
        }
    }

    private function insert(array $data)
    {
        try {
            $model = new NoticiaModel();
            $model->insert($data);
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }
}
