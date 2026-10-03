<?php

namespace Returfs\Marketplace\External\Laravel\Items\Events\Contracts;

/**
 * Marker for events that ask the pdf-edit handler to ingest an edited PDF
 * (structure check, linearize, store as a new item). The event must expose a
 * public `pdfEditItemData` property implementing PdfEditItemDataContract.
 */
interface PdfEditItemEventContract {}
