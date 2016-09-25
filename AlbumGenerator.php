<?php

/*
 * Plugin Name: Album Of The Week
 * Plugin URI: plugin.jspencerprogenv.org
 * Description: Shows the album art and details of a different album each week. 
 * Version: 1.0
 * Author: Jackson Spencer
 * Author URI: author.jspencerprogenv.org
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */
        // Arrays for albums, artists, and release years
            $albumarray = array("Malibu", "Ziggy Startdust", "Moving Pictures", 
            "Fly Like an Eagle", "Come Fly With Me", "Because The Internet", 
            "American Beauty", "Exile On Main Street", "Vienna Opera",
            "Thickfreakness", "Help", "Moondance", "Last Waltz");
            $artistarray = array("Anderson Paak", "David Bowie", "Rush", 
                "Steve Miller", "Frank Sinatra", "Childish Gambino", "Grateful Dead",
                "The Rolling Stones", "Joe Bonamassa", "The Black Keys", 
                "The Beatles", "Van Morrison", "The Band");
        
            $random = intval(0, albumarray.length - 1);
          
        
        add_filter( 'the_content', 'addAlbum');
        
        function addAlbum($content){
            $trigger = $content;
            if (strpos($trigger, "addAlbum")){
                $addAlbum = str_replace('addAlbum', replace(), $addAlbum);
                }
                return $addAlbum;
        }
        
        function replace(){
            echo "Album: " . $albumarray[0];
            echo "Artist: " . $artistarray[0];
            echo "Release: ";
        }
        
?>
