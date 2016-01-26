<?php
/**
 * Tasks_imageinfo
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

class Tasks_imageinfo extends Tasks {

    var $meta = array(
        'name'          => 'Image Info',
        'version'       => '1.0.3',
        'author'        => 'Rudy Affandi',
        'author_url'    => 'https://github.com/lesaff/statamic-imageinfo'
    );

    public function getImageInfo($file)
    {
        $image_info = getimagesize(BASE_PATH . $file);

        if (isset($image_info)){
            $vars = Array(
                'src'       =>  $file,
                'width'     =>  $image_info[0],
                'height'    =>  $image_info[1],
                'dimension' =>  $image_info[3],
                'bits'      =>  $image_info['bits'],
                'mime'      =>  $image_info['mime']
            );

            return $vars;
        }
    }
}
