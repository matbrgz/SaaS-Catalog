<?php

namespace Aws\Database;

class AttributesCreate {
    public function createFields($attributes) {
        return implode(',', array_keys($attributes));
    }

    public function createValues($attributes) {
        return ':'.implode( ',:', array_keys($attributes));
    }

    public function bindCreateParameters($attributes) {
        $values = $this->createValues($attributes);
        $bindParameters = array_combine(explode(',', $values), array_values($attributes));

        return $bindParameters;
    }
}