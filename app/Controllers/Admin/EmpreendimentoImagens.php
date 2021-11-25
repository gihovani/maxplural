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
        $where = [];
        $titulo = '';
        $id = (int)$this->request->getUri()->getSegment(4, '0');
        $empreendimento = new EmpreendimentoModel();
        if ($emp = $empreendimento->getWhere(['id' => $id])->getFirstRow()) {
            $titulo = ' - ' . $emp->titulo;
            $crud->where(['empreendimento_id' => $id]);
            $where = ['id' => $id];
            $crud->unsetSearchColumns(['empreendimento_id']);
        }

        if (!in_array($this->request->getPost('action'), ['remove', 'remove-multiple'])) {
            $crud->setRelation('empreendimento_id', 'empreendimento', 'titulo', $where);
        }

        $crud->setTable('empreendimento_imagem');
        $crud->setSubject('Empreendimento Imagem' . $titulo, 'Empreendimento Imagens' . $titulo);
        $crud->uniqueFields(['titulo']);
        $crud->requiredFields(['titulo']);
        $crud->setFieldUpload('imagem', EmpreendimentoImagemModel::IMG_PATH, base_url(EmpreendimentoImagemModel::IMG_PATH));
        $crud->displayAs('imagem', 'Imagem (1920x1080px)');
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
