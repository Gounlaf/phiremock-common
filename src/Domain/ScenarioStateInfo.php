<?php
/**
 * This file is part of Phiremock.
 *
 * Phiremock is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Phiremock is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Phiremock.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Mcustiel\Phiremock\Domain;

use Mcustiel\Phiremock\Domain\Options\ScenarioName;
use Mcustiel\Phiremock\Domain\Options\ScenarioState;

class ScenarioStateInfo
{
    /** @var ScenarioName */
    private $scenarioName;

    /** @var ScenarioState */
    private $scenarioState;

    public function __construct(ScenarioName $name, ScenarioState $state)
    {
        $this->scenarioName = $name;
        $this->scenarioState = $state;
    }

    /**
     * @return ScenarioName
     */
    public function getScenarioName()
    {
        return $this->scenarioName;
    }

    /**
     * @return ScenarioState
     */
    public function getScenarioState()
    {
        return $this->scenarioState;
    }
}
