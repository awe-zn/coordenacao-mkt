<?php

add_action('admin_menu', 'my_contact_page_settings_menu');

function my_contact_page_settings_menu()
{

  //create new top-level menu
  add_menu_page('My Cool Plugin Settings', 'Contato', 'administrator', __FILE__, 'my_contact_settings_page', plugins_url('/images/icon.png', __FILE__));

  //call register settings function
  add_action('admin_init', 'register_my_contact_page_settings');
}


function register_my_contact_page_settings()
{
  //register our settings
  register_setting('my-contact-page-settings-group', 'home_page_id');
  register_setting('my-contact-page-settings-group', 'ivory_search_shortcode_noticias');
}

function my_contact_settings_page()
{
?>
  <div class="wrap">
    <h1>Configurações</h1>

    <form method="post" action="options.php">
      <?php settings_fields('my-contact-page-settings-group'); ?>
      <?php do_settings_sections('my-contact-page-settings-group'); ?>
      <?php wp_nonce_field('my_contact_settings', 'my_contact_settings_nonce'); ?>
      <table class="form-table">

        <tr valign="top">
          <th scope="row"><?php esc_html_e('Home page ID'); ?></th>
          <td><input type="text" name="home_page_id" placeholder="" value="<?php echo esc_attr(get_option('home_page_id')); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row"><?php esc_html_e('Ivory Search Shortcode Notícias'); ?></th>
          <td><input type="text" name="ivory_search_shortcode_noticias" placeholder="" value="<?php echo esc_attr(get_option('ivory_search_shortcode_noticias')); ?>" /></td>
        </tr>
      </table>

      <?php submit_button(); ?>
    </form>
  </div>
<?php } ?>