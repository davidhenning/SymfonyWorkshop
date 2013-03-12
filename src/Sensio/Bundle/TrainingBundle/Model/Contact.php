<?php

namespace Sensio\Bundle\TrainingBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    /**
     * @Assert\Email()
     * @Assert\NotBlank()
     */

    public $sender;

    /**
     * @Assert\Length(min = 10, max = 50)
     * @Assert\NotBlank()
     */

    public $subject;

    /**
     * @Assert\NotBlank()
     */

    public $message;
}
