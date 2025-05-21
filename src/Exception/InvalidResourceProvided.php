<?php declare(strict_types=1);

namespace AlanVdb\Http\Exception;

use AlanVdb\Http\Definition\StreamException;
use InvalidArgumentException;

class InvalidResourceProvided
    extends InvalidArgumentException
    implements StreamException
{}
