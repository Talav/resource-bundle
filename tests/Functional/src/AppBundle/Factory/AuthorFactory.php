<?php
declare(strict_types=1);

namespace AppBundle\Factory;

use AppBundle\Entity\AbstractAuthor;
use Talav\Component\Resource\Model\ResourceInterface;

final class AuthorFactory implements AuthorFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function create(): ResourceInterface
    {
        return new AbstractAuthor();
    }
}