<?php

if ( ! class_exists ( 'WP_List_Table' ) ) {
    require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

/**
 * List table class
 */
class Sambunganbaru_List_Table extends \WP_List_Table {

    function __construct() {
        parent::__construct( array(
            'singular' => 'sambungan',
            'plural'   => 'sambungans',
            'ajax'     => false
        ) );
    }

    function get_table_classes() {
        return array( 'widefat', 'fixed', 'striped', $this->_args['plural'] );
    }

    /**
     * Message to show if no designation found
     *
     * @return void
     */
    function no_items() {
        _e( 'No item found!', 'arwir' );
    }

    /**
     * Default column values if no callback found
     *
     * @param  object  $item
     * @param  string  $column_name
     *
     * @return string
     */
    function column_default( $item, $column_name ) {

        switch ( $column_name ) {
            case 'nama_lengkap':
                return $item->nama_lengkap;

            case 'jalan':
                return $item->jalan;

            case 'alamat_lengkap':
                return $item->alamat_lengkap;

            case 'rt_rw':
                return $item->rt_rw;

            case 'kecamatan':
                return $item->kecamatan;

            case 'kelurahan':
                return $item->kelurahan;

            case 'kode_pos':
                return $item->kode_pos;

            case 'area_kota':
                if ($item->area_kota=='1') {
                    $item->area_kota='Jakarta Barat';
                } else if ($item->area_kota=='2') {
                    $item->area_kota='Jakarta Selatan';
                } else if ($item->area_kota=='3') {
                    $item->area_kota='Jakarta Pusat';
                } else if ($item->area_kota=='4') {
                    $item->area_kota='Jakarta Utara';
                }
                return $item->area_kota;

            case 'luas_bangunan':
                return $item->luas_bangunan;

            case 'jumlah_penghuni':
                return $item->jumlah_penghuni;

            case 'telepon':
                return $item->telepon;

            case 'telepon_genggam':
                return $item->telepon_genggam;

            case 'email':
                return $item->email;

            case 'fungsi_bangunan':
                return $item->fungsi_bangunan;

            default:
                return isset( $item->$column_name ) ? $item->$column_name : '';
        }
    }

    /**
     * Get the column names
     *
     * @return array
     */
    function get_columns() {
        $columns = array(
            'cb'           => '<input type="checkbox" />',
            'nama_lengkap'      => __( 'Nama Lengkap', 'arwir' ),
            'jalan'      => __( 'Jalan', 'arwir' ),
            // 'alamat_lengkap'      => __( 'Alamat_lengkap', 'arwir' ),
            // 'rt_rw'      => __( 'RT/RW', 'arwir' ),
            'kecamatan'      => __( 'Kecamatan', 'arwir' ),
            'kelurahan'      => __( 'Kelurahan', 'arwir' ),
            'kode_pos'      => __( 'Kode_pos', 'arwir' ),
            'area_kota'      => __( 'Area Kota', 'arwir' ),
            // 'luas_bangunan'      => __( 'Luas Bangunan', 'arwir' ),
            // 'jumlah_penghuni'      => __( 'Jumlah Penghuni', 'arwir' ),
            'telepon'      => __( 'Telepon', 'arwir' ),
            'telepon_genggam'      => __( 'Telepon Genggam', 'arwir' ),
            // 'email'      => __( 'Email', 'arwir' ),
            // 'fungsi_bangunan'      => __( 'Fungsi Bangunan', 'arwir' ),

        );

        return $columns;
    }

    /**
     * Render the designation name column
     *
     * @param  object  $item
     *
     * @return string
     */
    function column_nama_lengkap( $item ) {

        $actions           = array();
        $actions['edit']   = sprintf( '<a href="%s" data-id="%d" title="%s">%s</a>', admin_url( 'admin.php?page=sambungan-baru&action=edit&id=' . $item->id ), $item->id, __( 'Edit this item', 'arwir' ), __( 'Edit', 'arwir' ) );
        $actions['delete'] = sprintf( '<a href="%s" class="submitdelete" data-id="%d" title="%s">%s</a>', admin_url( 'admin.php?page=sambungan-baru&action=delete&id=' . $item->id ), $item->id, __( 'Delete this item', 'arwir' ), __( 'Delete', 'arwir' ) );

        return sprintf( '<a href="%1$s"><strong>%2$s</strong></a> %3$s', admin_url( 'admin.php?page=sambungan-baru&action=view&id=' . $item->id ), $item->nama_lengkap, $this->row_actions( $actions ) );
    }

    /**
     * Get sortable columns
     *
     * @return array
     */
    function get_sortable_columns() {
        $sortable_columns = array(
            'name' => array( 'name', true ),
        );

        return $sortable_columns;
    }

    /**
     * Set the bulk actions
     *
     * @return array
     */
    function get_bulk_actions() {
        $actions = array(
            'trash'  => __( 'Move to Trash', 'arwir' ),
        );
        return $actions;
    }

    /**
     * Render the checkbox column
     *
     * @param  object  $item
     *
     * @return string
     */
    function column_cb( $item ) {
        return sprintf(
            '<input type="checkbox" name="sambungan_id[]" value="%d" />', $item->id
        );
    }

    /**
     * Set the views
     *
     * @return array
     */
    public function get_views_() {
        $status_links   = array();
        $base_link      = admin_url( 'admin.php?page=sample-page' );

        foreach ($this->counts as $key => $value) {
            $class = ( $key == $this->page_status ) ? 'current' : 'status-' . $key;
            $status_links[ $key ] = sprintf( '<a href="%s" class="%s">%s <span class="count">(%s)</span></a>', add_query_arg( array( 'status' => $key ), $base_link ), $class, $value['label'], $value['count'] );
        }

        return $status_links;
    }

    /**
     * Prepare the class items
     *
     * @return void
     */
    function prepare_items() {

        $columns               = $this->get_columns();
        $hidden                = array( );
        $sortable              = $this->get_sortable_columns();
        $this->_column_headers = array( $columns, $hidden, $sortable );

        $per_page              = 20;
        $current_page          = $this->get_pagenum();
        $offset                = ( $current_page -1 ) * $per_page;
        $this->page_status     = isset( $_GET['status'] ) ? sanitize_text_field( $_GET['status'] ) : '2';

        // only ncessary because we have sample data
        $args = array(
            'offset' => $offset,
            'number' => $per_page,
        );

        if ( isset( $_REQUEST['orderby'] ) && isset( $_REQUEST['order'] ) ) {
            $args['orderby'] = $_REQUEST['orderby'];
            $args['order']   = $_REQUEST['order'] ;
        }

        $this->items  = sambungan_get_all_sambungan( $args );

        $this->set_pagination_args( array(
            'total_items' => sambungan_get_sambungan_count(),
            'per_page'    => $per_page
        ) );
    }
}