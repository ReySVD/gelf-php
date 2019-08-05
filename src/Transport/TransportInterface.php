<?php

/*
 * This file is part of the php-gelf package.
 *
 * (c) Benjamin Zikarsky <http://benjamin-zikarsky.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Gelf\Transport;

/**
 * A transport is responsible for transporting the gelf message data to a GELF endpoint
 *
 * @author Benjamin Zikarsky <benjamin@zikarsky.de>
 */
interface TransportInterface
{
    /**
     * Send gelf-data via the transport
     *
     * @param array $data
     */
    public function send(array $data): void;
}
