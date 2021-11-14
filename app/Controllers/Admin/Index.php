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
        helper('form');
        if ($this->validate([
            'login' => 'required',
            'senha' => 'required|min_length[10]'
        ])) {
            return redirect()->to('admin/sessions');
        }
        return view('admin/index', ['validation' => $this->validator]);
    }
}
