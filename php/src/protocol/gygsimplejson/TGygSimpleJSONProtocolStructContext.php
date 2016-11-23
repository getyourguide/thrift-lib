<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements. See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership. The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package thrift.protocol
 */

require_once ($GLOBALS['HACKLIB_ROOT']);

if (!isset($GLOBALS['THRIFT_ROOT'])) {
	$GLOBALS['THRIFT_ROOT'] = __DIR__.'/../..';
}
require_once $GLOBALS['THRIFT_ROOT'].'/protocol/gygsimplejson/TGygSimpleJSONProtocol.php';
require_once $GLOBALS['THRIFT_ROOT'].'/protocol/gygsimplejson/TGygSimpleJSONProtocolContext.php';
class TGygSimpleJSONProtocolStructContext extends TGygSimpleJSONProtocolContext
{
    protected $first_ = true;
    protected $colon_ = true;
    private $p_;

    public function __construct($p)
    {
        $this->p_ = $p;
    }

    public function write()
    {
        if ($this->first_) {
            $this->first_ = false;
            $this->colon_ = true;
        } else {
            $this->p_->getTransport()->write(
                $this->colon_ ?
                TGygSimpleJSONProtocol::COLON :
                TGygSimpleJSONProtocol::COMMA
            );
            $this->colon_ = !$this->colon_;
        }
    }
}

