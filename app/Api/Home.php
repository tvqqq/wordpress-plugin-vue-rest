<?php

namespace Wpvr\Api;

class Home extends BaseController
{
    public function index()
    {
        $response = $this->getOptions();
        return $this->ok($response);
    }

    public function store($request)
    {
        // Get request data
        $data = $request['data'];

        // Add option
        update_option(self::OPTION_NAME, $data);

        // Response
        return $this->ok();
    }
}
