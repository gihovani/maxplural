<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class Index extends BaseController
{
    /**
     * @return RedirectResponse|string
     */
    public function index()
    {
        $myAuth = \Config\Services::myAuth();
        if ($myAuth->isLoggedIn()) {
            return redirect()->to('admin/dashboard');
        }

        helper('form');
        if ($this->request->getMethod() === 'post' && $this->validate([
            'login' => 'required',
            'senha' => 'required|valid_admin[{login}]'
        ])) {
            return redirect()->to('admin/dashboard');
        }
        return view('admin/index', ['validation' =>  \Config\Services::validation()]);
    }

    public function logout(): RedirectResponse
    {
        $myAuth = \Config\Services::myAuth();
        $myAuth->logout();
        return redirect()->to('/admin')
            ->with('success', 'Você foi descontectado com sucesso.');
    }
}
