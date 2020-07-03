<?php
namespace Orangecat\TemplateSymlinks\Plugin;

class DirectoryValidator
{
    public function afterIsValid(\Magento\Framework\Filesystem\Directory\PathValidator $subject, $result)
    {
        return true;
    }
}
