<?php

namespace Returfs\Marketplace\External\Laravel\Items\Events\Contracts;

/**
 * Marker for events that ask the image-edit handler to ingest an edited
 * render of an item (strip metadata, re-encode, store as a new item).
 * The event must expose a public `imageEditItemData` property implementing
 * ImageEditItemDataContract.
 */
interface ImageEditItemEventContract {}
