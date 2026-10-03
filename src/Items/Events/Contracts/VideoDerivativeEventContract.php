<?php

namespace Returfs\Marketplace\External\Laravel\Items\Events\Contracts;

/**
 * Marker for events that ask the video handler to build a derived playback
 * artifact (an HLS segment set or an H.264 proxy) for an item. The event must
 * expose a public `videoDerivativeData` property implementing
 * VideoDerivativeDataContract.
 */
interface VideoDerivativeEventContract {}
