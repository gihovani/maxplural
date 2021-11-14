<?php
declare(strict_types=1);

namespace App\Validation;

use App\Libraries\MyAuth;

class AuthRules
{
    public function valid_admin(?string $password, string $login): bool
    {
        /** @var MyAuth $myAuth */
        $myAuth = service('myAuth');
        return $myAuth->validate($login, $password);
    }
}
