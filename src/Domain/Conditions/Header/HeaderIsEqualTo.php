<?php

namespace Mcustiel\Phiremock\Domain\Conditions\Header;

use Mcustiel\Phiremock\Domain\Conditions\StringValue;

final class HeaderIsEqualTo extends HeaderCondition
{
    public function __construct(StringValue $string)
    {
        parent::__construct(HeaderMatcher::equalTo(), $string);
    }
}
