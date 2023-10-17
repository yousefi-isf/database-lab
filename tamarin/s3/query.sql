-- Soft delete user that has id equal to 1
UPDATE
    `users`
SET
    `deleted` = TRUE
WHERE
    id = 1;
