<?php
/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Copyright (c) 2017 (original work) Open Assessment Technologies SA;
 *
 *
 */

namespace oat\taoTestCenter\scripts\install;


use oat\oatbox\extension\InstallAction;
use oat\tao\model\ClientLibConfigRegistry;
/**
 * Class RegisterClientLibConfig
 * @package oat\taoTestCenter\scripts\install
 * @author Aleh Hutnikau, <hutnikau@1pt.com>
 */
class RegisterClientLibConfig extends InstallAction
{
    /**
     * @param $params
     * @throws
     */
    public function __invoke($params)
    {
        ClientLibConfigRegistry::getRegistry()->register('taoTestCenter/component/eligibilityEditor', [
            'deliveriesOrder' => 'http://www.w3.org/2000/01/rdf-schema#label',
            'deliveriesOrderdir' => 'asc',
        ]);
    }
}
