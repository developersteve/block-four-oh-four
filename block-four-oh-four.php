<?php

global $blockify;

$current = $blockify->factory->getPackage('block-four-oh-four');

$block->open();

echo '<header>';
    $block->document->tag('h1', 'head');
echo '</header>';

echo '<figure>';
    $image = str_replace('//', 'http://', str_replace(BLOCKIFY_PATH, BLOCKIFY_URL, $current->image));
    echo "<img src=\"$image\" class='img-responsive center-block'>";
echo '</figure>';

echo '<header>';
    $block->document->tag('h2', 'subhead');
echo '</header>';


$block->close();
