<?php

/*
Plugin Name: MDatan List Builder
Plugin URI: https://mdatan.com/plugins/mdatan-list-builder
Description: The ultimate email list building plugin for WordPress. Capture new subscribers with a custom download upon opt-in. Build unlimited lists. Import and export subscribers easily with .csv
Version: 1.0
Author: MDatan
Author URI: https://mdatan.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text-Domain: mdatan-list-builder
*/


	
/* !0. TABLE OF CONTENTS */

/*
	
	1. HOOKS
        1.1 - registers all our custom shortcodes
	
	2. SHORTCODES
        2.1 - mlb_register_shortcodes()
        2.2 - mlb_form_shortcode()
		
	3. FILTERS
		
	4. EXTERNAL SCRIPTS
		
	5. ACTIONS
		
	6. HELPERS
		
	7. CUSTOM POST TYPES
	
	8. ADMIN PAGES
	
	9. SETTINGS
	
	10. MISCELLANEOUS 

*/




/* !1. HOOKS */

// 1.1
//hint: registers all our custom shortcodes on init
add_action('init', 'mlb_register_shortcodes');



/* !2. SHORTCODES */

/* !2.1 SHORTCODES */

//hint: registers all our custom shortcodes
function mlb_register_shortcodes() {
  add_shortcode('mlb_form', 'mlb_form_shortcode');
}

//2.2
//hint: returns a html string for an email capture form
function mlb_form_shortcode( $args, $content="" ) {
    
    //setup our output variable - the form html
    $output = '
    
        <div class="mlb">
            <form id="mlb_form" name="mlb_form class="mlb-form" method="post">
            
            <p class="mlb-input-container">
              
              <label>Your Name</label><br />
              <input type="text" name="mlb_fname" placeholder="First Name" />
              <input type="text" name="mlb_lname" placeholder="Last Name" />
            
            </p>
            
            <p class="mlb-input-container">
              
              <label>Your Email</label><br />
              <input type="email" name="mlb_email" placeholder="ex. you@email.com" />
              
            
            </p>';
    //including content in our form html if content is passed into the function
    if( strlen($content) ):

       $output .= '<div class="mlb-content">'. wpautop($content) .'</div>';
    endif;
    
    //completing our form html
            
             $output .= '<p class="mlb-input-container">
              
              <input type="submit" name="mlb_submit" value="Sign Me Up!" />
              
            
            </p>
            
            
            
            
            </form>
        </div>
    
    ';
    
    //return our results/html
    return $output;
}



/* !3. FILTERS */




/* !4. EXTERNAL SCRIPTS */




/* !5. ACTIONS */




/* !6. HELPERS */




/* !7. CUSTOM POST TYPES */




/* !8. ADMIN PAGES */




/* !9. SETTINGS */




/* !10. MISCELLANEOUS */





