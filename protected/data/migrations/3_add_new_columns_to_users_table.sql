ALTER TABLE users ADD created_at TIMESTAMP;
ALTER TABLE users ADD created_by VARCHAR(255);
ALTER TABLE users ADD updated_at TIMESTAMP NULL;
ALTER TABLE users ADD updated_by VARCHAR(255) NULL;