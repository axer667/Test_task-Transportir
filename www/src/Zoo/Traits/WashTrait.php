<?php
namespace Zoo\Traits;

use Zoo\Enums\CleanlinessState;

/**
 * WashTrait Trait
 *
 * @version 0.1.0
 */
trait WashTrait
{
    /**
     * @var CleanlinessState $cleanliness CleanlinessState
     */
    protected CleanlinessState $cleanliness;

    /**
     * Устанавливает значение $cleanliness в значение CleanlinessState::Clean
     * (помылся, значит стал чистым)
     */
    public function washing(): void
    {
        $this->cleanliness = CleanlinessState::Clean;
    }

    /**
     * Устанавливает новое значения состояния чистоты
     *
     * @param CleanlinessState $state CleanlinessState
     *
     */
    public function setCleanlinessState(CleanlinessState $state): void
    {
        $this->cleanliness = $state;
    }

    /**
     * Возвращает состояние чистоты
     *
     * @return CleanlinessState
     *
     */
    public function getCleanlinessState(): CleanlinessState
    {
        return $this->cleanliness;
    }
}