<?php

namespace App\Events\Item\User;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Returfs\Marketplace\External\Laravel\Items\Data\Contracts\NewItemDataContract;

/**
 * Class CreateNewItemEvent
 *
 * @implements CreateNewItem<NewItemData>
 */
class UpdateNewItemEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public NewItemDataContract $newItemData)
    {
        //
        ray('here');
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int,Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
