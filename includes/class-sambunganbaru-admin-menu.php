<?php

/**
 * Admin Menu
 */
class Sambunganbaru_Admin_Menu {

    /**
     * Kick-in the class
     */
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }

    /**
     * Add menu items
     *
     * @return void
     */
    public function admin_menu() {

        /** Top Menu **/
        add_menu_page( __( 'Sambungan Baru', 'arwir' ), __( 'Sambungan Baru', 'arwir' ), 'manage_options', 'sambungan-baru', array( $this, 'plugin_page' ), 'dashicons-groups', null );

        add_submenu_page( 'sambungan-baru', __( 'Sambungan Baru', 'arwir' ), __( 'Sambungan Baru', 'arwir' ), 'manage_options', 'sambungan-baru', array( $this, 'plugin_page' ) );
        add_submenu_page( 'sambungan-baru', __( 'Settings', 'arwir' ), __( 'Settings', 'arwir' ), 'manage_options', 'sambungan-baru&action=settings', array( $this, 'plugin_page' ) );
    }

    /**
     * Handles the plugin page
     *
     * @return void
     */
    public function plugin_page() {
        $action = isset( $_GET['action'] ) ? $_GET['action'] : 'list';
        $id     = isset( $_GET['id'] ) ? $_GET['id'] : 0;

        switch ($action) {
            case 'view':

                $template = dirname( __FILE__ ) . '/views/sambungan-single.php';
                break;

            case 'edit':
                $template = dirname( __FILE__ ) . '/views/sambungan-edit.php';
                break;

            case 'new':
                $template = dirname( __FILE__ ) . '/views/sambungan-new.php';
                break;

            case 'delete':
                sambungan_delete_sambungan($id);
                $template = dirname( __FILE__ ) . '/views/sambungan-list.php';
                wp_safe_redirect( admin_url( 'admin.php?page=sambungan-baru' ) );
                break;

            case 'settings':
                $template = dirname( __FILE__ ) . '/views/sambungan-settings.php';
                break;

            default:
                $template = dirname( __FILE__ ) . '/views/sambungan-list.php';
                break;
        }

        if ( file_exists( $template ) ) {
            include $template;
        }
    }
}