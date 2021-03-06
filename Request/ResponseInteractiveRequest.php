<?php
namespace Payum\Bundle\PayumBundle\Request;

use Symfony\Component\HttpFoundation\Response;

use Payum\Request\InteractiveRequest;

class ResponseInteractiveRequest extends InteractiveRequest
{
    /**
     * @var \Symfony\Component\HttpFoundation\Response
     */
    protected $response;

    /**
     * @param \Symfony\Component\HttpFoundation\Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}