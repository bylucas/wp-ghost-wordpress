<?php
// ADMIN AREA CUSTOMISING THE CATEGORY
// ----------------------------------------
// Customise parts of the admin area
add_action('admin_head', 'ghost_admin_head');
add_action('edit_term', 'ghost_save_tax_pic');
add_action('create_term', 'ghost_save_tax_pic');
function ghost_admin_head() {
$taxonomies = get_taxonomies();
$taxonomies = array('category');
if (is_array($taxonomies)) {
foreach ($taxonomies as $z_taxonomy) {
add_action($z_taxonomy . '_add_form_fields', 'ghost_add_field');
add_action($z_taxonomy . '_edit_form_fields', 'ghost_edit_field');
}
}
}
//Function to add category/taxonomy image
function ghost_add_field($taxonomy){ ?>
<div class="form-field">
    <label for="ghost_tax_pic">Image</label>
    <input type="text" name="ghost_tax_pic" id="ghost_tax_pic" value="" />
    <p class="description">Click on the text box to add category image.</p>
</div>
<?php ghost_script_css(); }
//Function to edit category/taxonomy image
function ghost_edit_field($taxonomy){
$ghost_tax_pic_url = get_option('ghost_tax_pic' . $taxonomy->term_id); ?>
<tr class="form-field">
    <th scope="row" valign="top">
        <label for="ghost_tax_pic">Image</label>
    </th>
    <td>
        <?php
        if(get_option('ghost_tax_pic' . $taxonomy->term_id) != '') ?>
        <img src="<?php echo get_option('ghost_tax_pic'. $taxonomy->term_id); ?>" width="300" height="auto" />
        <br />
        <input type="text" name="ghost_tax_pic" id="ghost_tax_pic" value="<?php echo get_option('ghost_tax_pic' . $taxonomy->term_id); ?>" />
        <p class="description">Click on the text box to add category image.</p>
    </td>
</tr>
<?php ghost_script_css(); }
function ghost_script_css(){ ?>
<script type="text/javascript">
jQuery(document).ready(function() {
var fileInput = '';
jQuery('#ghost_tax_pic').live('click',

function() {
fileInput = jQuery('#ghost_tax_pic');
tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
return false;
});
window.original_send_to_editor = window.send_to_editor;
window.send_to_editor = function(html) {
if (fileInput) {
fileurl = jQuery('img', html).attr('src');
if (!fileurl) {
fileurl = jQuery(html).attr('src');
}
jQuery(fileInput).val(fileurl);
tb_remove();
} else {
window.original_send_to_editor(html);
}
};
});
</script>
<?php }
// save our taxonomy image while edit or save term
function ghost_save_tax_pic($term_id) {
if (isset($_POST['ghost_tax_pic']))
update_option('ghost_tax_pic' . $term_id, $_POST['ghost_tax_pic']);
}
// output taxonomy image url for the given term_id (NULL by default)
function ghost_tax_pic_url($term_id = NULL) {
if ($term_id)
return get_option('ghost_tax_pic' . $term_id);
elseif (is_category())
return get_option('ghost_tax_pic' . get_query_var('cat')) ;
elseif (is_tax()) {
$current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
return get_option('ghost_tax_pic' . $current_term->term_id);
}
}
//////////////////////////////////////////////////////////
// Remove all instances of Tags
add_action('init', 'myprefix_remove_tax');
function myprefix_remove_tax() {
register_taxonomy('post_tag', array());
}