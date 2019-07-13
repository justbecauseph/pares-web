<?php

namespace Pares\Transformers;

use League\Fractal;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use Pares\User; 

class UserTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [];

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * Transform object into a generic array
     *
     * @var \Pares\User $resource
     * @return array
     */
    public function transform(User $resource)
    {
        return [

            'id' => (int) $resource->id,
			'name' => $resource->name,
			'email' => $resource->email,
			'email_verified_at' => $resource->email_verified_at,
			'created_at' => $resource->created_at,
			'updated_at' => $resource->updated_at,
			
        ];
    }
}
