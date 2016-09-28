<?php
function get_ext1($file_name) {
    return end(explode('.', $file_name));  // 字符串拆成数组,然后用end内部指针移动到最后一个单元并返回其值
}

function get_ext2($file_name)
{
        return strrchr($file_name, '.');
}

function get_ext3($file_name)
{
        return substr($file_name, strrpos($file_name, '.'));
}

function get_ext4($file_name)
{
        return array_pop(explode('.', $file_name));
}

function get_ext5($file_name)
{
        $p = pathinfo($file_name);
        return $p['extension'];
}

function get_ext6($file_name)
{
        return strrev(substr(strrev($file_name), 0, strpos(strrev($file_name), '.')));
}

function get_ext7($filename)
{
    return strrev(strstr(strrev($file_name), '.', true));
}

function get_ext8($flie_name){
        $a=strrev($a);    //反转
        $b=strstr($a, '.');//截取第一个.及其后的所有
        $a=str_replace($b, '', $a);//替换
        $a=strrev($a);
        return $a;
}

function get_ext9($file_name){
    preg_match('/^[\w\.-]+(\.[\w]+)$/', $file_name,$arr);
    return $arr[1];
}

function get_ext10($flie_name){
    while (strpos($flie_name, '.')) {
        $a = strpos($flie_name, '.')+1;
        $flie_name = substr($flie_name, $a);
    }
    $ext = $flie_name;
    return $ext;
}

function get_ext11($file_name){
    $file_name = strrev($file_name);
    $n = strpos($file_name, '.');
    $a = str_split($file_name, $n);
    return strrev($a[0]);
}
