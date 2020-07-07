<?php

namespace Wpvr\Api;

use Wpvr\Base\Constants;
use WP_Error;
use WP_REST_Response;

class BaseController
{
    const OPTION_NAME = Constants::SNAKE_NAME . '_home_options';

    public function getOptions()
    {
        return get_option(self::OPTION_NAME);
    }

    /**
     * Return OK.
     * @param $data
     * @return WP_REST_Response
     */
    public function ok($data = null)
    {
        return new WP_REST_Response(['success' => true, 'data' => $data], 200);
    }

    /**
     * Return not OK.
     * @param $message
     * @return WP_Error
     */
    public function fail($message)
    {
        return new WP_Error('000', $message);
    }
}
