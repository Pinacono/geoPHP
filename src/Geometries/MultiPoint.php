<?php

namespace Pinacono\GeoPHP\Geometries;

/**
 * MultiPoint: A collection Points
 */
class MultiPoint extends GeometryCollection {

  protected $geom_type = 'MultiPoint';

  public function numPoints() {
    return $this->numGeometries();
  }

  public function isSimple() {
    return TRUE;
  }

  // Not valid for this geometry type
  // --------------------------------
  public function explode() { return NULL; }
}

