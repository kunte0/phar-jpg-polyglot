<?php

class PHPObjectInjection{
    // fake vuln object for testing poi
    public $inject;
    public $out;
    function __construct(){
        echo "construct called\n";
    }
    function __wakeup(){
        echo "wakeup called\n";
        if(isset($this->inject)){
            eval($this->inject);
        }
    }
    function __destruct() {
        echo "destruct called\n";
        if(isset($this->out)){
            echo($this->out);
        }
    }
}



// test with ftp://domain/

file_exists('phar://' . $argv[1] . '/suffix_is_even_ignored.asdf');

/*

file_exists( $argv[1]);
md5_file( $argv[1]);
filemtime( $argv[1]);
filesize( $argv[1]);

*/

