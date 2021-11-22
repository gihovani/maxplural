<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\EmpreendimentoImagemModel;
use App\Models\EmpreendimentoModel;
use GroceryCrud\Core\GroceryCrud;

class EmpreendimentoImagens extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $empreendimento = new EmpreendimentoModel();
        $id = (int)$this->request->getUri()->getSegment(4, '0');
        $where = [];
        if ($empreendimento->getWhere(['id' => $id])->getFirstRow()) {
            $crud->where(['empreendimento_id' => $id]);
            $where = ['id' => $id];
            $crud->unsetSearchColumns(['empreendimento_id']);
        }

        $crud->setTable('empreendimento_imagem');
        $crud->setSubject('Empreendimento Imagem', 'Empreendimento Imagens');
        $crud->uniqueFields(['titulo']);
        $crud->requiredFields(['titulo']);
        $crud->setFieldUpload('imagem', EmpreendimentoImagemModel::IMG_PATH, base_url(EmpreendimentoImagemModel::IMG_PATH));
        $crud->displayAs('imagem', 'Imagem (1920x1080px)');
        $crud->setRelation('empreendimento_id','empreendimento','titulo', $where);
        $crud->setRule('titulo', 'lengthBetween', ['2', '100']);
        $crud->displayAs('titulo', 'Título');
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new EmpreendimentoImagemModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new EmpreendimentoImagemModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
    }
}
