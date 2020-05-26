<?php


namespace App\Mail;


class FeedbackData implements IFeedbackData
{
    private $email;
    private $firstName;
    private $lastName;
    private $message;
    private $subject;
    private $pricing;
    private $howDidYouHear;

    public static function from(array $data): IFeedbackData
    {
        $feedbackData = new FeedbackData();
        $feedbackData->setEmail($data['email']);
        $feedbackData->setFirstName($data['first-name']);
        $feedbackData->setLastName($data['last-name']);
        $feedbackData->setMessage($data['your-message']);
        $feedbackData->setSubject($data['subject']);
        $feedbackData->setHowDidYouHear($data['how-did-you-hear']);
        $feedbackData->setPricing($data['pricing']);
        return $feedbackData;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
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
    public function setFirstName($firstName): void
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
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * @param mixed $pricing
     */
    public function setPricing($pricing): void
    {
        $this->pricing = $pricing;
    }

    /**
     * @return mixed
     */
    public function getHowDidYouHear()
    {
        return $this->howDidYouHear;
    }

    /**
     * @param mixed $howDidYouHear
     */
    public function setHowDidYouHear($howDidYouHear): void
    {
        $this->howDidYouHear = $howDidYouHear;
    }
}
