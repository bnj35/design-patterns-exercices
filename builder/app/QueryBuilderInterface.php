<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;

interface QueryBuilderInterface
{
    public function select(string $table, array $fields): self;
    public function where(string $field, string $value, string $operator = '='): self;
    public function limit(int $start, int $offset): self;
    public function getSQL(): string;
}