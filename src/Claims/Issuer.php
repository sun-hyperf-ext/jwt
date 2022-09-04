<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/jwt
 *
 * @link     https://github.com/hyperf-extension/jwt
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/jwt/blob/master/LICENSE
 */
namespace HyperfExtension\Jwt\Claims;

class Issuer extends AbstractClaim
{
    protected $name = 'iss';

    public function validate(bool $ignoreExpired = false): bool
    {
        return true;
    }
}
