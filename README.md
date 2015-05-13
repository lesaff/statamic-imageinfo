# Image Info Add-on for Statamic
By Rudy Affandi (2015)
Version 1.0.2

## What is this?
Use this plugin to get meta information from any given image

## Changelog
1.0.2 - Fixed issue with displaying images from array
1.0.1 - Added all available meta information from getimagesize()
1.0.0 - Initial release

## Installation
Copy the 'imageinfo' folder to the '_add-ons' folder in your Statamic website.

## How to use
```
{{ imageinfo src="{ image }" }}
  <img src="{{ image }}" {{ dimension }} alt="" />
{{ /imageinfo }}
```

returns

  `<img src="/assets/img/image.png" width="500" height="500" alt="" />`

or
```
{{ imageinfo src="/assets/img/image.png" }}
  <img src="/assets/img/image.png" width="{{ width }}" height="{{ height }}" alt="my Image" />
{{ /imageinfo }}
```

returns

`<img src="/assets/img/image.png" width="500" height="500" alt="my Image" />`

*Parameter*
- `src`: The image source

*Available tag output*
- `src`: The image url
- `width` returns the width of image
- `height` returns the height of image
- `dimension` returns `width="XX" height="YY"`
- `bits` returns the number of bits for each color
- `channel` returns either `3` for RGB, or `4` for CMYK
- `mime` returns image mime type

## To do
- Add the rest of the meta information as tags
- Create modifier version of this plugin
- Clean up the code