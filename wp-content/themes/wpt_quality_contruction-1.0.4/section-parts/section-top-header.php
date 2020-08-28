<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Canyon Themes
 * @subpackage Quality Construction
 */
// retrieving Customizer Value
$section_option = quality_construction_get_option('quality_construction_top_header_section');
if ($section_option =='show') {
    $mobile_icon = quality_construction_get_option('quality_construction_top_header_section_phone_number_icon');
    $mobile_value = quality_construction_get_option('quality_construction_top_header_phone_no');
    $email_icon = quality_construction_get_option('quality_construction_email_icon');
    $email_value = quality_construction_get_option('quality_construction_top_header_email');
    $social_menu = quality_construction_get_option('quality_construction_social_link_hide_option');
    ?>
    <div class="top-header">
        <div class="container">
            <div class="row ">
                <ul class="contact-detail2 col-md-12 pull-left">
                                  <?php  
                    if (!empty($mobile_value)) {
                        ?>
                        <li class="pull-left">
                        <?php echo do_shortcode('[sp_wpcarousel id="37"]'); ?>
                        </li>

                        <li class="pull-right">
                            <a href="<?php echo esc_url('tel:'.$mobile_value) ?>" target="_blank">
                                <i class="fa <?php echo esc_attr($mobile_icon); ?>"></i>
                                <?php
                                esc_html_e('Call US ', 'quality-construction');
                                echo esc_html($mobile_value);
                                ?>
                            </a>
                        </li>
                    <?php }
                    if (!empty($email_value)) {
                        ?>
                        <li class="pull-right">
                            <a href="<?php echo esc_url('mailto:'.$email_value); ?>" target="_blank">
                                <i class="fa <?php echo esc_attr($email_icon); ?>"></i>
                                <?php echo esc_html($email_value); ?>
                            </a>
                        </li>
                    <?php } ?>
                  
                </ul>
              
                
            </div>
        </div>
    </div>
<?php } ?>