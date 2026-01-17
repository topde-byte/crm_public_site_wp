<?php
$block_fields_path = dirname(__FILE__).'/block-fields';
$block_fields_files = glob(sprintf('%s/*.php',$block_fields_path));
foreach($block_fields_files as $block_fields_file){
    require_once $block_fields_file;
}