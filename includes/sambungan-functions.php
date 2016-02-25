<?php

/**
 * Get all sambungan
 *
 * @param $args array
 *
 * @return array
 */
function sambungan_get_all_sambungan( $args = array() ) {
    global $wpdb;

    $defaults = array(
        'number'     => 20,
        'offset'     => 0,
        'orderby'    => 'id',
        'order'      => 'ASC',
    );

    $args      = wp_parse_args( $args, $defaults );
    $cache_key = 'sambungan-all';
    $items     = wp_cache_get( $cache_key, 'arwir' );

    if ( false === $items ) {
        $items = $wpdb->get_results( 'SELECT * FROM ' . $wpdb->prefix . 'sambungan_baru ORDER BY ' . $args['orderby'] .' ' . $args['order'] .' LIMIT ' . $args['offset'] . ', ' . $args['number'] );

        wp_cache_set( $cache_key, $items, 'arwir' );
    }

    return $items;
}

/**
 * Fetch all sambungan from database
 *
 * @return array
 */
function sambungan_get_sambungan_count() {
    global $wpdb;

    return (int) $wpdb->get_var( 'SELECT COUNT(*) FROM ' . $wpdb->prefix . 'sambungan_baru' );
}

/**
 * Fetch a single sambungan from database
 *
 * @param int   $id
 *
 * @return array
 */
function sambungan_get_sambungan( $id = 0 ) {
    global $wpdb;

    return $wpdb->get_row( $wpdb->prepare( 'SELECT * FROM ' . $wpdb->prefix . 'sambungan_baru WHERE id = %d', $id ) );
}

/**
 * Insert a new sambungan
 *
 * @param array $args
 */
function sambungan_insert_sambungan( $args = array() ) {
    global $wpdb;

    $defaults = array(
        'id'         => null,
        'nama_lengkap' => '',
        'jalan' => '',
        'alamat_lengkap' => '',
        'rt_rw' => '',
        'kecamatan' => '',
        'kelurahan' => '',
        'kode_pos' => '',
        'area_kota' => '',
        'luas_bangunan' => '',
        'jumlah_penghuni' => '',
        'telepon' => '',
        'telepon_genggam' => '',
        'email' => '',
        'fungsi_bangunan' => '',

    );

    $args       = wp_parse_args( $args, $defaults );
    $table_name = $wpdb->prefix . 'sambungan_baru';

    // some basic validation
    if ( empty( $args['nama_lengkap'] ) ) {
        return new WP_Error( 'no-nama_lengkap', __( 'No Nama Lengkap provided.', 'arwir' ) );
    }
    if ( empty( $args['jalan'] ) ) {
        return new WP_Error( 'no-jalan', __( 'No Jalan provided.', 'arwir' ) );
    }
    if ( empty( $args['alamat_lengkap'] ) ) {
        return new WP_Error( 'no-alamat_lengkap', __( 'No Alamat_lengkap provided.', 'arwir' ) );
    }
    if ( empty( $args['kelurahan'] ) ) {
        return new WP_Error( 'no-kelurahan', __( 'No Kelurahan provided.', 'arwir' ) );
    }
    if ( empty( $args['kode_pos'] ) ) {
        return new WP_Error( 'no-kode_pos', __( 'No Kode_pos provided.', 'arwir' ) );
    }
    if ( empty( $args['area_kota'] ) ) {
        return new WP_Error( 'no-area_kota', __( 'No Area Kota provided.', 'arwir' ) );
    }
    if ( empty( $args['luas_bangunan'] ) ) {
        return new WP_Error( 'no-luas_bangunan', __( 'No Luas Bangunan provided.', 'arwir' ) );
    }
    if ( empty( $args['jumlah_penghuni'] ) ) {
        return new WP_Error( 'no-jumlah_penghuni', __( 'No Jumlah Penghuni provided.', 'arwir' ) );
    }
    if ( empty( $args['telepon'] ) ) {
        return new WP_Error( 'no-telepon', __( 'No Telepon provided.', 'arwir' ) );
    }
    if ( empty( $args['telepon_genggam'] ) ) {
        return new WP_Error( 'no-telepon_genggam', __( 'No Telepon Genggam provided.', 'arwir' ) );
    }
    if ( empty( $args['fungsi_bangunan'] ) ) {
        return new WP_Error( 'no-fungsi_bangunan', __( 'No Fungsi Bangunan provided.', 'arwir' ) );
    }

    // remove row id to determine if new or update
    $row_id = (int) $args['id'];
    unset( $args['id'] );

    if ( ! $row_id ) {

        $args['date'] = current_time( 'mysql' );

        // insert a new
        if ( $wpdb->insert( $table_name, $args ) ) {
            return $wpdb->insert_id;
        }

    } else {

        // do update method here
        if ( $wpdb->update( $table_name, $args, array( 'id' => $row_id ) ) ) {
            return $row_id;
        }
    }

    return false;
}