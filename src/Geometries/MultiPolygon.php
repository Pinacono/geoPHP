<?php

namespace Pinacono\GeoPHP\Geometries;

/**
 * MultiPolygon: A collection of Polygons
 */
class MultiPolygon extends GeometryCollection {
  protected $geom_type = 'MultiPolygon';
}
