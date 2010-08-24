<div class="wrap">
<h2><?php _e('Hilight Sticky Settings','HilightSticky')?></h2>
<form method="post" action="options.php">
    <?php settings_fields( 'myoption-group'); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row"><?php _e('Sticky color：','HilightSticky')?></th>
        <td><input type="text" name="color" value="<?php echo get_option('color'); ?>" /></td>
        </tr>
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('save options','HilightSticky') ?>" />
    </p>

</form>
</div>