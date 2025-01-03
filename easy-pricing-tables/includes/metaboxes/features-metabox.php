<div id="dh_ptp_loading">
	<center style="margin: 50px;">Loading...</center>
</div>

<div id="dh_ptp_tabs_container" style="display: none;" class="my_meta_control">
    <ul id="dh_ptp_metabox_tabs">
        <li class="dh_ptp_tab_header"><a href="#dh_ptp_tabs_2"><?php esc_html_e('Template', 'easy-pricing-tables'); ?></a></li>
        <li class="dh_ptp_tab_header"><a href="#dh_ptp_tabs_1"><?php esc_html_e('Content', 'easy-pricing-tables'); ?></a></li>
        <li class="dh_ptp_tab_header"><a href="#dh_ptp_tabs_3"><?php esc_html_e('Design', 'easy-pricing-tables'); ?></a></li>
    </ul>

    <!-- clear our floats -->
    <div class="clear"></div>

    <?php include ( PTP_PLUGIN_PATH . '/includes/metaboxes/metabox-blocks/tab-template.php'); ?>
    <?php include ( PTP_PLUGIN_PATH . '/includes/metaboxes/metabox-blocks/tab-content.php'); ?>
    <?php include ( PTP_PLUGIN_PATH . '/includes/metaboxes/metabox-blocks/tab-advanced-settings.php'); ?>

    <div id="ptp-save-buttons">
        <div style="margin-left:10px;margin-right:10px;">
            <input type="hidden" name="publish" id="publish" value="1"/>
            <input type="hidden" name="dh_ptp_tab" id="dh_ptp_tab" value="#dh_ptp_tabs_2"/>
            <a style="float:left;" class="button button-large" id="save_preview" data-url="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Save & Preview', 'easy-pricing-tables'); ?></a>
            <input style="float:left; margin-left:10px;" name="save" id="save" type="submit" class="button button-large" accesskey="p" value="<?php esc_attr_e('Save', 'easy-pricing-tables'); ?>" />
            <a  style="float:left; margin-left:10px;" class="button button-large inline-lightbox button-deploy" href="#deploy" data-id="<?php the_ID(); ?>"><?php esc_html_e('Deploy (Get Shortcode)', 'easy-pricing-tables'); ?></a>
            <div class="clear"></div>
        </div>
    </div>

    <!-- This contains the lightbox content for the deploy-button -->
    <div style='display:none'>
        <div id='deploy' style='padding:10px; background:#fff;'>
            <p><?php esc_html_e('Copy the shortcode below and paste it wherever you want your pricing table to appear.', 'easy-pricing-tables'); ?></p>
            <input type="text" style="width: 300px;" readonly="readonly" onclick="this.select()" value="[easy-pricing-table id=&quot;<?php the_ID(); ?>&quot;]"/><br/>
        </div>
    </div>

</div>
