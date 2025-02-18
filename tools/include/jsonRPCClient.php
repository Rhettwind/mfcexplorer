<?php
/*
					COPYRIGHT

Copyright 2007 Sergio Vaccaro <sergio@inservibile.org>

This file is part of JSON-RPC PHP.

JSON-RPC PHP is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

JSON-RPC PHP is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with JSON-RPC PHP; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * The object of this class are generic jsonRPC 1.0 clients
 * http://json-rpc.org/wiki/specification
 *
 * @author sergio <jsonrpcphp@inservibile.org>
 */
class jsonRPCClient
{

	/**
	 * Debug state
	 *
	 * @var boolean
	 */
	private $debug;

	/**
	 * The server URL
	 *
	 * @var string
	 */
	private $url;
	/**
	 * The request id
	 *
	 * @var integer
	 */
	private $id;
	/**
	 * If true, notifications are performed instead of requests
	 *
	 * @var boolean
	 */
	private $notification = false;

	/**
	 * Takes the connection parameters
	 *
	 * @param string $url
	 * @param boolean $debug
	 */
	public function __construct($url, $debug = false)
	{
		// server URL
		$this->url = $url;
		// proxy
		empty($proxy) ? $this->proxy = '' : $this->proxy = $proxy;
		// debug state
		empty($debug) ? $this->debug = false : $this->debug = true;
		// message id
		$this->id = 1;
	}

	/**
	 * Sets the notification state of the object. In this state, notifications are performed, instead of requests.
	 *
	 * @param boolean $notification
	 */
	public function setRPCNotification($notification)
	{
		empty($notification) ?
			$this->notification = false
			: $this->notification = true;
	}

	/**
	 * Performs a jsonRCP request and gets the results as an array
	 *
	 * @param string $method
	 * @param array $params
	 * @return array
	 */
	public function __call($method, $params)
	{

		// check
		if (!is_scalar($method)) {
			throw new Exception('Method name has no scalar value');
		}

		// check
		if (is_array($params)) {
			// no keys
			$params = array_values($params);
		} else {
			throw new Exception('Params must be given as array');
		}

		// sets notification or request task
		if ($this->notification) {
			$currentId = NULL;
		} else {
			$currentId = $this->id;
		}

		// prepares the request
		$request = array(
			'method' => $method,
			'params' => $params,
			'id' => $currentId
		);
		$request = json_encode($request);
		$this->debug && $this->debug .= '***** Request *****' . "\n" . $request . "\n" . '***** End Of request *****' . "\n\n";

		// performs the HTTP POST
		$opts = array('http' => array(
			'method'  => 'POST',
			'header'  => 'Content-type: application/json',
			'content' => $request
		));
		$context  = stream_context_create($opts);
		$cachetime = 60;
		$cachefile = dirname(__FILE__) . '/cache/cached-' . $method . '-' . md5(json_encode($params)) . '.json';
		$fp = @fopen($this->url, 'r', false, $context);
		if ($fp) {
			$response = '';
			while ($row = fgets($fp)) {
				$response .= trim($row) . "\n";
			}
			$this->debug && $this->debug .= '***** Server response *****' . "\n" . $response . '***** End of server response *****' . "\n";
			$response = json_decode(mb_convert_encoding($response, 'UTF-8', 'UTF-8'), true);
			file_put_contents($cachefile, json_encode($response));
		} else {
			if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
				$response = json_decode(file_get_contents($cachefile), true);
			} else {
				throw new Exception('Unable to connect to ' . $this->url);
			}
		}

		// debug output
		if ($this->debug) {
			echo nl2br($debug);
		}

		// final checks and return
		if (!$this->notification) {
			// check
			if ($response['id'] != $currentId) {
				throw new Exception('Incorrect response id (request id: ' . $currentId . ', response id: ' . $response['id'] . ')');
			}
			if (!is_null($response['error'])) {
				throw new Exception('Request error: ' . $response['error']);
			}

			return $response['result'];
		} else {
			return true;
		}
	}
}
