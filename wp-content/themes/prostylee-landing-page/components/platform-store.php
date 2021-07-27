<?php
    $google_play_icon = 'google_play.png';
    $app_store_icon = 'app_store.png';
    if (isset($args['data'])) {
        $google_play_icon = $args['data']['google_play'] ?? $google_play_icon;
        $app_store_icon = $args['data']['app_store'] ?? $app_store_icon;
    }
?>
<style>
    .platform-download  .platform-icon {
        width: 135px;
        height: 40px;
        display: inline-block;
        text-indent: -1000px;
        margin: 0 0.2em;
        border-radius: 0.3em;
        text-align: center;
    }
    .ch-play-icon {
        background: url("<?php echo get_template_directory_uri();?>/assets/images/<?php echo $google_play_icon; ?>")  center center no-repeat;
        background-size: cover;
    }
    .app-store-icon {
        background: url("<?php echo get_template_directory_uri();?>/assets/images/<?php echo $app_store_icon; ?>")  center center no-repeat;
        background-size: cover;
    }


</style>
<div class="platform-download">
    <a href="" class="platform-icon ch-play-icon">Prostylee tại CH Play</a>
    <a href="" class="platform-icon app-store-icon">Prostylee tại App store</a>
</div>
<!-- end platform-download -->
