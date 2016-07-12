<?php

namespace Session;

use Psr\Http\Message\ResponseInterface;

interface SessionInterface extends StashInterface
{
    public function id(): string;

    public function name(): string;

    public function migrate();

    public function destroy();

    public function start();

    public function started(): bool;

    public function close(ResponseInterface $response = null);

    public function has(string $key): bool;

    public function get(string $key);

    public function put(string $key, $value);

    public function remove(string $key);
}