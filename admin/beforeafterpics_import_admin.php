<?php  
 
    //must check that the user has the required capability 
    if (!current_user_can('manage_options'))
    {
      wp_die( __('You do not have sufficient permissions to access this page.') );
    }

    load_plugin_textdomain( 'bap', false, '/beforeafter-pictures/languages' );	
    
	if($_POST['beforeafterpics_hidden'] == 'Y') {  
        //Form data sent  
        $bap_linkfont = $_POST['bap_linkfont'];  
        update_option('bap_linkfont', $bap_linkfont);  
    
        $bap_linkfontsize = $_POST['bap_linkfontsize'];  
        update_option('bap_linkfontsize', $bap_linkfontsize);  
    
        $bap_link_color = $_POST['bap_link_color'];  
        update_option('bap_link_color', $bap_link_color);  
    
        $bap_link_visited_color = $_POST['bap_link_visited_color'];  
        update_option('bap_link_visited_color', $bap_link_visited_color);  
    
        $bap_link_hover_color = $_POST['bap_link_hover_color'];  
        update_option('bap_link_hover_color', $bap_link_hover_color);  
    
        $bap_link_active_color = $_POST['bap_link_active_color'];  
        update_option('bap_link_active_color', $bap_link_active_color);  

        $bap_animateintro = $_POST['bap_animateintro'];  
        update_option('bap_animateintro', $bap_animateintro);  

        $bap_introdelay = $_POST['bap_introdelay'];  
        update_option('bap_introdelay', $bap_introdelay);  

        $bap_introduration = $_POST['bap_introduration'];  
        update_option('bap_introduration', $bap_introduration);  

        $bap_showfulllinks = $_POST['bap_showfulllinks'];  
        update_option('bap_showfulllinks', $bap_showfulllinks);  

        $bap_slidertext = $_POST['bap_slidertext'];  
        update_option('bap_slidertext', $bap_slidertext);  

        $bap_linkbeforetext = $_POST['bap_linkbeforetext'];  
        update_option('bap_linkbeforetext', $bap_linkbeforetext);  

        $bap_linkaftertext = $_POST['bap_linkaftertext'];  
        update_option('bap_linkaftertext', $bap_linkaftertext);  

?>  
<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>  
<?php  
    } else {  
      //Normal page display  
      $bap_linkfont           = get_option('bap_linkfont');  
      $bap_linkfontsize       = get_option('bap_linkfontsize');  
      $bap_link_color         = get_option('bap_link_color');  
      $bap_link_visited_color = get_option('bap_link_visited_color');  
      $bap_link_hover_color   = get_option('bap_link_hover_color');  
      $bap_link_active_color  = get_option('bap_link_active_color');
      $bap_animateintro       = get_option('bap_animateintro');  
      $bap_introdelay         = get_option('bap_introdelay');  
      $bap_introduration      = get_option('bap_introduration');  
      $bap_showfulllinks      = get_option('bap_showfulllinks');
	  $bap_slidertext         = get_option('bap_slidertext'); 
	  $bap_linkbeforetext     = get_option('bap_linkbeforetext'); 
	  $bap_linkaftertext      = get_option('bap_linkaftertext'); 
    }  
?>    
<div class="wrap">  
   <?php    echo "<h2>" . __( 'Before/After Pictures PlugIn Options', 'bap' ) . "</h2>"; ?>  
 
   <form name="beforeafterpics_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">  
       <input type="hidden" name="beforeafterpics_hidden" value="Y">  
       <table>
       <tr>
       <th colspan="2" align="left"><?php    echo "<h4>" . __( 'Before/After-Pictures Default Settings (can be overwritten for each Before/After usage in a post)', 'bap' ) . "</h4>"; ?></th>
       </tr>
       <tr>
         <td><?php _e( 'Animated intro: ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_animateintro" value="<?php echo $bap_animateintro; ?>" size="20">
         <?php _e('ex: true/false' , 'bap' ); ?></td>
       </tr>  
       <tr>
         <td><?php _e( 'Intro delay (ms): ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_introdelay" value="<?php echo $bap_introdelay; ?>" size="20">
         <?php _e( 'ex: 1000' , 'bap' ); ?></td>
       </tr>  
       <tr>
         <td><?php _e( 'Intro duration (ms): ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_introduration" value="<?php echo $bap_introduration; ?>" size="20">
         <?php _e( 'ex: 1000' , 'bap' ); ?></td>
       </tr>  
       <tr>
         <td><?php _e( 'Show links: ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_showfulllinks" value="<?php echo $bap_showfulllinks; ?>" size="20">
         <?php _e( 'ex: true/false' , 'bap' ); ?></td>
       </tr>  
       <tr>
       <th colspan="2" align="left"><?php    echo "<h4>" . __( 'Before/After-Pictures Language Settings (can be set only here)' , 'bap' ) . "</h4>"; ?></th>
       </tr>
       <tr>
         <td><?php _e( 'Slider tooltip text: ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_slidertext" value="<?php echo $bap_slidertext; ?>" size="20">
         <?php _e( 'ex: drag me to compare pictures' , 'bap' ); ?></td>
       </tr>  
       <tr>
         <td><?php _e( 'Link text (Before): ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_linkbeforetext" value="<?php echo $bap_linkbeforetext; ?>" size="20">
         <?php _e( 'ex: Before' , 'bap' ); ?></td>
       </tr>  
       <tr>
         <td><?php _e( 'Link text (After): ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_linkaftertext" value="<?php echo $bap_linkaftertext; ?>" size="20">
         <?php _e( 'ex: After' , 'bap' ); ?></td>
       </tr>  
       <tr>
       <th colspan="2" align="left"><?php    echo "<h4>" . __( 'Before/After-Pictures CSS Settings (can be set only here)' , 'bap' ) . "</h4>"; ?></th>
       </tr>
       <tr>
         <td><?php _e( 'Link Font: ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_linkfont" value="<?php echo $bap_linkfont; ?>" size="20">
         <?php _e( 'ex: Verdana' , 'bap' ); ?></td>
       </tr>  
       <tr>
         <td><?php _e( 'Link Font Size: ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_linkfontsize" value="<?php echo $bap_linkfontsize; ?>" size="20">
         <?php _e( 'ex: 85%' , 'bap' ); ?></td>
       </tr>  
       <tr>
         <td><?php _e( 'Link Color: ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_link_color" value="<?php echo $bap_link_color; ?>" size="20">
         <?php _e( 'ex: black or #000000' , 'bap' ); ?></td>
       </tr>  
       <tr>
         <td><?php _e( 'Link Visited Color: ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_link_visited_color" value="<?php echo $bap_link_visited_color; ?>" size="20">
         <?php _e( 'ex: black or #000000' , 'bap' ); ?></td>
       </tr>  
       <tr>
         <td><?php _e( 'Link Hover Color: ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_link_hover_color" value="<?php echo $bap_link_hover_color; ?>" size="20">
         <?php _e( 'ex: black or #000000' , 'bap' ); ?></td>
       </tr>  
       <tr>
         <td><?php _e( 'Link Active Color: ' , 'bap' ); ?></td>
         <td><input type="text" name="bap_link_active_color" value="<?php echo $bap_link_active_color; ?>" size="20">
         <?php _e( 'ex: black or #000000' , 'bap' ); ?></td>
       </tr>  
       </table>
       <p class="submit">  
         <input type="submit" name="Submit" value="<?php _e( 'Update Options' , 'bap' ) ?>" />  
       </p>  
   </form>  
</div> 