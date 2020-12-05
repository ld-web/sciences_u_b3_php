<?php

class Email
{
  private $value;

  private const BLACKLIST = ["yopmail.com", "mailinator.com", "tempmail.com"];

  public function __construct(string $value)
  {
    $this->value = $value;
  }

  /**
   * Checks if the email address has a valid format
   *
   * @return boolean
   */
  public function isValid(): bool
  {
    return (filter_var($this->value, FILTER_VALIDATE_EMAIL) !== false);
  }

  public function isSpam(): bool
  {
    if (!$this->isValid()) {
      throw new InvalidArgumentException("Email incorrect");
    }
  
    $emailParts = explode("@", $this->value);
  
    $domain = $emailParts[1];
    return in_array($domain, self::BLACKLIST);
  }

  public function displayInfos()
  {
    echo ($this->isValid()) ? "Email valide" : "Email invalide";
    echo "<br />";
    echo ($this->isSpam()) ? "C'est un spam" : "Ca va";
  }

  /**
   * Get the value of value
   */ 
  public function getValue(): string
  {
    return $this->value;
  }

  /**
   * Set the value of value
   */ 
  public function setValue(string $value)
  {
    $this->value = $value;
  }
}

$email = new Email('test@test.com');
$spamEmail = new Email('coucou@yopmail.com');

$emails = [$email, $spamEmail];

foreach ($emails as $itemEmail) {
  var_dump($itemEmail);
  $itemEmail->displayInfos();
}
