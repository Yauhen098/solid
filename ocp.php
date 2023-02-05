<?php

namespace Solid\Examples\OCP;

class Image {
    public function SaveToFile(string $path)
    {
    }
}

class ImageWrongModified {
    public function SaveToBmp(string $path)
    {
    }
    public function SaveToJpg(string $path)
    {
    }
    public function SaveToPng(string $path)
    {
    }
}

interface SaveImageInterface {
    public function save(string $path);
}

abstract class SaveImageBase implements SaveImageInterface {
    abstract public function save(string $path);
}

class SaveBpm extends SaveImageBase {
    public function save(string $path){
    }
}
class SaveJpg extends SaveImageBase  {
    public function save(string $path){
    }
}
class SavePng extends SaveImageBase  {
    public function save(string $path){
    }
}
