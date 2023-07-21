<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://racmanuel.dev
 * @since      1.0.0
 *
 * @package    Auto_Repair_Shop_System
 * @subpackage Auto_Repair_Shop_System/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two hooks to
 * enqueue the admin-facing stylesheet and JavaScript.
 * As you add hooks and methods, update this description.
 *
 * @package    Auto_Repair_Shop_System
 * @subpackage Auto_Repair_Shop_System/admin
 * @author     racmanuel.dev <developer@racmanuel.dev>
 */
class Auto_Repair_Shop_System_Admin
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The unique prefix of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_prefix    The string used to uniquely prefix technical functions of this plugin.
     */
    private $plugin_prefix;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $plugin_name       The name of this plugin.
     * @param      string $plugin_prefix    The unique prefix of this plugin.
     * @param      string $version    The version of this plugin.
     */
    public function __construct($plugin_name, $plugin_prefix, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->plugin_prefix = $plugin_prefix;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     * @param string $hook_suffix The current admin page.
     */
    public function enqueue_styles($hook_suffix)
    {

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/auto-repair-shop-system-admin.css', array(), $this->version, 'all');

    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     * @param string $hook_suffix The current admin page.
     */
    public function enqueue_scripts($hook_suffix)
    {

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/auto-repair-shop-system-admin.js', array('jquery'), $this->version, false);

    }

    /**
     * Define the metabox and CMB2 fields configurations.
     */
    public function auto_repair_shop_system_metaboxes()
    {
        /**
         * Initiate the metabox
         */
        $cmb = new_cmb2_box(array(
            'id' => 'clients',
            'title' => __('Data of the Client', 'auto-repair-shop-system'),
            'object_types' => array('clientes'), // Post type
            'context' => 'normal',
            'priority' => 'high',
            'show_names' => true, // Show field names on the left
            'cmb_styles' => true, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ));

        $prefix_client = 'auto-repair-shop-system-client';

        // Nombre(s)
        $cmb->add_field(array(
            'name' => __('Name(s)', 'auto-repair-shop-system'),
            'desc' => __('Insert the name(s) of the client.', 'auto-repair-shop-system'),
            'id' => $prefix_client . 'name',
            'type' => 'text',
        ));

        // Apellido(s)
        $cmb->add_field(array(
            'name' => __('Last Name(s)', 'auto-repair-shop-system'),
            'desc' => __('Insert the last name(s) of the client.', 'auto-repair-shop-system'),
            'id' => $prefix_client . 'last-name',
            'type' => 'text',
        ));

        // Telefono
        $cmb->add_field(array(
            'name' => __('Phone', 'auto-repair-shop-system'),
            'desc' => __('Insert the phone of the client.', 'auto-repair-shop-system'),
            'id' => $prefix_client . 'phone',
            'type' => 'text',
            'attributes' => array(
                'type' => 'tel',
            ),
        ));

        $group_field_id = $cmb->add_field(array(
            'id' => 'wiki_test_repeat_group',
            'type' => 'group',
            'description' => __('Generates reusable form entries', 'cmb2'),
            // 'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Entry {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Entry', 'cmb2'),
                'remove_button' => __('Remove Entry', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        ));

        // Id's for group's fields only need to be unique for the group. Prefix is not needed.
        $cmb->add_group_field($group_field_id, array(
            'name' => 'Entry Title',
            'id' => 'title',
            'type' => 'text',
            // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
        ));

        $cmb->add_group_field($group_field_id, array(
            'name' => 'Description',
            'description' => 'Write a short description for this entry',
            'id' => 'description',
            'type' => 'textarea_small',
        ));

        $cmb->add_group_field($group_field_id, array(
            'name' => 'Entry Image',
            'id' => 'image',
            'type' => 'file',
        ));

        $cmb->add_group_field($group_field_id, array(
            'name' => 'Image Caption',
            'id' => 'image_caption',
            'type' => 'text',
        ));
        
    }
}
