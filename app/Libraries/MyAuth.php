<?php
declare(strict_types=1);

namespace App\Libraries;

use App\Models\AdminModel;

class MyAuth
{
    const ADMIN_KEY = 'admin';
    /**
     * @param string $login
     * @param string $password
     * @return bool
     */
    public function validate(string $login, string $password): bool
    {
        $admin = new AdminModel();
        $auth = $admin->getLogin($login, $password);
        $this->setAdmin($auth);

        return !is_null($auth);
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        session()->set(self::ADMIN_KEY, $admin);
    }

    /**
     * @param string ?$key
     * @return mixed
     */
    public function getAdmin($key = null)
    {
        $user = session()->get(self::ADMIN_KEY);
        if ($key === 'avatar') {
            return file_exists(FCPATH . AdminModel::IMG_PATH . $user->avatar) ?
                AdminModel::IMG_PATH . $user->avatar . '?' . $user->updated_at :
                AdminModel::IMG_PATH . 'user.png';
        }
        if ($key) {
            return $user->{$key};
        }

        return $user;
    }

    /**
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return $this->getAdmin() !== null;
    }

    /**
     * @return bool
     */
    public function logout(): bool
    {
        $this->setAdmin(null);
        return true;
    }

}
