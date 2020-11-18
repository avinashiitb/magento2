<?php
namespace Avinash\AddData\Api;

interface PostInterface
{
  /**
   * Returns greeting message to user
   *
   * @api
   * @param mixed $data.
   * @return string Greeting message with users name.
   */
  public function setData($data);
}
