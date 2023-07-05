<?php
namespace Model;

use ActiveRecord\ActiveRecord;
use Services\Services;


class Article extends ActiveRecord
{

    public $title;

    public $text;


    public function __set($name, $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }


    public static function findAll(): array
    {
        $db = new Services();
        return $db->query('SELECT * FROM `card`;', [], Article::class);
    }

    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }

    protected static function getTableName(): string
    {
        return 'card';
    }

    public static function getById(int $id): array
    {
        $db = new Services();
        $entities = $db->query(
            'SELECT * FROM `' . static::getTableName() . '` WHERE id=:id;',
            [':id' => $id],
            static::class
        );

        return $entities[0];

    }

}


