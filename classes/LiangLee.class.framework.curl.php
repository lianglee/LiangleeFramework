<?php
/* LiangLeeFramework
 * @package Liang Lee Framework
 * @author Liang Lee
 * @copyright LIANG LEE 2012
 * @File LiangLee.class.framework.curl.php
 */
 
/**
 * Register class
 **/ 
class LiangLeec {

/**
 * Register LiangLeec Function
 **/
function LiangLeec($u = false) {
		$this->conn = curl_init();
		if (!$u) {
			$u = rand(0,100000);
		}
	}

/**
 * Function used for send request to youtube.com
 **/
	function sendreq($method, $url, $vars) {

		$ch = $this->conn;
/**
 * Check if user ajent match or not.
 **/
		$user_agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";

/**
 * curl_setopt — Set an option for a cURL transfer
 * bool curl_setopt ( resource $ch , int $option , mixed $value )
 **/
		curl_setopt($ch, CURLOPT_URL, $url);
		if ($this->header) {
			curl_setopt($ch, CURLOPT_HEADER, 1);
		} else {
		    curl_setopt($ch, CURLOPT_HEADER, 0);
		}
		curl_setopt($ch, CURLOPT_USERAGENT,$user_agent);



		if($this->secure) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		}

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $this->cookiefile);

		if ($method == 'POST') {
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect: '));
		}

		$data = curl_exec($ch);



		if ($data) {
			if ($this->LiangleeCback)
			{
			} else {
				return $data;
			}
		} else {
			return false;
		}
	}
/**
 * Fetch url.
 **/
	function liangleecfetch($url) {
		return $this->sendreq('GET', $url, 'NULL');
	}

}

