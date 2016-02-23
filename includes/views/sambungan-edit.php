<div class="wrap">
    <h1><?php _e( 'Add New Item', 'arwir' ); ?></h1>

    <?php $item = sambunganbaru_get_sambungan( $id ); ?>

    <form action="" method="post">

        <table class="form-table">
            <tbody>
                <tr class="row-nama-lengkap">
                    <th scope="row">
                        <label for="nama_lengkap"><?php _e( 'Nama Lengkap', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->nama_lengkap ); ?>" required="required" />
                    </td>
                </tr>
                <tr class="row-jalan">
                    <th scope="row">
                        <label for="jalan"><?php _e( 'Jalan', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="jalan" id="jalan" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->jalan ); ?>" required="required" />
                    </td>
                </tr>
                <tr class="row-alamat-lengkap">
                    <th scope="row">
                        <label for="alamat_lengkap"><?php _e( 'Alamat Lengkap', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <textarea name="alamat_lengkap" id="alamat_lengkap"placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" rows="5" cols="30" required="required"><?php echo esc_textarea( $item->alamat_lengkap ); ?></textarea>
                    </td>
                </tr>
                <tr class="row-rt-rw">
                    <th scope="row">
                        <label for="rt_rw"><?php _e( 'RT/RW', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="rt_rw" id="rt_rw" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->rt_rw ); ?>" />
                    </td>
                </tr>
                <tr class="row-kecamatan">
                    <th scope="row">
                        <label for="kecamatan"><?php _e( 'Kecamatan', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="kecamatan" id="kecamatan" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->kecamatan ); ?>" />
                    </td>
                </tr>
                <tr class="row-kelurahan">
                    <th scope="row">
                        <label for="kelurahan"><?php _e( 'Kelurahan', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="kelurahan" id="kelurahan" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->kelurahan ); ?>" required="required" />
                    </td>
                </tr>
                <tr class="row-kode-pos">
                    <th scope="row">
                        <label for="kode_pos"><?php _e( 'Kode Pos', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="kode_pos" id="kode_pos" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->kode_pos ); ?>" required="required" />
                    </td>
                </tr>
                <tr class="row-area-kota">
                    <th scope="row">
                        <label for="area_kota"><?php _e( 'Area Kota', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="area_kota" id="area_kota" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->area_kota ); ?>" required="required" />
                    </td>
                </tr>
                <tr class="row-luas-bangunan">
                    <th scope="row">
                        <label for="luas_bangunan"><?php _e( 'Luas Bangunan', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="number" name="luas_bangunan" id="luas_bangunan" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->luas_bangunan ); ?>" required="required" />
                    </td>
                </tr>
                <tr class="row-jumlah-penghuni">
                    <th scope="row">
                        <label for="jumlah_penghuni"><?php _e( 'Jumlah Penghuni', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="number" name="jumlah_penghuni" id="jumlah_penghuni" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->jumlah_penghuni ); ?>" required="required" />
                    </td>
                </tr>
                <tr class="row-telepon">
                    <th scope="row">
                        <label for="telepon"><?php _e( 'Telepon', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="telepon" id="telepon" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->telepon ); ?>" required="required" />
                    </td>
                </tr>
                <tr class="row-telepon-genggam">
                    <th scope="row">
                        <label for="telepon_genggam"><?php _e( 'Telepon Genggam', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="telepon_genggam" id="telepon_genggam" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->telepon_genggam ); ?>" required="required" />
                    </td>
                </tr>
                <tr class="row-email">
                    <th scope="row">
                        <label for="email"><?php _e( 'Email', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="email" id="email" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->email ); ?>" />
                    </td>
                </tr>
                <tr class="row-fungsi-bangunan">
                    <th scope="row">
                        <label for="fungsi_bangunan"><?php _e( 'Fungsi Bangunan', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="fungsi_bangunan" id="fungsi_bangunan" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?php echo esc_attr( $item->fungsi_bangunan ); ?>" required="required" />
                    </td>
                </tr>
             </tbody>
        </table>

        <input type="hidden" name="field_id" value="<?php echo $item->id; ?>">

        <?php wp_nonce_field( 'sambunganbaru-new' ); ?>
        <?php submit_button( __( 'Update Item', 'arwir' ), 'primary', 'submit_sambunganbaru' ); ?>

    </form>
</div>