<?php
namespace Avinash\GetData\Api;

interface GetInterface
{
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return array Greeting message with users name.
     */
    public function name($name);
}
