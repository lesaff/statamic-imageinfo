<?php
class Plugin_imageinfo extends Plugin {

  var $meta = array(
      'name'       => 'Image Info',
      'version'    => '1.0.0',
      'author'     => 'Rudy Affandi',
      'author_url' => 'https://github.com/lesaff'
  );

  public function index() {
    $file       = $this->fetchParam("src", null, null, null, false);
    $image_info = getimagesize(BASE_PATH . $file);

    $vars = Array(
      'width'  =>  $image_info[0],
      'height' =>  $image_info[1]
    );

    return $vars;
  }

}
