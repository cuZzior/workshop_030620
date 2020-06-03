<?php

namespace DocFlow\Domain;

class Document
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var DocumentStatus
     */
    private $status;

    /**
     * @var DocumentType
     */
    private $type;

    /**
     * @var User
     */
    private $author;

    /**
     * @var User
     */
    private $verifier = null;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var User[]
     */
    private $readers = [];

    /**
     * Document constructor.
     * @param DocumentType $type
     * @param User $author
     */
    public function __construct(DocumentType $type, User $author)
    {
        $this->type = $type;
        $this->author = $author;
        $this->status = DocumentStatus::DRAFT();
    }

    public function verify(User $verifier): void
    {

    }

    public function publish(): void
    {

    }

    public function archive(): void
    {

    }

    public function addReader(User $reader)
    {

    }

    public function changeContent(string $title, string $content): void
    {

    }

    /**
     * @return DocumentStatus
     */
    public function getStatus(): DocumentStatus
    {
        return $this->status;
    }
}