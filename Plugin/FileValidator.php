<?php
namespace Orangecat\TemplateSymlinks\Plugin;

class FileValidator
{
    public function aroundIsValid(\Magento\Framework\View\Element\Template\File\Validator $subject, $proceed, $filename)
    {
        return $proceed($filename) || file_exists($filename);
    }
}
