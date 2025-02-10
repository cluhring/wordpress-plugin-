/*
Plugin Name:  Chris Luhring's First WP Paragraph Adder
Plugin URI:   https://www.wpbeginner.com/wp-tutorials/how-to-create-a-wordpress-plugin/
Description:  This Plugin will insert an animated follow me message linking to github and linkedin accounts. Displayed on the Plugins page in WordPress admin area.
Version:      1.0
Author:       WPBeginner
Author URI:   https://www.wpbeginner.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  chris-luhrings-first-wp-paragraph-adder
*/

<?php
function wpb_follow_us($content) {
 
// Only do this when a single post is displayed
if ( is_single() ) { 
 
// Message you want to display after the post
// Add URLs to my github and Linkedin profiles

$content .=
     '<p class="follow-us" id="supportroll">If you liked this article, then please follow me on  
     <a href="https://github.com/cluhring" title="Chris Luhring on Github" target="_blank" rel="nofollow">Github</a>
     and <a href="https://www.linkedin.com/in/cluhring/" title="Chris Luhring on LinkedIn" target="_blank" rel="nofollow">LinkedIn</a>.</p>
    <style>
        #supportroll {
            border: 2px solid #60047A;
            position: fixed;
            background-color: #00FFFF;
            color: #484848;
            padding: 20px;
            right: 0px;
            bottom: 50px;
            width: 300px;
            transform: translate(100%, 0);
            animation-delay: 0s;
            animation-play-state: running;
            animation-iteration-count: 2;
            animation-duration: 10s;
            animation-name: supportanimation;
        }
   
        @keyframes supportanimation {
            from {
            transform: translate(100%, 0);
            }
            to {
            transform: translate(0%, 0);
            }
        }
    </style>';     
    }
// Return the content
return $content; 
 
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'wpb_follow_us'); 