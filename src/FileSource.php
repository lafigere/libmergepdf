<?php

namespace iio\libmergepdf;

/**
 * Pdf source from file
 */
class FileSource implements SourceInterface
{
    /**
     * @var string
     */
    private $filename;

    /**
     * @var Pages
     */
    private $pages;

    /**
     * @param string $filename
     * @param Pages  $pages
     */
    public function __construct($filename, Pages $pages = null)
    {
        $this->filename = $filename;
        $this->pages = $pages ?: new Pages;
    }

    public function getName()
    {
        return $this->filename;
    }

    public function getContents()
    {
        return file_get_contents($this->filename);
    }

    public function getPages()
    {
        return $this->pages;
    }
}
