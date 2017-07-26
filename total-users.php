<?php
/*
Plugin Name: Total Users
Plugin URI: http://vasthtml.com
Description: Shows how many users are on your Wordpress blog.
Version: 1.1
Author: Eric Hamby
Author URI: http://erichamby.com/
*/
function vasthtml_total_users() {
    global $wpdb;
	echo $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->users;");;
}
?>
<?php function get_version_total_users(){
	$plugin_data = implode('', file(ABSPATH."wp-content/plugins/total-users/total-users.php"));
	if (preg_match("|Version:(.*)|i", $plugin_data, $version)) {
		$version = $version[1];
	}
	return $version;
} ?>
<?php add_action('admin_menu', 'total_users_info_page'); 
function total_users_info_page(){
 add_menu_page('Total Users', 'Total Users', 8, 'total_users_info', 'total_users_info', get_bloginfo('url').'/wp-content/plugins/total-users/images/user.png');
}
function total_users_info() {
  echo '<div class="wrap">';
  
  echo '<div id="icon-index" class="icon32"><br /></div><h2>Donation Information</h2>';
  echo '<p>';
  echo '<table class="widefat">
    <thead>
      <tr>
        <th>Donations</th>
		<th><span style="float:right"><small>'.get_version_total_users().'</small></span></th>
      </tr>
    </thead>
		<tr class="alternate">
<td>If you like this plugin please help us and our efforts by giving a donation of any amount. <a href="http://vasthtml.com/donations/" target="_blank">Donations Page</a></td>
<td></td>
</tr>						
		</table>';
		echo '</p>';
  
  
  
  
echo '<div id="icon-users" class="icon32"><br /></div><h2>Total Users Information</h2>';
		echo '<p>';
  echo '<table class="widefat">
    <thead>
      <tr>
        <th>Vast HTML Plugins</th>
		<th><span style="float:right"><small>'.get_version_total_users().'</small></span></th>
      </tr>
    </thead>
		<tr class="alternate">
<td>Plugin Name:</td>
<td>Total Users</td>
</tr>

<tr class="alternate">
<td>Plugin Version:</td>
<td>'.get_version_total_users().'</td>
</tr>

<tr class="alternate">
<td>Build:</td>
<td>1100</td>
</tr>


<tr class="alternate">
<td>Author:</td>
<td><a href="http://erichamby.com" target="_blank">Eric Hamby</a></td>
</tr>

<tr class="alternate">
<td>Release Date:</td>
<td>9/06/2009</td>
</tr>

<tr class="alternate">
<td>FAQ:</td>
<td><a href="http://vasthtml.com/faq/" target="_blank">FAQ Page</a></td>
</tr>

<tr class="alternate">
<td>Donations:</td>
<td><a href="http://vasthtml.com/donations/" target="_blank">Donations Page</a></td>
</tr>

<tr class="alternate">
<td>Support Forums:</td>
<td><a href="http://vasthtml.com/support/" target="_blank">Vast HTML Support</a></td>
</tr>


	<tr class="alternate">
			<td colspan="2">
			<span class="button" style="float:left"><a href="http://vasthtml.com" target="_blank">Vast HTML</a></span>
			<span class="button" style="float:right"><a href="http://erichamby.com" target="_blank">Eric Hamby</a></span>
			</td>
		</tr>

							
		</table>';
		echo '</p>';
		
		
		
		
  echo '</div>';
}
?>
