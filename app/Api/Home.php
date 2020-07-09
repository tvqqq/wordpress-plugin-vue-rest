<?php

namespace Wpvr\Api;

class Home extends BaseController
{
    public function index()
    {
        $random = random_int(0, 999);
        return $this->ok("Your random number is: $random");
    }
}
