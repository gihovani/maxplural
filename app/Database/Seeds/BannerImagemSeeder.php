<?php
declare(strict_types=1);

namespace App\Database\Seeds;

use App\Models\BannerImagemModel;
use CodeIgniter\Database\Seeder;
use Exception;

class BannerImagemSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'imagem' => 'bg-slide-1.png',
            'imagem_mobile' => 'bg-slide-1-mob.png',
            'link' => 'site/empreendimentos',
            'titulo' => '',
            'conteudo' => "<div class='slider-text container'><h5>Viva com</h5><h4><i>PERSONALIDADE</i></h4></div><div class='marca-saiba-mais d-flex relative container'><img src='./assets/imgs/marcas/m-derby-logo.svg' alt='Derby Logo' />Saiba mais <span class='nextArrow-icon'></span></div>",
            'prioridade' => 1
        ];
        for($i=1;$i<=4;$i++) {
            $data['titulo'] = 'Banner 0'.$i;
            $data['prioridade'] = $i;
            $this->insert($data);
        }
    }

    private function insert(array $data)
    {
        try {
            $model = new BannerImagemModel();
            $model->insert($data);
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }
}
