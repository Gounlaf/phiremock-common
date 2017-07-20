<?php

namespace Mcustiel\Phiremock\Domain;

use Mcustiel\SimpleRequest\Annotation\Filter as SRF;
use Mcustiel\SimpleRequest\Annotation\ParseAs;
use Mcustiel\SimpleRequest\Annotation\Validator as SRV;

class Expectation implements \JsonSerializable
{
    /**
     * @var Request
     *
     * @SRV\NotNull
     * @ParseAs("\Mcustiel\Phiremock\Domain\Request")
     */
    private $request;
    /**
     * @var Response
     *
     * @SRF\CustomFilter(class="\Mcustiel\Phiremock\Common\Filters\ResponseAsDefault")
     * @ParseAs("\Mcustiel\Phiremock\Domain\Response")
     */
    private $response;
    /**
     * @var string
     *
     * @SRV\OneOf({
     *      @SRV\Not(@SRV\NotEmpty),
     *      @SRV\Uri
     * })
     */
    private $proxyTo;
    /**
     * @var string
     *
     * @SRV\OneOf({
     *      @SRV\Type("null"),
     *      @SRV\AllOf({
     *          @SRV\Type("string"),
     *          @SRV\NotEmpty
     *      })
     * })
     */
    private $scenarioName;
    /**
     * @var string
     *
     * @SRV\OneOf({
     *      @SRV\Type("null"),
     *      @SRV\AllOf({
     *          @SRV\Type("string"),
     *          @SRV\NotEmpty
     *      })
     * })
     */
    private $scenarioStateIs;
    /**
     * @var string
     *
     * @SRV\OneOf({
     *      @SRV\Type("null"),
     *      @SRV\AllOf({
     *          @SRV\Type("string"),
     *          @SRV\NotEmpty
     *      })
     * })
     */
    private $newScenarioState;

    /**
     * @var int
     * @SRV\OneOf({
     *      @SRV\Type("null"),
     *      @SRV\AllOf({
     *          @SRV\TypeInteger,
     *          @SRV\Minimum(0)
     *      })
     * })
     */
    private $priority = 0;

    /**
     * @return \Mcustiel\Phiremock\Domain\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param \Mcustiel\Phiremock\Domain\Request $request
     *
     * @return \Mcustiel\Phiremock\Domain\Expectation
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return \Mcustiel\Phiremock\Domain\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param \Mcustiel\Phiremock\Domain\Response $response
     *
     * @return \Mcustiel\Phiremock\Domain\Expectation
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * @return string
     */
    public function getScenarioName()
    {
        return $this->scenarioName;
    }

    /**
     * @param string $scenario
     * @return \Mcustiel\Phiremock\Domain\Expectation
     */
    public function setScenarioName($scenario)
    {
        $this->scenarioName = $scenario;

        return $this;
    }

    /**
     * @return string
     */
    public function getScenarioStateIs()
    {
        return $this->scenarioStateIs;
    }

    /**
     * @param string $scenarioStateIs
     * @return \Mcustiel\Phiremock\Domain\Expectation
     */
    public function setScenarioStateIs($scenarioStateIs)
    {
        $this->scenarioStateIs = $scenarioStateIs;

        return $this;
    }

    /**
     * @return string
     */
    public function getNewScenarioState()
    {
        return $this->newScenarioState;
    }

    /**
     * @param string $newScenarioState
     * @return \Mcustiel\Phiremock\Domain\Expectation
     */
    public function setNewScenarioState($newScenarioState)
    {
        $this->newScenarioState = $newScenarioState;

        return $this;
    }

    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        return [
            'scenarioName'     => $this->scenarioName,
            'scenarioStateIs'  => $this->scenarioStateIs,
            'newScenarioState' => $this->newScenarioState,
            'request'          => $this->request,
            'response'         => $this->response,
            'proxyTo'          => $this->proxyTo,
            'priority'         => $this->priority,
        ];
    }

    /**
     * @return number
     */
    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return string
     */
    public function getProxyTo()
    {
        return $this->proxyTo;
    }

    public function setProxyTo($proxyTo)
    {
        $this->proxyTo = $proxyTo;

        return $this;
    }
}
