<?php
/**
 * Event triggered when an extension is masqued??
 *
 * PHP Version 5
 *
 * @category   PHPAMI
 * @package    Message
 * @subpackage Event
 * @author     Jaime Ziga <jaime.ziga@gmail.com>
 * @license    http://github.com/Adrian0350/PHP-AMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://github.com/Adrian0350/PHP-AMI/
 *
 * Copyright 2011 Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
require_once dirname(__FILE__) . '/EventMessage.php';

/**
 * Event triggered when an extension is masqued??
 *
 * PHP Version 5
 *
 * @category   PHPAMI
 * @package    Message
 * @subpackage Event
 * @author     Jaime Ziga <jaime.ziga@gmail.com>
 * @license    http://github.com/Adrian0350/PHP-AMI/ Apache License 2.0
 * @link       http://github.com/Adrian0350/PHP-AMI/
 */
class MasqueradeEvent extends EventMessage
{
    /**
     * Returns key: 'Privilege'.
     *
     * @return string
     */
    public function getPrivilege()
    {
        return $this->getKey('Privilege');
    }

    /**
     * Returns key: 'Clone'.
     *
     * @return string
     */
    public function getClone()
    {
        return $this->getKey('Clone');
    }

    /**
     * Returns key: 'CloneState'.
     *
     * @return string
     */
    public function getCloneState()
    {
        return $this->getKey('CloneState');
    }
    /**
     * Returns key: 'Original'.
     *
     * @return string
     */
    public function getOriginal()
    {
        return $this->getKey('Original');
    }

    /**
     * Returns key: 'OriginalState'.
     *
     * @return string
     */
    public function getOriginalState()
    {
        return $this->getKey('OriginalState');
    }
}
