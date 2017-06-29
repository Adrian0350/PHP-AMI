<?php
/**
 * Event triggered when an action ShowDialPlan is issued.
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
 * Event triggered when an action ShowDialPlan is issued.
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
class ListDialPlanEvent extends EventMessage
{
    /**
     * Returns key: 'Context'.
     *
     * @return string
     */
    public function getContext()
    {
        return $this->getKey('Context');
    }

    /**
     * Returns key: 'Extension'.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->getKey('Extension');
    }

    /**
     * Returns key: 'Priority'.
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->getKey('Priority');
    }

    /**
     * Returns key: 'Application'.
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->getKey('Application');
    }

    /**
     * Returns key: 'AppData'.
     *
     * @return string
     */
    public function getApplicationData()
    {
        return $this->getKey('AppData');
    }

    /**
     * Returns key: 'Registrar'.
     *
     * @return string
     */
    public function getRegistrar()
    {
        return $this->getKey('Registrar');
    }

    /**
     * Returns key: 'IncludeContext'.
     *
     * @return string
     */
    public function getIncludeContext()
    {
        return $this->getKey('IncludeContext');
    }
}