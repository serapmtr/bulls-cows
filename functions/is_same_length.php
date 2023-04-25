<?php

namespace Length;

function isSame($secret, $input)
{
    if (strlen($secret) == strlen($input)) {
        return true;
    }
    return false;
}
