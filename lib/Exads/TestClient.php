<?php

namespace Exads;

class TestClient extends Client
{
    /**
     * @param string $path
     * @param string $method
     * @param string $data
     *
     * @throws \Exception always!
     *
     * @return string
     */
    protected function runRequest($path, $method = 'GET', $data = '')
    {
        throw new \Exception('not available');
    }
}
