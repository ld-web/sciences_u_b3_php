<?php

/**
 * Checks if a value has a valid email format
 *
 * @param string $value
 * @return boolean
 */
function isValidEmail(string $value): bool
{
  return (filter_var($value, FILTER_VALIDATE_EMAIL) !== false);
}

/**
 * Checks if email is a spam
 *
 * @param string $email
 * @return boolean
 * @throws InvalidArgumentException if email has wrong format
 */
function isEmailSpam(string $email): bool
{
  if (!isValidEmail($email)) {
    throw new InvalidArgumentException("Email incorrect");
  }

  $blacklist = ["yopmail.com", "mailinator.com", "tempmail.com"];
  $emailParts = explode("@", $email);

  $domain = $emailParts[1];
  return in_array($domain, $blacklist);
}
