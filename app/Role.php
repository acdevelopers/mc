<?php

namespace App;

use Spatie\Translatable\HasTranslations;

/**
 * Class Role
 *
 * @package App
 * @author Anitche Chisom
 */
class Role extends \Silber\Bouncer\Database\Role
{
    use HasTranslations;

    public $translatable = ['title'];
}
