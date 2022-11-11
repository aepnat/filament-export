<?php

namespace AlperenErsoy\FilamentExport\Concerns;

use Illuminate\Database\Eloquent\Builder;

interface CanCustomQuery
{
    public function getQueryExport(): Builder;
}