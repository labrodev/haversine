<?php

use PHPUnit\Framework\TestCase;
use Labrodev\Haversine\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @dataProvider provideCoordinates
     */
    public function test_fetch_haversine_distance(
        float $lat1,
        float $lon1,
        float $lat2,
        float $lon2,
        float $expected,
        float $delta = 0.1
    ): void {
        $distance = Calculator::calculateDistance($lat1, $lon1, $lat2, $lon2);
        $this->assertEqualsWithDelta($expected, $distance, $delta);
    }

    /**
     * @return array<array{float, float, float, float, float, float}>
     */
    public static function provideCoordinates(): array
    {
        return [
            // New York to London
            [40.7128, -74.0060, 51.5074, -0.1278, 5570, 5],
            // Paris to Berlin
            [48.8566, 2.3522, 52.5200, 13.4050, 878, 3],
            // Sydney to Melbourne
            [-33.8688, 151.2093, -37.8136, 144.9631, 714, 3],
            // Same location
            [50.0, 50.0, 50.0, 50.0, 0.0, 0.01],
        ];
    }
}
