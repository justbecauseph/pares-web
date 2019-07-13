<?php

namespace Pares\Http\Controllers\Api;

use Illuminate\Http\Request;
use Pares\Events\PareMessageEvent;
use Pares\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function receive()
    {
        event(new PareMessageEvent(auth()->user(), 'test'));

        return $this->response()->noContent();
    }
}
