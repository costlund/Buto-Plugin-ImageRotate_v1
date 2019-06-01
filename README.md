# Buto-Plugin-ImageRotate_v1

Method to rotate an image.

## Usage

Params:
- filename, name of file.
- degrees, 1, 2, or 3 for 90, 180, or 270 degrees.

```
wfPlugin::includeonce('image/rotate_v1');
$rotate = new PluginImageRotate_v1();
$rotate->rotate('_file_name_', 1);
```
