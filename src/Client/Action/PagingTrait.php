<?php


namespace swichers\Acsf\Client\Client\Action;


trait PagingTrait {

  protected function validatePaging(array $options) : array {
    if (isset($options['limit'])) {
      // Valid values are 1 to 100.
      $options['limit'] = max(1, min($options['limit'], 100));
    }

    if (isset($options['page'])) {
      $options['page'] = min(1, $options['page']);
    }

    return $options;
  }

}
