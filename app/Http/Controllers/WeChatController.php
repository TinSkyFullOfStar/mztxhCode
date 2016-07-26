<?php

namespace App\Http\Controllers;

use Log;

class WeChatController extends Controller{
	
	public function serve(){
		$wechat=app('wechat');
		$wechat->server->setMessageHandler(function($message){
			return 'hello world';
		});
		
		return $wechat->server->serve();
	}
}
