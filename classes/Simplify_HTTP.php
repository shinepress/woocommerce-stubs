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
class Simplify_HTTP
{
    const DELETE = "DELETE";
    const GET = "GET";
    const POST = "POST";
    const PUT = "PUT";
    const HTTP_SUCCESS = 200;
    const HTTP_REDIRECTED = 302;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_NOT_FOUND = 404;
    const HTTP_NOT_ALLOWED = 405;
    const HTTP_BAD_REQUEST = 400;
    const JWS_NUM_HEADERS = 7;
    const JWS_ALGORITHM = 'HS256';
    const JWS_TYPE = 'JWS';
    const JWS_HDR_UNAME = 'uname';
    const JWS_HDR_URI = 'api.simplifycommerce.com/uri';
    const JWS_HDR_TIMESTAMP = 'api.simplifycommerce.com/timestamp';
    const JWS_HDR_NONCE = 'api.simplifycommerce.com/nonce';
    const JWS_HDR_TOKEN = 'api.simplifycommerce.com/token';
    const JWS_MAX_TIMESTAMP_DIFF = 300;
    // 5 minutes in seconds
    private static $_validMethods = array("post" => self::POST, "put" => self::PUT, "get" => self::GET, "delete" => self::DELETE);
    private function request($url, $method, $authentication, $payload = '')
    {
    }
    /**
     * Handles Simplify API requests
     *
     * @param $url
     * @param $method
     * @param $authentication
     * @param string $payload
     * @return mixed
     * @throws Simplify_AuthenticationException
     * @throws Simplify_ObjectNotFoundException
     * @throws Simplify_BadRequestException
     * @throws Simplify_NotAllowedException
     * @throws Simplify_SystemException
     */
    public function apiRequest($url, $method, $authentication, $payload = '')
    {
    }
    /**
     * Handles Simplify OAuth requests
     *
     * @param $url
     * @param $payload
     * @param $authentication
     * @return mixed
     * @throws Simplify_AuthenticationException
     * @throws Simplify_ObjectNotFoundException
     * @throws Simplify_BadRequestException
     * @throws Simplify_NotAllowedException
     * @throws Simplify_SystemException
     */
    public function oauthRequest($url, $payload, $authentication)
    {
    }
    public function jwsDecode($authentication, $hash)
    {
    }
    private function jwsEncode($authentication, $url, $payload, $hasPayload)
    {
    }
    private function jwsSign($privateKey, $msg)
    {
    }
    private function jwsVerifyHeader($header, $url, $publicKey)
    {
    }
    private function jwsVerifySignature($privateKey, $msg, $expectedSig)
    {
    }
    private function jwsAuthError($reason)
    {
    }
    private function jwsVerifyTimestamp($ts)
    {
    }
    private function isLiveKey($k)
    {
    }
    private function jwsUrlSafeEncode64($s)
    {
    }
    private function jwsUrlSafeDecode64($s)
    {
    }
    private function buildOauthError($msg, $error, $error_description)
    {
    }
}