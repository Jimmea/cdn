<?php namespace Vinelab\Cdn\Provider;

/**
 * @author Mahmoud Zalt <mahmoud@vinelab.com>
 */
use Vinelab\Cdn\Providers\Contracts\ProviderInterface;

class AwsS3Provider extends Provider implements ProviderInterface{


    public function __construct(){


    }



    public function upload(){

        $this->connect();

        // TODO: upload files to CDN

    }



    private function connect(){

        // TODO: connect to the CDN
        var_dump('Connecting..');


    }



} 
