<?php

/**
 * Created by PhpStorm.
 * User: mehdi
 * Date: 5/9/17
 * Time: 11:24 AM
 */
class UserAccount
{
    private $accountId, $username, $password, $address, $firstName, $lastName, $middleName, $status, $emailAddress, $birthday, $phoneNumber, $roleId, $userPicture;

    /**
     * UserAccount constructor.
     * @param $accountId
     * @param $username
     * @param $password
     * @param $address
     * @param $firstName
     * @param $lastName
     * @param $middleName
     * @param $status
     * @param $emailAddress
     * @param $birthday
     * @param $phoneNumber
     * @param $roleId
     * @param $userPicture
     */
    public function __construct($accountId, $username, $password, $address, $firstName, $lastName, $middleName, $status, $emailAddress, $birthday, $phoneNumber, $roleId, $userPicture)
    {
        $this->accountId = $accountId;
        $this->username = $username;
        $this->password = $password;
        $this->address = $address;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->status = $status;
        $this->emailAddress = $emailAddress;
        $this->birthday = $birthday;
        $this->phoneNumber = $phoneNumber;
        $this->roleId = $roleId;
        $this->userPicture = $userPicture;
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param mixed $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param mixed $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @param mixed $roleId
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    }

    /**
     * @return mixed
     */
    public function getUserPicture()
    {
        return $this->userPicture;
    }

    /**
     * @param mixed $userPicture
     */
    public function setUserPicture($userPicture)
    {
        $this->userPicture = $userPicture;
    }
}