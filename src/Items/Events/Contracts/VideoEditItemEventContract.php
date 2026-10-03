<?php

namespace Returfs\Marketplace\External\Laravel\Items\Events\Contracts;

/**
 * Marker for events that ask the video handler to render an edit plan
 * (trim/cut/assemble) into a new item beside its source. The event must
 * expose a public `videoEditItemData` property implementing
 * VideoEditItemDataContract.
 */
interface VideoEditItemEventContract {}
