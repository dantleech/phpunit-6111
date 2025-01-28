<?php

namespace Example;

class TriggersDeprecation
{
    public static function bang(): void
    {
        trigger_error('deprecation', E_USER_DEPRECATED);
    }
}
