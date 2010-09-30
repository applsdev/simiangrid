<div id="admin_menu">
     <ul>   
         <li><?php echo anchor("$site_url/admin/maintenance/tab", lang('sg_admin_maintenance') ); ?></li>
         <li><?php echo anchor("$site_url/admin/add_user/tab", lang('sg_admin_add_user') ); ?></li>
     </ul>
</div>

<script>
    function handle_tab(event, ui) {
<?php if ( $this->config->item('enable_tooltips') ): ?>
        scan_tooltips("<?php echo site_url('about/tooltip/'); ?>");
<?php endif; ?>
    }

    var menu = $( "#admin_menu" ).tabs({ 
        ajaxOptions: { async: false },
        load: handle_tab
    });
    var tab = "<?php echo $tab; ?>";
    if ( tab == 'maintenance' ) {
        menu.tabs('select', 0);
    } else if ( tab == 'add_user' ) {
        menu.tabs('select', 1);
    }
</script>
