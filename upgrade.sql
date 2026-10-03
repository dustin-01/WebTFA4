ALTER TABLE users ADD COLUMN password VARCHAR(255) NOT NULL DEFAULT '';
UPDATE users SET password = '$2y$12$93IfNr6sJ7Q69xAjzO6nzeae531IbVy807i0gFemgoQuj9s0DG2AC' WHERE password = '';
