<?php

namespace Solid\Examples\DIP;

class HeightLevelClass
{
    public function getName(MysqlStorage $storage)
    {
        return $storage->findName();
    }
}

class MysqlStorage
{
    public function findName()
    {
    }
}

class HeightLevelClassNew
{
    public function getName(StorageInterface $storage)
    {
        return $storage->findName();
    }
}

interface StorageInterface
{
    public function findName();
}

class MysqlStorageNew implements StorageInterface
{
    public function findName()
    {
    }
}

