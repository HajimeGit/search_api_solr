<?php

namespace Drupal\Tests\search_api_solr\Unit;

if (class_exists('\Prophecy\PhpUnit\ProphecyTrait')) {
  class Drupal10CompatibilityUnitTestCase extends UnitTestCase {
    use \Prophecy\PhpUnit\ProphecyTrait;
  }
}
else {
  class Drupal10CompatibilityUnitTestCase extends UnitTestCase {}
}
