<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface
{
    protected $query;
    protected $table;
    protected $fields;
    protected $conditions = [];
    protected $limit;

    public function select(string $table, array $fields): self
    {
        $this->table = $table;
        $this->fields = $fields;
        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): self
    {
        $this->conditions[] = "$field $operator '$value'";
        return $this;
    }

    public function limit(int $start, int $offset): self
    {
        $this->limit = "LIMIT $start, $offset";
        return $this;
    }

    public function getSQL(): string
    {
        $sql = "SELECT " . implode(', ', $this->fields) . " FROM " . $this->table;
        if (!empty($this->conditions)) {
            $sql .= " WHERE " . implode(' AND ', $this->conditions);
        }
        if ($this->limit) {
            $sql .= " " . $this->limit;
        }
        return $sql;
    }
}