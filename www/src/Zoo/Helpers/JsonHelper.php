<?php
namespace Zoo\Helpers;
use zoo\Zoo;

/**
 * JsonHelper Class
 *
 * @version 0.1.0
 */
class JsonHelper {
    /**
     * Функция преобразует экземпляр Zoo в json-объект
     *
     * @param Zoo $zoo Zoo
     *
     * @return false|string JSON-object
     *
     */
    public static function encodeZoo(Zoo $zoo) {
        $data = [
            'title' => $zoo->getTitle(),
            'animals' => [],
        ];
        $animals = $zoo->getAnimals();
        foreach ($animals as $animal) {
            $data['animals'][] = $animal->toArray();
        }
        return json_encode($data);
    }
}