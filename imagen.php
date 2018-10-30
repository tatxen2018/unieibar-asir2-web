<?php
require 'vendor/autoload.php';
try {
  // Create a new SimpleImage object
  $image = new \claviska\SimpleImage();

  // Magic! ✨
  $image
    ->fromFile('kaneki2.jpg')                     // load image.jpg
    ->autoOrient()                              // adjust orientation based on exif data
    ->resize(320, 200)                          // resize to 320x200 pixels
    ->flip('z')                                 // flip horizontally
    ->colorize('DarkBlue')                      // tint dark blue
    ->border('black', 5)                       // add a 10 pixel black border
    ->toFile('anton.png', 'image/png')      // convert to PNG and save a copy to new-image.png
    ->toScreen();                               // output to the screen

  // And much more! 💪
} catch(Exception $err) {
  // Handle errors
  echo $err->getMessage();
}