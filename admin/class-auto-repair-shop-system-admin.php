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

    public function acf_add_local_field_group()
    {
        acf_add_local_field_group(array(
            'key' => 'group_64d6899f985c7',
            'title' => 'Client',
            'fields' => array(
                array(
                    'key' => 'field_64d68ae5e71b2',
                    'label' => 'Contact',
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_64d689a0a2ff3',
                    'label' => 'Name(s)',
                    'name' => 'names',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_64d689c7a2ff4',
                    'label' => 'Last name(s)',
                    'name' => 'last_names',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_64d689dea2ff5',
                    'label' => 'Phone 1',
                    'name' => 'phone_1',
                    'aria-label' => '',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'min' => '',
                    'max' => '',
                    'placeholder' => '',
                    'step' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_64d68a09a2ff6',
                    'label' => 'Phone 2',
                    'name' => 'phone_2',
                    'aria-label' => '',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'min' => '',
                    'max' => '',
                    'placeholder' => '',
                    'step' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_64d68a0fa2ff7',
                    'label' => 'Address',
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_64d68a738b2df',
                    'label' => 'Address 1',
                    'name' => 'address_1',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_64d68aaa8b2e0',
                    'label' => 'Address 2',
                    'name' => 'address_2',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_64d68b22e086b',
                    'label' => 'ZIP',
                    'name' => 'zip',
                    'aria-label' => '',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'min' => '',
                    'max' => '',
                    'placeholder' => '',
                    'step' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_64d68aad8b2e1',
                    'label' => 'City',
                    'name' => 'city',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_64d68ac08b2e2',
                    'label' => 'Country',
                    'name' => 'country',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'client',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 0,
        ));
    }

    public function acf_add_local_post_types()
    {
        register_post_type('car', array(
            'labels' => array(
                'name' => 'Cars',
                'singular_name' => 'Car',
                'menu_name' => 'Cars',
                'all_items' => 'All Cars',
                'edit_item' => 'Edit Car',
                'view_item' => 'View Car',
                'view_items' => 'View Cars',
                'add_new_item' => 'Add New Car',
                'new_item' => 'New Car',
                'parent_item_colon' => 'Parent Car:',
                'search_items' => 'Search Cars',
                'not_found' => 'No cars found',
                'not_found_in_trash' => 'No cars found in Trash',
                'archives' => 'Car Archives',
                'attributes' => 'Car Attributes',
                'insert_into_item' => 'Insert into car',
                'uploaded_to_this_item' => 'Uploaded to this car',
                'filter_items_list' => 'Filter cars list',
                'filter_by_date' => 'Filter cars by date',
                'items_list_navigation' => 'Cars list navigation',
                'items_list' => 'Cars list',
                'item_published' => 'Car published.',
                'item_published_privately' => 'Car published privately.',
                'item_reverted_to_draft' => 'Car reverted to draft.',
                'item_scheduled' => 'Car scheduled.',
                'item_updated' => 'Car updated.',
                'item_link' => 'Car Link',
                'item_link_description' => 'A link to a car.',
            ),
            'public' => true,
            'show_in_rest' => false,
            'menu_icon' => 'dashicons-car',
            'supports' => array(
                0 => 'title',
                1 => 'thumbnail',
            ),
            'delete_with_user' => false,
        ));

        register_post_type('client', array(
            'labels' => array(
                'name' => 'Clients',
                'singular_name' => 'Client',
                'menu_name' => 'Clients',
                'all_items' => 'All Clients',
                'edit_item' => 'Edit Client',
                'view_item' => 'View Client',
                'view_items' => 'View Clients',
                'add_new_item' => 'Add New Client',
                'new_item' => 'New Client',
                'parent_item_colon' => 'Parent Client:',
                'search_items' => 'Search Clients',
                'not_found' => 'No clients found',
                'not_found_in_trash' => 'No clients found in Trash',
                'archives' => 'Client Archives',
                'attributes' => 'Client Attributes',
                'insert_into_item' => 'Insert into client',
                'uploaded_to_this_item' => 'Uploaded to this client',
                'filter_items_list' => 'Filter clients list',
                'filter_by_date' => 'Filter clients by date',
                'items_list_navigation' => 'Clients list navigation',
                'items_list' => 'Clients list',
                'item_published' => 'Client published.',
                'item_published_privately' => 'Client published privately.',
                'item_reverted_to_draft' => 'Client reverted to draft.',
                'item_scheduled' => 'Client scheduled.',
                'item_updated' => 'Client updated.',
                'item_link' => 'Client Link',
                'item_link_description' => 'A link to a client.',
            ),
            'public' => true,
            'show_in_rest' => false,
            'menu_icon' => 'dashicons-groups',
            'supports' => array(
                0 => 'title',
                1 => 'thumbnail',
            ),
            'delete_with_user' => false,
        ));

        register_post_type('quote', array(
            'labels' => array(
                'name' => 'Quotes',
                'singular_name' => 'Quote',
                'menu_name' => 'Quotes',
                'all_items' => 'All Quotes',
                'edit_item' => 'Edit Quote',
                'view_item' => 'View Quote',
                'view_items' => 'View Quotes',
                'add_new_item' => 'Add New Quote',
                'new_item' => 'New Quote',
                'parent_item_colon' => 'Parent Quote:',
                'search_items' => 'Search Quotes',
                'not_found' => 'No quotes found',
                'not_found_in_trash' => 'No quotes found in Trash',
                'archives' => 'Quote Archives',
                'attributes' => 'Quote Attributes',
                'insert_into_item' => 'Insert into quote',
                'uploaded_to_this_item' => 'Uploaded to this quote',
                'filter_items_list' => 'Filter quotes list',
                'filter_by_date' => 'Filter quotes by date',
                'items_list_navigation' => 'Quotes list navigation',
                'items_list' => 'Quotes list',
                'item_published' => 'Quote published.',
                'item_published_privately' => 'Quote published privately.',
                'item_reverted_to_draft' => 'Quote reverted to draft.',
                'item_scheduled' => 'Quote scheduled.',
                'item_updated' => 'Quote updated.',
                'item_link' => 'Quote Link',
                'item_link_description' => 'A link to a quote.',
            ),
            'public' => true,
            'show_in_rest' => false,
            'menu_icon' => 'dashicons-media-document',
            'supports' => array(
                0 => 'title',
                1 => 'thumbnail',
            ),
            'delete_with_user' => false,
        ));
    }

    //Auto add and update Title field:
    public function my_post_title_updater($post_id)
    {

        $my_post = array();
        $my_post[ 'ID' ] = $post_id;

        $names = get_field('names');
        $lastnames = get_field('lastnames');

        if (get_post_type() == 'client') {
            $my_post[ 'post_title' ] = $post_id . ' - ' . $names . ' ' . $lastnames;
        }

        // Update the post into the database
        wp_update_post($my_post);
    }

    public function my_acf_json_load_point( $paths ) {
        // Append the new path and return it.
        $paths[] = plugin_dir_path( __FILE__ ) . 'acf';
    
        return $paths;    
    }
}
