<?php


/*
 * Copyright (c) 2013 - 2015 MasterCard International Incorporated
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 */
class Simplify_PaymentsApi
{
    /**
     * @ignore
     */
    public static $methodMap = array('create' => 'POST', 'delete' => 'DELETE', 'list' => 'GET', 'show' => 'GET', 'update' => 'PUT');
    /**
     * @ignore
     *
     * @param object $object
     * @param object $authentication
     *
     * @return mixed
     */
    public static function createObject($object, $authentication = \null)
    {
    }
    /**
     * @ignore
     *
     * @param object $object
     * @param object $authentication
     *
     * @return mixed
     */
    public static function findObject($object, $authentication = \null)
    {
    }
    /**
     * @ignore
     *
     * @param object $object
     * @param object $authentication
     *
     * @return mixed
     */
    public static function updateObject($object, $authentication = \null)
    {
    }
    /**
     * @ignore
     *
     * @param object $object
     * @param object $authentication
     *
     * @return mixed
     */
    public static function deleteObject($object, $authentication = \null)
    {
    }
    /**
     * @ignore
     *
     * @param object $object
     * @param array $criteria
     * @param object $authentication
     *
     * @return Simplify_ResourceList
     */
    public static function listObject($object, $criteria = \null, $authentication = \null)
    {
    }
    /**
     * @ignore
     *
     * @param array $from
     * @param string $toClazz
     *
     * @return mixed
     */
    public function convertFromHashToObject($from, $toClazz)
    {
    }
    /**
     * @ignore
     *
     * @param string $publicKey
     * @param string $action
     * @param object $object
     *
     * @return string
     */
    public function getUrl($publicKey, $action, $object)
    {
    }
    /**
     * @ignore
     *
     * @param string $action
     *
     * @return string
     */
    public function getMethod($action)
    {
    }
    /**
     * @ignore
     *
     * @param string $action
     * @param object $object
     * @param object $authentication
     *
     * @return mixed
     */
    private function execute($action, $object, $authentication)
    {
    }
    /**
     * @ignore
     *
     * @param string $hash
     * @param object $authentication
     *
     * @return mixed
     */
    public function jwsDecode($hash, $authentication)
    {
    }
    /**
     * @ignore
     *
     * @param string $url
     *
     * @return string
     */
    private function fixUrl($url)
    {
    }
    /**
     * @ignore
     *
     * @param string $k
     *
     * @return bool
     */
    private function isLiveKey($k)
    {
    }
    /**
     * @ignore
     *
     * @param string $s
     * @param string $c
     *
     * @return bool
     */
    private function endsWith($s, $c)
    {
    }
    /**
     * Helper function to build the Authentication object for backwards compatibility.
     * An array of all the arguments passed to one of the API functions is checked against what
     * we expect to received.  If it's greater, then we're assuming that the user is using the older way of
     * passing the keys. i.e as two separate strings.  We take those two string and create the Authentication object
     *
     * @ignore
     * @param $authentication
     * @param $args
     * @param $expectedArgCount
     * @return Simplify_Authentication
     */
    static function buildAuthenticationObject($authentication = \null, $args, $expectedArgCount)
    {
    }
}