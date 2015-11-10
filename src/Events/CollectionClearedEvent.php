<?php

namespace Spatie\MediaLibrary\Events;

use Illuminate\Queue\SerializesModels;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class CollectionClearedEvent
{

    use SerializesModels;

    /**
     * @var \Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia
     */
    protected $model;

    /**
     * @var string
     */
    protected $collectionName;

    /**
     * MediaHasBeenStoredEvent constructor.
     *
     * @param \Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia $model
     * @param string                                            $collectionName
     */
    public function __construct(HasMedia $model, $collectionName)
    {
        $this->model = $model;
        $this->collectionName = $collectionName;
    }

    /**
     * @return HasMedia
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getCollectionName()
    {
        return $this->collectionName;
    }

}
