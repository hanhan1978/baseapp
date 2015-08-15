<?php

Html::macro('cached_asset', function($path)
{
    $realPath = public_path($path);

    if ( ! file_exists($realPath)) {
        throw new LogicException("File not found at [{$realPath}]");
    }

    $timestamp = filemtime($realPath);
    $path  .= '?' . $timestamp;

    return asset($path);
});
