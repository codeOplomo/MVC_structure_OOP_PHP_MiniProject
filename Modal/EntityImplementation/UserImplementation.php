
<?php


require_once __DIR__ . '/../EntityCrud/CrudInterface.php';

require_once __DIR__ . '/../EntityCrud/UserCrud.php';

class UserEntity implements CrudInterface
{
    public function create(object $data): bool
    {
        if ($data instanceof User) {
            return UserCRUD::save($data);
        }

        return false;
    }

    public function fetch(int $id): ?AbstractEntity
    {
        return UserCRUD::getUserById($id);
    }

    public function edit(int $id, object $data): bool
    {
        if ($data instanceof User) {
            return UserCRUD::editUser($id, $data);
        }

        return false;
    }

    public function delete(int $id): bool
    {
        $user = UserCRUD::getUserById($id);

        if ($user) {
            return UserCRUD::deleteUser($user);
        }

        return false;
    }
}

