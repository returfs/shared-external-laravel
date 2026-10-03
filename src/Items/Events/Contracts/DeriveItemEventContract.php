<?php

namespace Returfs\Marketplace\External\Laravel\Items\Events\Contracts;

/**
 * Marker for events that ask the item-convert handler to turn bytes an
 * extension rendered from an item (an "Export as") into a new item in another
 * format. The event must expose a public `deriveItemData` property
 * implementing DeriveItemDataContract.
 */
interface DeriveItemEventContract {}
