<?php
// 递归删除目录算法1
function forcermdir1($dir)
{
    if(is_dir($dir)) $handle = opendir($dir);
    if(!$handle) return false;
    while(false !== ($file = readdir($handle))) {
        if($file != '.' || $file != '..') {
            $path = $dir.'/'.$file;
            if(is_file($path)) unlink($path);
            else forcermdir1($path);
        }
    }
    closedir($dir_handle);
    rmdir($dir);
    return true;
}

// 递归删除目录算法2
function forcermdir2($directory)
{
    foreach(glob("{$directory}/*") as $file)
    {
        if(is_dir($file)) { 
            forcermdir2($file);
        } else {
            unlink($file);
        }
    }
    rmdir($directory);
}

// 递归删除目录算法3
function forcermdir3($target) {
    if(is_dir($target)){
        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
        foreach( $files as $file )
        {
            forcermdir3( $file );
        }
        rmdir( $target );
    } elseif(is_file($target)) {
        unlink( $target );  
    }
}
