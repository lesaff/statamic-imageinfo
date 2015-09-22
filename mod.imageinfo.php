<?php
/**
 * Modifier_imageinfo
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

class Modifier_imageinfo extends Modifier {

    var $meta = array(
        'name'          => 'Image Info',
        'version'       => '1.0.3',
        'author'        => 'Rudy Affandi',
        'author_url'    => 'https://github.com/lesaff/statamic-imageinfo'
    );

    public function index($value, $parameters=array())
    {
        $image_info = $this->tasks->getImageInfo($value);

        if (isset($parameters[0])) {
            switch($parameters[0])
            {
                case 'src':
                    return $image_info['src'];
                    break;
                case 'width':
                    return $image_info['width'];
                    break;
                case 'height':
                    return $image_info['height'];
                    break;
                case 'dimension':
                    return $image_info['dimension'];
                    break;
                case 'bits':
                    return $image_info['bits'];
                    break;
                case 'channels':
                    return $image_info['channels'];
                    break;
                case 'mime':
                    return $image_info['mime'];
                    break;
                default:
                    return $image_info['dimension'];
                    break;
            }
        }
    }
}
