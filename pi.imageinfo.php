<?php
/**
 * Plugin_imageinfo
 * Image information addon for Statamic
 *
 * @author     Rudy Affandi <rudy@adnetinc.com>
 * @copyright  2015
 * @link       https://github.com/lesaff/statamic-imageinfo
 * @license    http://opensource.org/licenses/MIT
 *
 * Versions
 * 1.0.3       Added modifier option
 * 1.0.2       Fixed issue with displaying images from array
 * 1.0.1       Added all available meta information from getimagesize()
 * 1.0.0       Initial release
 */

class Plugin_imageinfo extends Plugin {

    var $meta = array(
        'name'          => 'Image Info',
        'version'       => '1.0.3',
        'author'        => 'Rudy Affandi',
        'author_url'    => 'https://github.com/lesaff/statamic-imageinfo'
    );

    public function index() {
        $file       = $this->fetchParam("src", null, null, null, false);
        $image_info = $this->tasks->getImageInfo($file);

        return $image_info;
    }
}
