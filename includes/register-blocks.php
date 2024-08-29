<?php

function rp_register_blocks(){
    register_block_type(
        RP_PLUGIN_DIR . 'build/block.json'
    );
}