<?php
/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 7/26/15
 * Time: 4:08 PM
 */

namespace Curl;


/**
 * Interface CurlInterface
 * @package Curl
 */
interface CurlInterface {

    /**
     * Construct
     *
     * @param null $base_url
     */
    public function __construct($base_url = null);

    /**
     * Send DELETE request.
     *
     * @param $url
     * @param array $query_parameters
     * @param array $data
     * @return mixed
     */
    public function delete($url, $query_parameters = array(), $data = array());

    /**
     * Download data.
     *
     * @param $url
     * @param $mixed_filename
     * @return mixed
     */
    public function download($url, $mixed_filename);

    /**
     * Send GET request.
     *
     * @param $url
     * @param array $data
     * @return mixed
     */
    public function get($url, $data = array());

    /**
     * Send HEAD request.
     *
     * @param $url
     * @param array $data
     * @return mixed
     */
    public function head($url, $data = array());

    /**
     * Send OPTIONS request.
     *
     * @param $url
     * @param array $data
     * @return mixed
     */
    public function options($url, $data = array());

    /**
     * Send PATCH request.
     *
     * @param $url
     * @param array $data
     * @return mixed
     */
    public function patch($url, $data = array());

    /**
     * Send POST request.
     *
     * @param $url
     * @param array $data
     * @return mixed
     */
    public function post($url, $data = array());

    /**
     * Send PUT request.
     *
     * @param $url
     * @param array $data
     * @return mixed
     */
    public function put($url, $data = array());

} 