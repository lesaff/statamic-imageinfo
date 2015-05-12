# Image Info Add-on for Statamic
By Rudy Affandi (2015)
Version 1.0.0

## What is this?
Use this plugin to get meta information from any given image

## Changelog
1.0.0 - Initial release

## Installation
Copy the 'imageinfo' folder to the '_add-ons' folder in your Statamic website.

## How to use
```
{{ imageinfo src="{ image }" }}
  width="{{ width }}" height="{{ height }}"
{{ /imageinfo }}
```

or
```
{{ imageinfo src="/assets/img/image.png" }}
  width="{{ width }}" height="{{ height }}"
{{ /imageinfo }}
```

*Parameters*
- `src`: The image source

*Available tag output*
- `width`
- `height`

## To do
- Add the rest of the meta information as tags
- Create modifier version of this plugin
- Clean up the code