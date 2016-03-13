<?php

class Form_Handler {

    public function __construct() {
        add_action( 'admin_init', array( $this, 'handle_form' ) );
        add_action( 'admin_init', array( $this, 'handle_settings_form' ) );
    }

    public function handle_form() {
        if ( ! isset( $_POST['submit_sambungan'] ) ) {
            return;
        }

        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'sambungan-new' ) ) {
            die( __( 'Are you cheating?', 'arwir' ) );
        }

        if ( ! current_user_can( 'read' ) ) {
            wp_die( __( 'Permission Denied!', 'arwir' ) );
        }

        $errors   = array();
        $page_url = admin_url( 'admin.php?page=sambungan-baru' );
        $field_id = isset( $_POST['field_id'] ) ? intval( $_POST['field_id'] ) : 0;

        $nama_lengkap = isset( $_POST['nama_lengkap'] ) ? sanitize_text_field( $_POST['nama_lengkap'] ) : '';
        $jalan = isset( $_POST['jalan'] ) ? sanitize_text_field( $_POST['jalan'] ) : '';
        $alamat_lengkap = isset( $_POST['alamat_lengkap'] ) ? wp_kses_post( $_POST['alamat_lengkap'] ) : '';
        $rt_rw = isset( $_POST['rt_rw'] ) ? sanitize_text_field( $_POST['rt_rw'] ) : '';
        $kecamatan = isset( $_POST['kecamatan'] ) ? sanitize_text_field( $_POST['kecamatan'] ) : '';
        $kelurahan = isset( $_POST['kelurahan'] ) ? sanitize_text_field( $_POST['kelurahan'] ) : '';
        $kode_pos = isset( $_POST['kode_pos'] ) ? sanitize_text_field( $_POST['kode_pos'] ) : '';
        $area_kota = isset( $_POST['area_kota'] ) ? sanitize_text_field( $_POST['area_kota'] ) : '';
        $luas_bangunan = isset( $_POST['luas_bangunan'] ) ? intval( $_POST['luas_bangunan'] ) : 0;
        $jumlah_penghuni = isset( $_POST['jumlah_penghuni'] ) ? intval( $_POST['jumlah_penghuni'] ) : 0;
        $telepon = isset( $_POST['telepon'] ) ? sanitize_text_field( $_POST['telepon'] ) : '';
        $telepon_genggam = isset( $_POST['telepon_genggam'] ) ? sanitize_text_field( $_POST['telepon_genggam'] ) : '';
        $email = isset( $_POST['email'] ) ? sanitize_text_field( $_POST['email'] ) : '';
        $fungsi_bangunan = isset( $_POST['fungsi_bangunan'] ) ? sanitize_text_field( $_POST['fungsi_bangunan'] ) : '';

        if ( ! $nama_lengkap ) {
            $errors[] = __( 'Error: Nama Lengkap is required', 'arwir' );
        }

        if ( ! $jalan ) {
            $errors[] = __( 'Error: Jalan is required', 'arwir' );
        }

        if ( ! $alamat_lengkap ) {
            $errors[] = __( 'Error: Alamat_lengkap is required', 'arwir' );
        }

        if ( ! $kelurahan ) {
            $errors[] = __( 'Error: Kelurahan is required', 'arwir' );
        }

        if ( ! $kode_pos ) {
            $errors[] = __( 'Error: Kode_pos is required', 'arwir' );
        }

        if ( ! $area_kota ) {
            $errors[] = __( 'Error: Area Kota is required', 'arwir' );
        }

        if ( ! $luas_bangunan ) {
            $errors[] = __( 'Error: Luas Bangunan is required', 'arwir' );
        }

        if ( ! $jumlah_penghuni ) {
            $errors[] = __( 'Error: Jumlah Penghuni is required', 'arwir' );
        }

        if ( ! $telepon ) {
            $errors[] = __( 'Error: Telepon is required', 'arwir' );
        }

        if ( ! $telepon_genggam ) {
            $errors[] = __( 'Error: Telepon Genggam is required', 'arwir' );
        }

        if ( ! $fungsi_bangunan ) {
            $errors[] = __( 'Error: Fungsi Bangunan is required', 'arwir' );
        }

        // bail out if error found
        if ( $errors ) {
            $first_error = reset( $errors );
            $redirect_to = add_query_arg( array( 'error' => $first_error ), $page_url );
            wp_safe_redirect( $redirect_to );
            exit;
        }

        $fields = array(
            'nama_lengkap' => $nama_lengkap,
            'jalan' => $jalan,
            'alamat_lengkap' => $alamat_lengkap,
            'rt_rw' => $rt_rw,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'kode_pos' => $kode_pos,
            'area_kota' => $area_kota,
            'luas_bangunan' => $luas_bangunan,
            'jumlah_penghuni' => $jumlah_penghuni,
            'telepon' => $telepon,
            'telepon_genggam' => $telepon_genggam,
            'email' => $email,
            'fungsi_bangunan' => $fungsi_bangunan,
        );

        $sambunganbaru_settings =  get_option( 'sambunganbaru_settings' );
        $kode_psb = ($sambunganbaru_settings['kode_psb'] ? $sambunganbaru_settings['kode_psb'] : 'PSB');
        $start_psb = ($sambunganbaru_settings['start_psb'] ? $sambunganbaru_settings['start_psb'] : null);

        if ( ! $field_id ) {
            $last_id=sambungan_get_last_id();
            if($last_id->max_id==null) {
                if ($start_psb==null) {
                    $new_id=$kode_psb."-".sprintf("%05s", 1);
                } else {
                    $new_id=$kode_psb."-".sprintf("%05s", (int)$start_psb);
                }
            } else {
                $data_id=(int)substr($last_id->max_id,4,5);
                $data_id++;
                $new_id=$kode_psb."-".sprintf("%05s", $data_id);
            }

            $fields['id']=$new_id;
            $fields['status']="create";

            $insert_id = sambungan_insert_sambungan( $fields );

        } else {

            $fields['id'] = $field_id;
            $fields['status']="create";

            $insert_id = sambungan_insert_sambungan( $fields );
        }

        if ( is_wp_error( $insert_id ) ) {
            $redirect_to = add_query_arg( array( 'message' => 'error' ), $page_url );
        } else {
            $redirect_to = add_query_arg( array( 'message' => 'success' ), $page_url );
        }

        wp_safe_redirect( $redirect_to );
        exit;
    }

    public function handle_settings_form() {
        // var_dump($_POST);
        // die();
        if ( ! isset( $_POST['submit_sambungan_settings'] ) ) {
            return;
        }

        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'sambungan-settings' ) ) {
            die( __( 'Are you cheating?', 'arwir' ) );
        }

        if ( ! current_user_can( 'read' ) ) {
            wp_die( __( 'Permission Denied!', 'arwir' ) );
        }

        $errors   = array();
        $page_url = admin_url( 'admin.php?page=sambungan-baru&action=settings' );

        $kode_psb = isset( $_POST['kode_psb'] ) ? sanitize_text_field( $_POST['kode_psb'] ) : '';
        $start_psb = isset( $_POST['start_psb'] ) ? sanitize_text_field( $_POST['start_psb'] ) : '';

        if ( ! $kode_psb ) {
            $errors[] = __( 'Error: Kode is required', 'arwir' );
        }

        if ( ! $start_psb ) {
            $errors[] = __( 'Error: No Mulai required', 'arwir' );
        }

        // bail out if error found
        if ( $errors ) {
            $first_error = reset( $errors );
            $redirect_to = add_query_arg( array( 'error' => $first_error ), $page_url );
            wp_safe_redirect( $redirect_to );
            exit;
        }

        $fields = array(
            'kode_psb'  => $kode_psb,
            'start_psb' => $start_psb,
        );

        $insert_id = insert_settings_sambungan( $fields );

        if ( is_wp_error( $insert_id ) ) {
            $redirect_to = add_query_arg( array( 'message' => 'error' ), $page_url );
        } else {
            $redirect_to = add_query_arg( array( 'message' => 'success' ), $page_url );
        }

        wp_safe_redirect( $redirect_to );
        exit;
    }
}

new Form_Handler();