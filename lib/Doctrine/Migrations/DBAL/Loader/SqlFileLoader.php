<?php

namespace Doctrine\Migrations\DBAL\Loader;

use Doctrine\Migrations\Loader\AbstractFileLoader;

class SqlFileLoader extends AbstractFileLoader
{
    protected function getName()
    {
        return 'SQL';
    }

    protected function getExtension()
    {
        return 'sql';
    }
}