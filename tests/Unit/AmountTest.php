<?php

use Oe2i\Amount\Tests\TestCase;
use Oe2i\Amount\Facades\Amount as AmountFacade;

it('converts amounts to words', function () {
    $result = AmountFacade::inWords(100);
    
    expect($result)->toBe('one hundred');
});

it('formats amounts as currency', function () {
    $result = AmountFacade::inFigures(1000.50);
    expect($result)
        ->toContain('1,000.50')
        ->toContain('₦');
});

