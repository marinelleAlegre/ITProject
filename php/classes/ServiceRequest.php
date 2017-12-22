<?php

/**
 * Created by PhpStorm.
 * User: mehdi
 * Date: 5/9/17
 * Time: 10:47 AM
 */
class ServiceRequest
{

    private $requestId, $startServiceDate, $endServiceDate, $requestStatus, $serviceId, $accountId, $spId;

    /**
     * ServiceRequest constructor.
     * @param $requestId
     * @param $startServiceDate
     * @param $endServiceDate
     * @param $requestStatus
     * @param $serviceId
     * @param $accountId
     * @param $spId
     */
    public function __construct($requestId, $startServiceDate, $endServiceDate, $requestStatus, $serviceId, $accountId, $spId)
    {
        $this->requestId = $requestId;
        $this->startServiceDate = $startServiceDate;
        $this->endServiceDate = $endServiceDate;
        $this->requestStatus = $requestStatus;
        $this->serviceId = $serviceId;
        $this->accountId = $accountId;
        $this->spId = $spId;
    }


    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param mixed $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * @return mixed
     */
    public function getStartServiceDate()
    {
        return $this->startServiceDate;
    }

    /**
     * @param mixed $startServiceDate
     */
    public function setStartServiceDate($startServiceDate)
    {
        $this->startServiceDate = $startServiceDate;
    }

    /**
     * @return mixed
     */
    public function getEndServiceDate()
    {
        return $this->endServiceDate;
    }

    /**
     * @param mixed $endServiceDate
     */
    public function setEndServiceDate($endServiceDate)
    {
        $this->endServiceDate = $endServiceDate;
    }

    /**
     * @return mixed
     */
    public function getRequestStatus()
    {
        return $this->requestStatus;
    }

    /**
     * @param mixed $requestStatus
     */
    public function setRequestStatus($requestStatus)
    {
        $this->requestStatus = $requestStatus;
    }

    /**
     * @return mixed
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param mixed $serviceId
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @return mixed
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param mixed $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return mixed
     */
    public function getSpId()
    {
        return $this->spId;
    }

    /**
     * @param mixed $spId
     */
    public function setSpId($spId)
    {
        $this->spId = $spId;
    }
}