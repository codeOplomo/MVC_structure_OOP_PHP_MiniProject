<?php 

interface CrudInterface {
    public function create(object $data): bool;
    public function fetch(int $id): ?AbstractEntity;
    public function edit(int $id, object $data): bool;
    public function delete(int $id): bool;
}