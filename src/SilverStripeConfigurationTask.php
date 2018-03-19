<?php
/**
 * Created by PhpStorm.
 * User: Gordon Anderson
 * Date: 15/3/2561
 * Time: 0:34 น.
 */

class SilverStripeConfigurationTask extends \SilverStripe\Dev\BuildTask
{
    protected $title = 'SilverStripe configurator';
    protected $description = 'Apply some default config files for a new site';
    protected $enabled = true;
    private static $segment = 'configure';


    /**
     * Execute the task
     *
     * @param \SilverStripe\Control\HTTPRequest $request
     * @return null
     */
    public function run($request)
    {
        echo 'Running task';
        $canAccess = ( \SilverStripe\Control\Director::isDev() || \SilverStripe\Control\Director::is_cli() || Permission::check("ADMIN") );
        if (!$canAccess) {
            return Security::permissionFailure($this);
        }
        $csv = $_GET['configs'];
        $configs = explode(',', $csv);

        foreach ($configs as $config) {
            switch ($config) {
                case "mailhog":
                    $this->copyConfigurationFile('mailhog.yml');
                    break;
                case "blogwidget":
                    $this->copyConfigurationFile('blogwidgets.yml');
                    break;
                case "lastedited":
                    $this->copyConfigurationFile('last_edited_indexes.yml');
                    break;
                case "logfile":
                    $this->copyConfigurationFile('logging.yml');
                    break;
                case "comments":
                    $this->copyConfigurationFile('comments.yml');
                    break;
                default:
                    error_log('Config ' . $config . ' not recognized');
                    break;
            }
        }
    }

    /**
     * Copy a config file by name to the mysite/_config directory
     * @param $name the name of the config file, e.g. mailhog.yml
     */
    private function copyConfigurationFile($name)
    {
        $sourcePath = getcwd() . "/vendor/suilven/silverstripe-configurator/configurations/" . $name;
        $destinationPath = getcwd() . "/mysite/_config/" . $name;
        copy($sourcePath, $destinationPath);
    }
}
