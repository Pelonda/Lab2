<?php
// Lab 2C: Constructors, Constants, and Inheritance
// PERSONALIZE: change the example tutor details near the bottom.

echo '<h1>Lab 2C: User and Tutor Classes</h1>';

function cleanText($value)
{
    // Replace runs of whitespace with one space, then remove spaces at the ends.
    return trim(preg_replace('/\s+/', ' ', $value));
}

class User
{
    public const STATUS_ACTIVE = 'active';

    public $name;
    public $email;
    public $status;

    public function __construct($name, $email)
    {
        $this->name = cleanText($name);
        $this->email = strtolower(cleanText($email));
        $this->status = self::STATUS_ACTIVE;
    }
}

class Tutor extends User
{
    public $subject;

    public function __construct($name, $email, $subject)
    {
        parent::__construct($name, $email);
        $this->subject = cleanText($subject);
    }

    public function profileSummary()
    {
        return "Tutor: {$this->name}<br>Email: {$this->email}<br>Subject: {$this->subject}<br>Status: {$this->status}";
    }
}

// PERSONALIZE: edit these sample values to make the profile your own.
$tutor = new Tutor('  maria   chen  ', ' MARIA.CHEN@EXAMPLE.COM ', '  PHP   Programming  ');
echo $tutor->profileSummary();
