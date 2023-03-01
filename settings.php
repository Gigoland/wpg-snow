<?php
if (!empty($_POST['wpg_snow_action']) && $_POST['wpg_snow_action'] === 'save') {
    update_option('wpg_snow_image', $_POST['wpg_snow_image']);
    update_option('wpg_snow_number', $_POST['wpg_snow_number']);
    update_option('wpg_snow_disappear', $_POST['wpg_snow_disappear']);
    update_option('wpg_snow_height', $_POST['wpg_snow_height']);
    update_option('wpg_snow_url', $_POST['wpg_snow_url']);

    echo '*SETTINGS SAVED';
}
?>
<form name="wpg_snow_form" method="post">
  <input type="hidden" name="wpg_snow_action" value="save" />
  <table style="width: 100%">
    <tr>
      <td align="center"><h2>Snow Settings</h2></td>
    </tr>
    <tr>
      <td><input type="radio" name="wpg_snow_image" value="1"<?php if (get_option('wpg_snow_image') == 1){ ?> checked="checked"<?php } ?> /><img alt="Snow" src="<?php echo WP_PLUGIN_URL; ?>/wpg-snow/images/01.gif" width="auto" height="auto" border="0" /><hr /></td>
    </tr>
    <tr>
      <td><input type="radio" name="wpg_snow_image" value="2"<?php if (get_option('wpg_snow_image') == 2){ ?> checked="checked"<?php } ?> /><img alt="Snow" src="<?php echo WP_PLUGIN_URL; ?>/wpg-snow/images/02.gif" width="auto" height="auto" border="0" /><hr /></td>
    </tr>
    <tr>
      <td><input type="radio" name="wpg_snow_image" value="3"<?php if (get_option('wpg_snow_image') == 3){ ?> checked="checked"<?php } ?> /><img alt="Snow" src="<?php echo WP_PLUGIN_URL; ?>/wpg-snow/images/03.gif" width="auto" height="auto" border="0" /><hr /></td>
    </tr>
    <tr>
      <td><input type="radio" name="wpg_snow_image" value="4"<?php if (get_option('wpg_snow_image') == 4){ ?> checked="checked"<?php } ?> /><img alt="Snow" src="<?php echo WP_PLUGIN_URL; ?>/wpg-snow/images/04.gif" width="auto" height="auto" border="0" /><hr /></td>
    </tr>
    <tr>
      <td><input type="radio" name="wpg_snow_image" value="5"<?php if (get_option('wpg_snow_image') == 5){ ?> checked="checked"<?php } ?> /><img alt="Snow" src="<?php echo WP_PLUGIN_URL; ?>/wpg-snow/images/05.gif" width="auto" height="auto" border="0" /><hr /></td>
    </tr>
    <tr>
      <td><input type="radio" name="wpg_snow_image" value="6"<?php if (get_option('wpg_snow_image') == 6){ ?> checked="checked"<?php } ?> /><img alt="Snow" src="<?php echo WP_PLUGIN_URL; ?>/wpg-snow/images/06.gif" width="auto" height="auto" border="0" /><hr /></td>
    </tr>
    <tr>
      <td><input type="radio" name="wpg_snow_image" value="7"<?php if (get_option('wpg_snow_image') == 7){ ?> checked="checked"<?php } ?> /><img alt="Snow" src="<?php echo WP_PLUGIN_URL; ?>/wpg-snow/images/07.gif" width="auto" height="auto" border="0" /><hr /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="text" name="wpg_snow_number" value="<?php echo !empty(get_option('wpg_snow_number')) ? get_option('wpg_snow_number') : 10; ?>" /> Number of snow to render (default 10)</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="text" name="wpg_snow_disappear" value="<?php echo !empty(get_option('wpg_snow_disappear')) ? get_option('wpg_snow_disappear') : 0; ?>" /> Disappear after x seconds (0=never)</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="radio" name="wpg_snow_height" value="windowheight"<?php if (get_option('wpg_snow_height') == 'windowheight'){ ?> checked="checked"<?php } ?> /> Window height</td>
    </tr>
    <tr>
      <td><input type="radio" name="wpg_snow_height" value="pageheight"<?php if (get_option('wpg_snow_height') == 'pageheight'){ ?> checked="checked"<?php } ?> /> Page height</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="text" name="wpg_snow_url" value="<?php echo !empty(get_option('wpg_snow_url')) ? get_option('wpg_snow_url') : '#'; ?>" /> Link</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" value="Save settings" style="width:100%" /></td>
    </tr>
  </table>
</form>
<center><a href="https://gigoland.com/" target="_blank">WPG Snow by Gigoland.com</a></center>
