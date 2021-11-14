<?php
declare(strict_types=1);

namespace App\Models;

class AdminModel extends BaseModel
{
    const IMG_PATH = 'assets' . DIRECTORY_SEPARATOR . 'avatar' . DIRECTORY_SEPARATOR;

    protected $table = 'admin';
    protected $allowedFields = ['avatar', 'nome', 'email', 'login', 'senha', 'situacao'];

    protected $validationRules = [
        'avatar' => [
            'label' => 'Avatar',
            'rules' => 'permity_empty'
        ],
        'nome' => [
            'label' => 'Nome',
            'rules' => 'required|min_length[2]|max_length[100]'
        ],
        'email' => [
            'label' => 'E-mail',
            'rules' => 'required|valid_email|max_length[128]|is_unique[admin.email,id,{id}]'
        ],
        'login' => [
            'label' => 'Login',
            'rules' => 'required|min_length[2]|max_length[20]|is_unique[admin.login,id,{id}]'
        ],
        'senha' => [
            'label' => 'Senha',
            'rules' => 'required|min_length[5]|max_length[20]'
        ],
        'situacao' => [
            'label' => 'Situação',
            'rules' => 'permit_empty|in_list[0,1]'
        ],
    ];

    /**
     * @param string $login
     * @param string $password
     * @return array|object|null
     */
    public function getLogin(string $login, string $password)
    {
        return $this->where([
                'login' => $login,
                'senha' => $password,
                'situacao' => '1'
            ])->first();
    }

    public function defineValor(array $data): array
    {
        $data = parent::defineValor($data);
        $data['data']['situacao'] = $data['data']['situacao'] ?? '0';
        return $data;
    }
}
