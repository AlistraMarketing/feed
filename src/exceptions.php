<?php
/**
 * Created by PhpStorm.
 * User: jam
 * Date: 27.1.15
 * Time: 19:56
 */

namespace Mk\Feed;

use Mk;

class LogicException extends \LogicException
{

}

class FileEmptyException extends LogicException
{

}

class ItemIncompletedException extends LogicException
{

}
