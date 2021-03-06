<?php
/**
 * Welcome screen getting started template
 */

?>
<div id="tab-activate" class="col cols panel flatsome-panel">
	<div class="inner-panel">
		<h3>Theme Purchase code</h3>
		<?php

    $slug = basename( get_template_directory() );

    $output = '';

    //get errors so we can show them
    $errors = get_option( $slug . '_wup_errors', array() );
    delete_option( $slug . '_wup_errors' ); //delete existing errors as we will handle them next
    //check if we have a purchase code saved already
    $purchase_code = sanitize_text_field( get_option( $slug . '_wup_purchase_code', '' ) );

    //output errors and notifications
    if ( ! empty( $errors ) ) {
      foreach ( $errors as $key => $error ) {
        echo '<div class="notice-error notice-alt"><p>' . $error . '</p></div>';
      }
    }

    if ( ! empty( $purchase_code ) ) {
      if ( ! empty( $errors ) ) {
        //since there is already a purchase code present - notify the user
        $slug = basename( get_template_directory() );
        update_option( strtolower( $slug ) . '_wup_purchase_code', '' );
        $purchase_code = false;
        echo '<div class="notice-warning notice-alt"><p>' . esc_html__( 'Purchase code removed.' ) . '</p></div>';
      } else {
        //this means a valid purchase code is present and no errors were found
       echo '<div class="notice-success notice-alt notice-large" style="margin-bottom:15px!important">' . __( 'Your <strong>purchase code is valid</strong>. Thank you! Enjoy Flatsome Theme and automatic updates.' ) . '</div>';
      }
    }

    if ( empty( $purchase_code ) ) {
    echo '<form class="wupdates_purchase_code" action="" method="post" onsubmit="return validateTerms(this);">' .
             __( '<p>Enter your purchase code and <strong>hit return/enter</strong>. Find out how to <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank">get your purchase code</a>.</p>' ) .
             '<input type="hidden" name="wupdates_pc_theme" value="' . $slug . '" />' .
             '<input type="text" id="' . sanitize_title( $slug ) . '_wup_purchase_code" name="' . sanitize_title( $slug ) . '_wup_purchase_code"
              value="' . $purchase_code . '" placeholder="Purchase code ( e.g. 9g2b13fa-10aa-2267-883a-9201a94cf9b5 )" style="width:100%; padding:10px;"/><br/>
              <p>
  				<input type="checkbox" id="envato-terms" name="terms" onclick="removeColor(this);">
  				<label for="envato-terms" style="display: inline-block;vertical-align: top;width: 90%;margin-top: 2px;font-size: 14px">Confirm that, according to the Envato License Terms, each license entitles one person for a single project. Creating multiple unregistered installations is a copyright violation. <a href="https://themeforest.net/licenses/standard" target="_blank">More info</a>.</label>
			  </p>
              <input type="submit" class="button button-large button-primary" value="Activate"/>
      </form>
      <script type="text/javascript">
		  function validateTerms(form){
		    if(!form.terms.checked) {
		      form.terms.parentNode.style.color = "#dc3232";
		      return false;
		    }
		    return true;
		  }
		  function removeColor(input) {
		    input.parentNode.style.removeProperty("color");
		  }
	  </script>';
  	} else {
    echo '<form class="wupdates_purchase_code" action="" method="post">' .
             '<input type="hidden" name="wupdates_pc_theme" value="' . $slug . '" />' .
             '<input type="text" id="' . sanitize_title( $slug ) . '_wup_purchase_code" name="' . sanitize_title( $slug ) . '_wup_purchase_code"
              value="' . $purchase_code . '" placeholder="Purchase code ( e.g. 9g2b13fa-10aa-2267-883a-9201a94cf9b5 )" style="width:100%; padding:10px;"/><br/><br/><input type="submit" class="button button-large button-primary" value="Update"/>
      </form>';
  	}
?>
  <small style="padding-top: 10px; margin-top: 15px; opacity: .8; display: block; border-top: 1px solid #eee;">A purchase code (license) is only valid for <strong>One Domain</strong>. Are you using this theme on a new domain? Purchase a <a href="//bit.ly/buy-flatsome" target="_blank">new license here</a> to get a new purchase code. To remove a purchase code simply remove the code and click update.</small>
	</div>
</div>
