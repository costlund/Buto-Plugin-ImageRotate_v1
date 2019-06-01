<?php
/**
 * Rotate an image.
 */
class PluginImageRotate_v1{
  /**
   * Rotate an image.
   * @param sting $filename Full path to image.
   * @param int $degrees Values 1, 2 or 3 for 90, 180 or 270 degrees.
   * @return null
   */
  public function rotate($filename, $degrees){
    /**
     * Set degrees.
     */
    $do_degrees = null;
    if($degrees == 1){
      $do_degrees = 270;
    }else if($degrees == 2){
      $do_degrees = 180;
    }else if($degrees == 3){
      $do_degrees = 90;
    }else{
      throw new Exception('Param degrees in PluginImageRotate_v1 can only have value 1, 2 or 3.');
    }
    /**
     * Load.
     */
    $source = imagecreatefromjpeg($filename);
    /**
     * Rotate.
     */
    $rotate = imagerotate($source, $do_degrees, 0);
    /**
     * Save
     */
    imagejpeg($rotate, $filename);    
    /**
     * 
     */
    return null;
  }
}
