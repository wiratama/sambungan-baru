<div class="wrap">
    <h1><?php _e( 'Add New Item', 'arwir' ); ?></h1>

    <form action="" method="post">

        <table class="form-table">
            <tbody>
                <tr class="row-area-kota">
                    <th scope="row">
                        <label for="area_kota"><?php _e( 'Area Kota', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <select name="area_kota" id="area_kota" required="required">
                            <option value=""><?php echo __( 'Select One', 'arwir' ); ?></option>
                            <option value="1">Jakarta Barat</option>
                            <option value="2">Jakarta Selatan</option>
                            <option value="3">Jakarta Pusat</option>
                            <option value="4">Jakarta Utara</option>
                        </select>
                    </td>
                </tr>
                <tr class="row-kode-pos">
                    <th scope="row">
                        <label for="kode_pos"><?php _e( 'Kode Pos', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="kode_pos" id="kode_pos" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" required="required" disabled="disabled"/>
                        <div class="suggestions_kode_post" id="suggestions_kode_post"></div>
                    </td>
                </tr>
                <tr class="row-kelurahan">
                    <th scope="row">
                        <label for="kelurahan"><?php _e( 'Kelurahan', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="kelurahan_enl" id="kelurahan_enl" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" required="required" disabled="disabled"/>
                        <input type="hidden" name="kelurahan" id="kelurahan" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" required="required"/>
                    </td>
                </tr>
                <tr class="row-jalan">
                    <th scope="row">
                        <label for="jalan"><?php _e( 'Jalan', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="jalan" id="jalan" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" required="required" disabled="disabled"/>
                        <div class="suggestions_jalan" id="suggestions_jalan"></div>
                    </td>
                </tr>
                <tr class="row-nama-lengkap">
                    <th scope="row">
                        <label for="nama_lengkap"><?php _e( 'Nama Lengkap', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="regular-text sambunganbaru-field" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" required="required" disabled="disabled"/>
                    </td>
                </tr>
                <tr class="row-alamat-lengkap">
                    <th scope="row">
                        <label for="alamat_lengkap"><?php _e( 'Alamat Lengkap', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <textarea name="alamat_lengkap" id="alamat_lengkap"placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" rows="5" cols="30" required="required" disabled="disabled" class="sambunganbaru-field"></textarea>
                    </td>
                </tr>
                <tr class="row-rt-rw">
                    <th scope="row">
                        <label for="rt_rw"><?php _e( 'RT/RW', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="rt_rw" id="rt_rw" class="regular-text sambunganbaru-field" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" disabled="disabled"/>
                    </td>
                </tr>
                <tr class="row-kecamatan">
                    <th scope="row">
                        <label for="kecamatan"><?php _e( 'Kecamatan', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="kecamatan_enl" id="kecamatan_enl" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" disabled="disabled"/>
                        <input type="hidden" name="kecamatan" id="kecamatan" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value=""/>
                    </td>
                </tr>
                <tr class="row-luas-bangunan">
                    <th scope="row">
                        <label for="luas_bangunan"><?php _e( 'Luas Bangunan', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="number" name="luas_bangunan" id="luas_bangunan" class="regular-text sambunganbaru-field" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" required="required" disabled="disabled"/>
                    </td>
                </tr>
                <tr class="row-jumlah-penghuni">
                    <th scope="row">
                        <label for="jumlah_penghuni"><?php _e( 'Jumlah Penghuni', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="number" name="jumlah_penghuni" id="jumlah_penghuni" class="regular-text sambunganbaru-field" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" required="required" disabled="disabled"/>
                    </td>
                </tr>
                <tr class="row-telepon">
                    <th scope="row">
                        <label for="telepon"><?php _e( 'Telepon', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="telepon" id="telepon" class="regular-text sambunganbaru-field" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" required="required" disabled="disabled"/>
                    </td>
                </tr>
                <tr class="row-telepon-genggam">
                    <th scope="row">
                        <label for="telepon_genggam"><?php _e( 'Telepon Genggam', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="telepon_genggam" id="telepon_genggam" class="regular-text sambunganbaru-field" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" required="required" disabled="disabled"/>
                    </td>
                </tr>
                <tr class="row-email">
                    <th scope="row">
                        <label for="email"><?php _e( 'Email', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="email" id="email" class="regular-text sambunganbaru-field" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="" disabled="disabled"/>
                    </td>
                </tr>
                <tr class="row-fungsi-bangunan">
                    <th scope="row">
                        <label for="fungsi_bangunan"><?php _e( 'Fungsi Bangunan', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <select name="fungsi_bangunan" id="fungsi_bangunan" required="required" disabled="disabled" class="sambunganbaru-field">
                            <option value=""><?php echo __( 'Select One', 'arwir' ); ?></option>
                            <option value="Sosial">Sosial</option>
                            <option value="Rumah Tangga">Rumah Tangga</option>
                            <option value="Komersial">Komersial</option>
                        </select>
                    </td>
                </tr>
             </tbody>
        </table>

        <input type="hidden" name="field_id" value="0">

        <?php wp_nonce_field( 'sambungan-new' ); ?>
        <?php submit_button( __( 'Add item', 'arwir' ), 'primary', 'submit_sambungan' ); ?>

    </form>
</div>

<script type="text/javascript">
jQuery(document).ready(function($){
    $('#area_kota').change(function() {
        if($(this).val()!='') {
            $('#kode_pos').removeAttr('disabled');
        } else {
            $('#kode_pos').attr('disabled', 'disabled');
        }
    });

    $('#kode_pos').keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $('#telepon').keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $('#telepon_genggam').keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $('#kode_pos').keyup(function() {
        if ($('#kode_pos').val()=='') {
            $('#kelurahan_enl').val('');
            $('#kelurahan').val('');
            $('#kecamatan_enl').val('');
            $('#kecamatan').val('');
            $('#jalan').val('');
        }

        var val = $(this).val();
        var area = $('#area_kota').val();
        var length = val.length; 
        var html_el = '<ul class="list_kode_post">';
        var list_zip ='';
        $(this).next().show().empty();

        jQuery.ajax({
            type: "POST",
            url: "<?=admin_url( 'admin-ajax.php');?>",
            data: 'b_kode_pos='+val+'&b_area='+area,
            success: function(data) {
                $.each(data, function (index, valuedt) {
                  list_zip += '<li>'+valuedt['zip']+', '+valuedt['kelurahan']+', '+valuedt['kecamatan']+'</li>';
                });

                if(list_zip != '') {
                    html_el += ''+list_zip+'';
                } else {
                    html_el+='<li> -- Empty -- </li>';
                }

                html_el +="</ul>";
                $('#kode_pos').next().html(html_el);
            },
        });
    });

    // $('ul.list_kode_post li').live('click ',function(){
    $('.suggestions_kode_post').on('click','ul.list_kode_post li',function(){
        $('#suggestions_kode_post').hide();

        var split_zip = $(this).html().split(', ');
        if (split_zip[0]!=" -- Empty -- ") {            
            $('#kode_pos').val(split_zip[0]);
            $('#kelurahan_enl').val(split_zip[1]);
            $('#kecamatan_enl').val(split_zip[2]);
            $('#kelurahan').val(split_zip[1]);
            $('#kecamatan').val(split_zip[2]);
        } else {
            $('#kode_pos').val('');
            $('#kelurahan_enl').val('');
            $('#kecamatan_enl').val('');
            $('#kelurahan').val('');
            $('#kecamatan').val('');
        }

        if ($('#kelurahan').val()!='') {
            $('#jalan').removeAttr('disabled');
        } else {
            $('#jalan').attr('disabled', 'disabled');
        }
    });

    $('#jalan').keyup(function(){
        var val = $(this).val().toLowerCase();
        var length = val.length;
        $(this).next().show().empty();
        var list_jalan='';
        var kode_post = $('#kode_pos').val();
        var area = $('#area_kota').val();
        var html_el = '<ul class="list_jalan">';

        jQuery.ajax({
            type: "POST",
            url: "<?=admin_url( 'admin-ajax.php');?>",
            data: 'b_street='+val+'&b_kode_post='+kode_post+'&area='+area,
            success: function(data) {
                $.each(data, function (index, valuedt) {
                    list_jalan += '<li>'+valuedt['street_name']+'</li>';
                });

                if(list_jalan == '') { 
                    html_el += '<li> -- Empty -- </li>';
                } else {
                    html_el += ''+list_jalan+'';
                }

                html_el +="</ul>";
                $('#jalan').next().html(html_el);
            },
        });         
    });

    $('ul.list_jalan li').live('click ',function(){
    // $('.suggestions_jalan').on('click','ul.list_jalan li',function(){
        $('#suggestions_jalan').hide();

        if ($(this).html()!=" -- Empty -- ") {            
            $('#jalan').val($(this).html());
        } else {
            $('#jalan').val('');
        }

        if ($('#jalan').val()!='') {
            $('.sambunganbaru-field').removeAttr('disabled');
        } else {
            $('.sambunganbaru-field').attr('disabled', 'disabled');
        }
    });
});
</script>