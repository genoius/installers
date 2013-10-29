<?php
namespace Composer\Installers;

class GenoiusInstaller extends BaseInstaller
{
    protected $locations = array(
        'uipack' => 'public/vendor/{$name}/',
    );
}
