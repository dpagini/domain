<?php

/**
 * @file
 * Definition of Drupal\domain_alias\DomainAliasLoaderInterface.
 */

namespace Drupal\domain_alias;

use Drupal\domain_alais\DomainAliasInterface;

/**
 * Supplies loader methods for common domain_alias requests.
 */
interface DomainAliasLoaderInterface {

  /**
   * Loads a single alias.
   *
   * @param $id
   *   A domain_alias id to load.
   * @param boolean $reset
   *   Indicates that the entity cache should be reset.
   *
   * @return DomainAliasInterface
   *   A Drupal\domain_alias\DomainAliasInterface object | NULL.
   */
  public function load($id, $reset = FALSE);

  /**
   * Loads multiple aliases.
   *
   * @param array $ids
   *   An optional array of specific ids to load.
   * @param boolean $reset
   *   Indicates that the entity cache should be reset.
   *
   * @return array
   *   An array of Drupal\domain_alias\DomainAliasInterface objects.
   */
  public function loadMultiple($ids = NULL, $reset = FALSE);

  /**
   * Loads a domain alias record by hostname lookup.
   *
   * This method will return the best match to a request.
   *
   * @param string $hostname
   *   A hostname string, in the format example.com.
   *
   * @return Drupal\domain_alias\DomainAliasInterface | NULL
   */
  public function loadByHostname($hostname);

  /**
   * Loads a domain alias record by pattern lookup.
   *
   * @param string $pattern
   *   A pattern string, in the format *.example.com.
   *
   * @return Drupal\domain_alias\DomainAliasInterface | NULL
   */
  public function loadByPattern($pattern);

  /**
   * Sorts aliases by wildcard to float exact matches to the top.
   *
   * For use by loadByHostname().
   */
  public function sort($a, $b);

}
