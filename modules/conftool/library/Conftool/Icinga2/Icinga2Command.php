<?php

namespace Icinga\Module\Conftool\Icinga2;

class Icinga2Command extends Icinga2ObjectDefinition
{
    protected $type = 'CheckCommand'; // FIXME

    protected $v1AttributeMap = array(
        'command_line' => 'command',
    );
}