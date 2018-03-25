<?php

/*
   +----------------------------------------------------------------------+
   |                  			  xy platform                    	  	  |
   +----------------------------------------------------------------------+
   | Copyright (c) 2014 http://www.xiaoy.name   All rights reserved.      |
   +----------------------------------------------------------------------+
   | TQSOA-SOA相关配置									      	 	  	  |
   +----------------------------------------------------------------------+
   | Authors: xiaoy <zs1379@vip.qq.com>       CreateTime:2014-11-10       |
   +----------------------------------------------------------------------+
*/

return array(
    'soa_client'  => array(
        'task'    =>  'http://10.10.10.50:831/v1/Soa/',
    ),
    'soa_auth_ip' => array(
        '0.0.0.0',
        '127.0.0.1',
        '10.*.*.*',

    ),
);