<?php


namespace App\Mail;


interface IFeedbackData
{
    /**
     * @return mixed
     */
    public function getEmail();

    /**
     * @param mixed $email
     */
    public function setEmail($email): void;

    /**
     * @return mixed
     */
    public function getFirstName();

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void;

    /**
     * @return mixed
     */
    public function getLastName();

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void;

    /**
     * @return mixed
     */
    public function getMessage();

    /**
     * @param mixed $message
     */
    public function setMessage($message): void;

    /**
     * @return mixed
     */
    public function getSubject();

    /**
     * @param mixed $subject
     */
    public function setSubject($subject): void;

    /**
     * @return mixed
     */
    public function getPricing();

    /**
     * @param mixed $pricing
     */
    public function setPricing($pricing): void;

    /**
     * @return mixed
     */
    public function getHowDidYouHear();

    /**
     * @param mixed $howDidYouHear
     */
    public function setHowDidYouHear($howDidYouHear): void;
}
