<?php

namespace Kunstmaan\Skylab;

use Cilex\Provider\Console\ContainerAwareApplication as BaseApplication;

class Application extends BaseApplication
{

    const VERSION = '@app_version@';

    public static $logo = '<fg=green;options=bold>
  ___________           .__        ___.
 /   _____/  | _____.__.|  | _____ \_ |__
 \_____  \|  |/ <   |  ||  | \__  \ | __ \
 /        \    < \___  ||  |__/ __ \| \_\ \
/_______  /__|_ \/ ____||____(____  /___  /
        \/     \/\/               \/    \/
~~~~~~~~~~~~~~~~~~~~~~~~~~~ by Kunstmaan.be
</fg=green;options=bold>
';

    public function __construct($name = 'UNKNOWN', $version = 'UNKNOWN')
    {
        parent::__construct('Skylab', self::VERSION);
    }

    public function getHelp()
    {
        return self::$logo . parent::getHelp();
    }
}
