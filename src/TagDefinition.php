<?php
/*
 * Copyright 2011-2017 Ning, Inc.
 *
 * Ning licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Killbill\Client;

use Killbill\Client\Type\TagDefinitionAttributes;

class TagDefinition extends TagDefinitionAttributes {

    public function get($headers = null) {
        $response = $this->_get(Client::PATH_TAGDEFINITIONS . '/' . $this->accountId, $headers);
        return $this->_getFromBody('TagDefinition', $response);
    }

    public function create($user, $reason, $comment, $headers = null) {
        $response = $this->_create(Client::PATH_TAGDEFINITIONS, $user, $reason, $comment, $headers);
        return $this->_getFromResponse('TagDefinition', $response, $headers);
    }

    public function delete($user, $reason, $comment, $headers = null) {
        $response = $this->_delete(Client::PATH_TAGDEFINITIONS . '/' . $this->name, $user, $reason, $comment, $headers);
        return $this->_getFromBody('TagDefinition', $response, $headers);
    }
}
