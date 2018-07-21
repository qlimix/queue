<?php declare(strict_types=1);

namespace Qlimix\Queue\Reconstruction;

use Qlimix\Serializable\SerializableInterface;

interface MessageReconstructorInterface
{
    /**
     * @param string $message
     *
     * @return SerializableInterface
     */
    public function reconstruct(string $message): SerializableInterface;

    /**
     * @param string $message
     * @param string $objectName
     */
    public function registerMessage(string $message, string $objectName): void;
}
