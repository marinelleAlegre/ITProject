<?php

/**
 * Created by PhpStorm.
 * User: mehdi
 * Date: 5/9/17
 * Time: 10:40 AM
 */
class Feedback
{
    private $feedbackId, $ranking, $contactNumber, $feedbackMessage, $accountId, $feedbackDate, $considerationDate, $feedbackStatus, $checkedDescription, $checkedAccountId;

    /**
     * Feedback constructor.
     * @param $feedbackId
     * @param $ranking
     * @param $contactNumber
     * @param $feedbackMessage
     * @param $accountId
     * @param $feedbackDate
     * @param $considerationDate
     * @param $feedbackStatus
     * @param $checkedDescription
     * @param $checkedAccountId
     */
    public function __construct($feedbackId, $ranking, $contactNumber, $feedbackMessage, $accountId, $feedbackDate, $considerationDate, $feedbackStatus, $checkedDescription, $checkedAccountId)
    {
        $this->feedbackId = $feedbackId;
        $this->ranking = $ranking;
        $this->contactNumber = $contactNumber;
        $this->feedbackMessage = $feedbackMessage;
        $this->accountId = $accountId;
        $this->feedbackDate = $feedbackDate;
        $this->considerationDate = $considerationDate;
        $this->feedbackStatus = $feedbackStatus;
        $this->checkedDescription = $checkedDescription;
        $this->checkedAccountId = $checkedAccountId;
    }

    /**
     * @return mixed
     */
    public function getFeedbackId()
    {
        return $this->feedbackId;
    }

    /**
     * @param mixed $feedbackId
     */
    public function setFeedbackId($feedbackId)
    {
        $this->feedbackId = $feedbackId;
    }

    /**
     * @return mixed
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * @param mixed $ranking
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;
    }

    /**
     * @return mixed
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * @param mixed $contactNumber
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;
    }

    /**
     * @return mixed
     */
    public function getFeedbackMessage()
    {
        return $this->feedbackMessage;
    }

    /**
     * @param mixed $feedbackMessage
     */
    public function setFeedbackMessage($feedbackMessage)
    {
        $this->feedbackMessage = $feedbackMessage;
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
    public function getFeedbackDate()
    {
        return $this->feedbackDate;
    }

    /**
     * @param mixed $feedbackDate
     */
    public function setFeedbackDate($feedbackDate)
    {
        $this->feedbackDate = $feedbackDate;
    }

    /**
     * @return mixed
     */
    public function getConsiderationDate()
    {
        return $this->considerationDate;
    }

    /**
     * @param mixed $considerationDate
     */
    public function setConsiderationDate($considerationDate)
    {
        $this->considerationDate = $considerationDate;
    }

    /**
     * @return mixed
     */
    public function getFeedbackStatus()
    {
        return $this->feedbackStatus;
    }

    /**
     * @param mixed $feedbackStatus
     */
    public function setFeedbackStatus($feedbackStatus)
    {
        $this->feedbackStatus = $feedbackStatus;
    }

    /**
     * @return mixed
     */
    public function getCheckedDescription()
    {
        return $this->checkedDescription;
    }

    /**
     * @param mixed $checkedDescription
     */
    public function setCheckedDescription($checkedDescription)
    {
        $this->checkedDescription = $checkedDescription;
    }

    /**
     * @return mixed
     */
    public function getCheckedAccountId()
    {
        return $this->checkedAccountId;
    }

    /**
     * @param mixed $checkedAccountId
     */
    public function setCheckedAccountId($checkedAccountId)
    {
        $this->checkedAccountId = $checkedAccountId;
    }
}