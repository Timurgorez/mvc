<?php


spl_autoload_register(function ($class_name)
{
    //echo $class_name;
    $class_pieces = explode('\\', $class_name);
    switch ($class_pieces[0]) {
        case 'app':
            $file = __DIR__ . '/' . implode(DIRECTORY_SEPARATOR, $class_pieces) . '.php';
            if (file_exists($file)) {
                require_once $file;
            }else{
                //echo "Лоадер не находит этот фаил : " .$file;
            }
            break;
    }
},true, true);


//
//spl_autoload_register(function ($class) {
//
//    // project-specific namespace prefix
//    //$prefix = 'app\\controllers\\';
//
//    // base directory for the namespace prefix
//    //$base_dir = __DIR__ . '/controllers/';
//
//    // does the class use the namespace prefix?
//    //$len = strlen($prefix);
//    //if (strncmp($prefix, $class, $len) !== 0) {
//        // no, move to the next registered autoloader
//    //    return;
//    //}
//
//    // get the relative class name
//    //$relative_class = substr($class, $len);
//
//    // replace the namespace prefix with the base directory, replace namespace
//    // separators with directory separators in the relative class name, append
//    // with .php
//    var_dump($file = __DIR__ .'/'. str_replace('\\', '/', $class) . '.php');
//
//    // if the file exists, require it
//    if (file_exists($file)) {
//        require_once $file;
//    }
//});
