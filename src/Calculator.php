<?php

declare(strict_types=1);

namespace Labrodev\Haversine;

/**
 * Class Calculator
 *
 * A simple utility class to calculate the great-circle distance (the shortest distance over the Earth's surface)
 * between two geographic points specified by latitude and longitude using the Haversine formula.
 *
 * This implementation assumes the Earth is a perfect sphere, using a mean radius of 6,371 km.
 *
 * @package Labrodev\Haversine
 */
final class Calculator
{
    public const EARTH_RADIUS = 6371; // Radius in kilometers

    /**
     * Calculates the Haversine distance between two latitude/longitude coordinates.
     *
     * @param float $lat1 Latitude of point A
     * @param float $lon1 Longitude of point A
     * @param float $lat2 Latitude of point B
     * @param float $lon2 Longitude of point B
     * @return float Distance in kilometers
     */
    public static function haversineDistance(float $lat1, float $lon1, float $lat2, float $lon2): float
    {
        $r = self::EARTH_RADIUS;

        // Convert degrees to radians
        $lat1Rad = deg2rad($lat1);
        $lat2Rad = deg2rad($lat2);
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        // Haversine formula
        $a = sin($dLat / 2) ** 2
            + cos($lat1Rad) * cos($lat2Rad)
            * sin($dLon / 2) ** 2;

        $c = 2 * asin(sqrt($a));

        return $r * $c;
    }
}