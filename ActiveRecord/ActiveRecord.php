<?php
namespace ActiveRecord;

use Services\Services;

abstract class ActiveRecord
{
    /** @var int */
    protected $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function __set(string $name, $text)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $text;
    }

    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }

    /**
     * @return static[]
     */
    public static function findAll(): array
    {
        $db = new Services();
        return $db->query("SELECT * FROM `card`, [], static::class");
    }

    abstract protected static function getTableName(): string;

    public static function add($title,$text){
        $db = new Services();
        $db->query("INSERT INTO `card` (`id`, `title`, `text`) VALUES (NULL, '$title', '$text')");
    }
    
    public static function edit($articleId,$title,$text){
        $db = new Services();
        $db->query("UPDATE `card` SET `title` = '$title', `text` = '$text' WHERE `card`.`id` = $articleId"    );
    }

    public static function delete($articleId): void
    {
        $db = new Services();
        $db->query(
            "DELETE FROM card WHERE `card`.`id` = $articleId"
        );
    }

}
