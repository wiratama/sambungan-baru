<div class="wrap">
    <h2><?php _e( 'Sambungan Baru', 'arwir' ); ?> <a href="<?php echo admin_url( 'admin.php?page=sambungan-baru&action=new' ); ?>" class="add-new-h2"><?php _e( 'Add New', 'arwir' ); ?></a></h2>

    <?php /* <form method="post"> */ ?>
    <form method="get">
        <input type="hidden" name="page" value="sambungan-baru">

        <?php
        $list_table = new Sambunganbaru_List_Table();
        $list_table->prepare_items();
        $list_table->search_box( 'search', 'search_id' );
        $list_table->display();
        ?>
    </form>
</div>