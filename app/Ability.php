<?php

namespace App;

use Spatie\Translatable\HasTranslations;

/**
 * Class Ability
 *
 * @package App
 * @author Anitche Chisom
 */
class Ability extends \Silber\Bouncer\Database\Ability
{
    use HasTranslations;

    public $translatable = ['title'];
}
