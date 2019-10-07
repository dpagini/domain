<?php

namespace Drupal\Tests\domain_alias\Functional;

use Drupal\Tests\domain\Functional\DomainTestBase;

/**
 *
 *
 * @group domain_alias
 */
class DomainAliasInstall extends DomainTestBase {

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
  }

  public function testInstallationNoContentPass() {
    \Drupal::service('module_installer')->install(['domain_alias']);
  }

  public function testInstallationContentFail() {
    $this->createContentType();
    $this->createNode();
    \Drupal::service('module_installer')->install(['domain_alias']);
  }

}

