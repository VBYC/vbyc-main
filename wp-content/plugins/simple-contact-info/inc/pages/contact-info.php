<?php
// Block direct requests
if ( !defined('ABSPATH') ) {
	exit();
}

// ------------- Functions -------------
function sci_contact_info_admin() {

	$hidden_field_name = 'contact_info';

	if (!empty($_POST) && ($_POST[$hidden_field_name] == 'Y')) {

		// Social links
		$twitter    	= !empty($_POST['twitter']) ? trim(strip_tags($_POST['twitter'])) : '';
		$facebook 		= !empty($_POST['facebook']) ? trim(strip_tags($_POST['facebook'])) : '';
		$youtube 		= !empty($_POST['youtube']) ? trim(strip_tags($_POST['youtube'])) : '';
		$google 		= !empty($_POST['google']) ? trim(strip_tags($_POST['google'])) : '';
		$linkedin 		= !empty($_POST['linkedin']) ? trim(strip_tags($_POST['linkedin'])) : '';
		

		// Contact info
		$phone 			= !empty($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
		$mob_phone 		= !empty($_POST['mob_phone']) ? trim(strip_tags($_POST['mob_phone'])) : '';
		$fax 			= !empty($_POST['fax']) ? trim(strip_tags($_POST['fax'])) : '';
		$email 			= !empty($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
		

		// Address
		$country 		= !empty($_POST['country']) ? trim(strip_tags($_POST['country'])) : '';
		$state 			= !empty($_POST['state']) ? trim(strip_tags($_POST['state'])) : '';
		$city 			= !empty($_POST['city']) ? trim(strip_tags($_POST['city'])) : '';
		$street 		= !empty($_POST['street']) ? trim(strip_tags($_POST['street'])) : '';
		$zip 			= !empty($_POST['zip']) ? trim(strip_tags($_POST['zip'])) : '';
		

		// Footer Nav
		$organization_name 		= !empty($_POST['organization_name']) ? trim(strip_tags($_POST['organization_name'])) : '';
		$footer_label_phone 	= !empty($_POST['footer_label_phone']) ? trim(strip_tags($_POST['footer_label_phone'])) : '';
		$footer_label_email 	= !empty($_POST['footer_label_email']) ? trim(strip_tags($_POST['footer_label_email'])) : '';
		$footer_label_social 	= !empty($_POST['footer_label_social']) ? trim(strip_tags($_POST['footer_label_social'])) : '';

		// URLs
		$urls_register        = !empty($_POST['urls_register']) ? trim(strip_tags($_POST['urls_register'])) : '';
		$urls_parent_login    = !empty($_POST['urls_parent_login']) ? trim(strip_tags($_POST['urls_parent_login'])) : '';
		$urls_alumni_login    = !empty($_POST['urls_alumni_login']) ? trim(strip_tags($_POST['urls_alumni_login'])) : '';
		$urls_alumni_registry = !empty($_POST['urls_alumni_registry']) ? trim(strip_tags($_POST['urls_alumni_registry'])) : '';;
		$urls_employment      = !empty($_POST['urls_employment']) ? trim(strip_tags($_POST['urls_employment'])) : '';
		$urls_google_map 	  = !empty($_POST['urls_google_map']) ? trim(strip_tags($_POST['urls_google_map'])) : '';


		// Custom social links
		if (!empty($_POST['customOpt'])) {
			foreach ($_POST['customOpt'] as $key => $value) {
				update_option($key,	trim(strip_tags($value)));
			}
		}

		// Social links
		update_option('qs_contact_twitter',	$twitter);
		update_option('qs_contact_facebook', $facebook);
		update_option('qs_contact_youtube', $youtube);
		update_option('qs_contact_google', $google);
		update_option('qs_contact_linkedin', $linkedin);

		// Contact info
		update_option('qs_contact_phone', $phone);
		update_option('qs_contact_mob_phone', $mob_phone);
		update_option('qs_contact_fax', $fax);
		update_option('qs_contact_email', $email);
		update_option('qs_footer_label_phone', $footer_label_phone);

		// Address
		update_option('qs_contact_country', $country);
		update_option('qs_contact_state', $state);
		update_option('qs_contact_city', $city); 
		update_option('qs_contact_street', $street);
		update_option('qs_contact_zip', $zip);

		// Footer Nav
		update_option('qs_organization_name', $organization_name);
		update_option('qs_footer_label_phone', $footer_label_phone);
		update_option('qs_footer_label_email', $footer_label_email); 
		update_option('qs_footer_label_social', $footer_label_social);

		// URLs
		update_option('qs_urls_register', $urls_register);
		update_option('qs_urls_parent_login', $urls_parent_login);
		update_option('qs_urls_alumni_login', $urls_alumni_login);
		update_option('qs_urls_alumni_registry ', $urls_alumni_registry );
		update_option('qs_urls_employment', $urls_employment);
		update_option('qs_urls_google_map', $urls_google_map);

		add_action('admin_notices', 'sci_updated_notice');
		$msg = __('Information successfully updated.', 'simple-contact-info');
		sci_updated_notice($msg);

		do_action( 'sci_updated_info' ); // clear widgets cache
	} 
	$customSocial = sci_get_options();
	?>
	<div class="wrap">
		<div class="icon-sci-contact">
			<img src="<?php echo SCI_URL . 'css/contact-info-icon.png'; ?>" alt="">
		</div>
		<h2><?php _e("Simple Contact Information", "simple-contact-info"); ?></h2>
		<form name="contactForm" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
			<h3><?php _e("Social links", "simple-contact-info"); ?></h3>

			<table class="form-table">
				<tbody>
					<tr>
						<th><label for="twitter"><?php _e("Twitter", "simple-contact-info"); ?></label></th>
						<td>
							<input id="twitter" name="twitter" class="regular-text" type="text" value="<?php echo get_option('qs_contact_twitter'); ?>" />
							<span class="description"><?php _e("Link to Twitter page. (example \"https://twitter.com/lehamotovilov\")", "simple-contact-info"); ?></span>
						</td>
					</tr>
					<tr>
						<th><label for="facebook"><?php _e("Facebook", "simple-contact-info"); ?></label></th>
						<td>
							<input id="facebook" name="facebook" class="regular-text" type="text" value="<?php echo get_option('qs_contact_facebook'); ?>" />
							<span class="description"><?php _e("Link to Facebook page. (example \"http://www.facebook.com/LehaMotovilov\")", "simple-contact-info"); ?></span>
						</td>
					</tr>
					<tr>
						<th><label for="youtube"><?php _e("YouTube", "simple-contact-info"); ?></label></th>
						<td>
							<input id="youtube" name="youtube" class="regular-text" type="text" value="<?php echo get_option('qs_contact_youtube'); ?>" />
							<span class="description"><?php _e("Link to YouTube page. (example \"http://www.youtube.com/user/AlekseyMotovilov\")", "simple-contact-info"); ?></span>
						</td>
					</tr>
					<tr>
						<th><label for="google"><?php _e("Google+", "simple-contact-info"); ?></label></th>
						<td>
							<input id="google" name="google" class="regular-text" type="text" value="<?php echo get_option('qs_contact_google'); ?>" />
						</td>
					</tr>
					<?php if (!empty($customSocial)) : ?>
						<?php foreach ($customSocial as $social) : ?>
							<tr>
								<th><label for="customOpt[<?php echo $social->option_name; ?>]"><?php echo ucfirst(str_replace('qs_contact_custom_', '', $social->option_name)); ?></label></th>
								<td>
									<input id="customOpt[<?php echo $social->option_name; ?>]" name="customOpt[<?php echo $social->option_name; ?>]" class="regular-text" type="text" value="<?php echo get_option($social->option_name); ?>" />
								</td>
							</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>
			<hr>
			<h3><?php _e("Contact info", "simple-contact-info"); ?></h3>
			<table class="form-table">
				<tbody>
					<tr>
						<th><label for="phone"><?php _e("Phone number", "simple-contact-info"); ?></label></th>
						<td><input id="phone" name="phone" class="regular-text" type="text" value="<?php echo get_option('qs_contact_phone'); ?>" /></td>
					</tr>					
					<tr>
						<th><label for="mob_phone"><?php _e("Mobile phone number", "simple-contact-info"); ?></label></th>
						<td><input id="mob_phone" name="mob_phone" class="regular-text" type="text" value="<?php echo get_option('qs_contact_mob_phone'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="fax"><?php _e("FAX", "simple-contact-info"); ?></label></th>
						<td><input id="fax" name="fax" class="regular-text" type="text" value="<?php echo get_option('qs_contact_fax'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="email"><?php _e("Email address", "simple-contact-info"); ?></label></th>
						<td><input id="email" name="email" class="regular-text" type="text" value="<?php echo get_option('qs_contact_email'); ?>" /></td>
					</tr>
				</tbody>
			</table>
			<hr>
			<h3><?php _e("Address", "simple-contact-info"); ?></h3>
			<table class="form-table">
				<tbody>
					<tr>
						<th><label for="country"><?php _e("Country", "simple-contact-info"); ?></label></th>
						<td><input id="country" name="country" class="regular-text" type="text" value="<?php echo get_option('qs_contact_country'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="state"><?php _e("State", "simple-contact-info"); ?></label></th>
						<td><input id="state" name="state" class="regular-text" type="text" value="<?php echo get_option('qs_contact_state'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="city"><?php _e("City", "simple-contact-info"); ?></label></th>
						<td><input id="city" name="city" class="regular-text" type="text" value="<?php echo get_option('qs_contact_city'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="street"><?php _e("Street", "simple-contact-info"); ?></label></th>
						<td><input id="street" name="street" class="regular-text" type="text" value="<?php echo get_option('qs_contact_street'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="zip"><?php _e("Zip code", "simple-contact-info"); ?></label></th>
						<td><input id="zip" name="zip" class="regular-text" type="text" value="<?php echo get_option('qs_contact_zip'); ?>" /></td>
					</tr>
				</tbody>
			</table>



			<hr>
			<h3><?php _e("Footer Navigation Labels", "simple-contact-info"); ?></h3>
			<table class="form-table">
				<tbody>
					<tr>
						<th><label for="organization_name"><?php _e("Organization Name", "simple-contact-info"); ?></label></th>
						<td><input id="organization_name" name="organization_name" class="regular-text" type="text" value="<?php echo get_option('qs_organization_name'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="footer_label_phone"><?php _e("Phone Label", "simple-contact-info"); ?></label></th>
						<td><input id="footer_label_phone" name="footer_label_phone" class="regular-text" type="text" value="<?php echo get_option('qs_footer_label_phone'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="footer_label_email"><?php _e("Email Label", "simple-contact-info"); ?></label></th>
						<td><input id="footer_label_email" name="footer_label_email" class="regular-text" type="text" value="<?php echo get_option('qs_footer_label_email'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="footer_label_social"><?php _e("Social Label", "simple-contact-info"); ?></label></th>
						<td><input id="footer_label_social" name="footer_label_social" class="regular-text" type="text" value="<?php echo get_option('qs_footer_label_social'); ?>" /></td>
					</tr>

				</tbody>
			</table>

			<hr>
			<h3><?php _e("URLs", "simple-contact-info"); ?></h3>
			<table class="form-table">
				<tbody>
					<tr>
						<th><label for="urls_register"><?php _e("Register", "simple-contact-info"); ?></label></th>
						<td><input id="urls_register" name="urls_register" class="regular-text" type="text" value="<?php echo get_option('qs_urls_register'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="urls_parent_login"><?php _e("Parent Login", "simple-contact-info"); ?></label></th>
						<td><input id="urls_parent_login" name="urls_parent_login" class="regular-text" type="text" value="<?php echo get_option('qs_urls_parent_login'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="urls_alumni_login"><?php _e("Alumni Login", "simple-contact-info"); ?></label></th>
						<td><input id="urls_alumni_login" name="urls_alumni_login" class="regular-text" type="text" value="<?php echo get_option('qs_urls_alumni_login'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="urls_alumni_registry"><?php _e("Alumni Registry", "simple-contact-info"); ?></label></th>
						<td><input id="urls_alumni_registry" name="urls_alumni_registry" class="regular-text" type="text" value="<?php echo get_option('qs_urls_alumni_registry'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="urls_employment"><?php _e("Employment", "simple-contact-info"); ?></label></th>
						<td><input id="urls_employment" name="urls_employment" class="regular-text" type="text" value="<?php echo get_option('qs_urls_employment'); ?>" /></td>
					</tr>
					<tr>
						<th><label for="urls_google_map"><?php _e("Google Map to VBYC", "simple-contact-info"); ?></label></th>
						<td><input id="urls_google_map" name="urls_google_map" class="regular-text" type="text" value="<?php echo get_option('qs_urls_google_map'); ?>" /></td>
					</tr>
				</tbody>
			</table>
			<p class="submit">
				<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">
				<input id="submit" class="button button-primary" type="submit" value="<?php _e('Update info', "simple-contact-info"); ?>" name="submit" />
			</p>
		</form>
	</div>
<?php }