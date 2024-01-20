<?php

declare(strict_types=1);

namespace MsgPhp\Domain\Model;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
trait CreatedAtField
{
    /** @var \DateTimeInterface */
    protected $createdAt;

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }
}
