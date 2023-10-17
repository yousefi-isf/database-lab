<?php

class Insert extends Dbh{
    public function getUsers() {
        $stmt = $this->connect()->query("
        INSERT INTO `users`(`u_name`, `u_password`, `email`)
VALUES(
    'محمد',
    '13245678',
    'test2@gmail.com'
)
        ");
    }
}
