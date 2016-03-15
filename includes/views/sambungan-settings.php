<?php 
    $sambunganbaru_settings =  get_option( 'sambunganbaru_settings' );
    $kode_psb = ($sambunganbaru_settings['kode_psb'] ? $sambunganbaru_settings['kode_psb'] : '');
    $start_psb = ($sambunganbaru_settings['start_psb'] ? $sambunganbaru_settings['start_psb'] : '');

?> 

<div class="wrap">
    <h1><?php _e( 'Settings Sambungan Baru', 'arwir' ); ?></h1>

    <form action="" method="post">

        <table class="form-table">
            <tbody>
                <tr class="row-kode-psb">
                    <th scope="row">
                        <label for="kode_psb"><?php _e( 'Kode', 'arwir' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="kode_psb" id="kode_psb" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?=$kode_psb;?>" required="required" autocomplete="off"/><br/>
                        <span class="sample-kode" id="sample-kode"></span>
                    </td>
                </tr>
                <tr class="row-start-psb">
                    <th scope="row">
                        <label for="start_psb"><?php _e( 'No Mulai', 'arwir' ); ?></label><br/>
                        <span class="help">Jika nomor mulai adalah PSB-00025, cukup insert 25</span>
                    </th>
                    <td>
                        <input type="text" name="start_psb" id="start_psb" class="regular-text" placeholder="<?php echo esc_attr( '', 'arwir' ); ?>" value="<?=$start_psb;?>" required="required" autocomplete="off"/>
                    </td>
                </tr>
             </tbody>
        </table>
        <?php wp_nonce_field( 'sambungan-settings' ); ?>
        <?php submit_button( __( 'Add item', 'arwir' ), 'primary', 'submit_sambungan_settings' ); ?>

    </form>
</div>

<script type="text/javascript">
jQuery(document).ready(function($){
    $('#start_psb').keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $('#kode_psb').keyup(function(event) {
        kode=$(this).val();
        $('#sample-kode').empty();
        $('#sample-kode').append(kode+'-00025');
    });

    $('#start_psb').attr('maxlength','5');
    $('#kode_psb').attr('maxlength','3');
});
</script>