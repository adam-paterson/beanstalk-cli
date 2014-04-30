<?php
namespace Beanstalk;

use Symfony\Component\Console\Application as BaseApplication;

/**
 * Class Application
 * @author Adam Paterson <adam@wearejh.com>
 * @package Beanstalk
 */
class Application extends BaseApplication
{
    /**
     * Application name
     */
    const APP_NAME = 'Beanstalk CLI';

    /**
     * Application version
     */
    const APP_VERSION = '1.0.0';

    /**
     * Static logo
     * @var string
     */
    private static $logo = "
    Beanstalk CLI
    ";

    /**
     * @return string
     */
    public function getHelp()
    {
        return self::$logo . parent::getHelp();
    }

    /**
     * @param null $autoloader
     */
    public function __construct($autoloader = null)
    {
        $this->autoloader = $autoloader;
        parent::__construct(self::APP_NAME, self::APP_VERSION);
    }

    /**
     * @return string
     */
    public function getLongVersion()
    {
        return parent::getLongVersion() . ' by <info>Adam Paterson</info>';
    }
}