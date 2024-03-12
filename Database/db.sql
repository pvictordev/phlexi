CREATE TABLE `projects_skills`(
    `skill_id` BIGINT NOT NULL,
    `project_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    PRIMARY KEY(`skill_id`)
);
CREATE TABLE `transactions`(
    `transaction_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `project_id` BIGINT NOT NULL,
    `amount` DOUBLE(8, 2) NOT NULL,
    `date` DATETIME NOT NULL,
    `status` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `transactions` ADD UNIQUE `transactions_user_id_unique`(`user_id`);
ALTER TABLE
    `transactions` ADD UNIQUE `transactions_project_id_unique`(`project_id`);
CREATE TABLE `freelancers`(
    `user_id` INT NOT NULL,
    `hourly_rate` INT NOT NULL,
    `availability` TINYINT(1) NOT NULL,
    PRIMARY KEY(`user_id`)
);
CREATE TABLE `clients`(
    `user_id` INT NOT NULL,
    `project_id` INT NOT NULL,
    PRIMARY KEY(`user_id`)
);
ALTER TABLE
    `clients` ADD UNIQUE `clients_project_id_unique`(`project_id`);
CREATE TABLE `users`(
    `user_id` BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `bio` TEXT NOT NULL,
    `password` VARCHAR(255) NOT NULL
);
CREATE TABLE `projects`(
    `project_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `category_id` INT NOT NULL,
    `price` INT NOT NULL,
    `status` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `date` DATETIME NOT NULL
);
ALTER TABLE
    `projects` ADD UNIQUE `projects_category_id_unique`(`category_id`);
CREATE TABLE `reviews`(
    `user_id` BIGINT NOT NULL,
    `project_id` BIGINT NOT NULL,
    `rating` INT NOT NULL,
    `description` VARCHAR(255) NULL,
    PRIMARY KEY(`user_id`)
);
ALTER TABLE
    `reviews` ADD UNIQUE `reviews_project_id_unique`(`project_id`);
CREATE TABLE `skills`(
    `user_id` BIGINT NOT NULL,
    `skill_id` BIGINT NOT NULL,
    `skill_name` VARCHAR(255) NOT NULL,
    PRIMARY KEY(`user_id`)
);
ALTER TABLE
    `skills` ADD UNIQUE `skills_skill_id_unique`(`skill_id`);
CREATE TABLE `categories`(
    `category_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `category_name` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `reviews` ADD CONSTRAINT `reviews_project_id_foreign` FOREIGN KEY(`project_id`) REFERENCES `projects`(`project_id`);
ALTER TABLE
    `reviews` ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `freelancers`(`user_id`);
ALTER TABLE
    `projects_skills` ADD CONSTRAINT `projects_skills_project_id_foreign` FOREIGN KEY(`project_id`) REFERENCES `projects`(`project_id`);
ALTER TABLE
    `clients` ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`user_id`);
ALTER TABLE
    `transactions` ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`user_id`);
ALTER TABLE
    `skills` ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `freelancers`(`user_id`);
ALTER TABLE
    `clients` ADD CONSTRAINT `clients_project_id_foreign` FOREIGN KEY(`project_id`) REFERENCES `projects`(`project_id`);
ALTER TABLE
    `freelancers` ADD CONSTRAINT `freelancers_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`user_id`);
ALTER TABLE
    `projects` ADD CONSTRAINT `projects_category_id_foreign` FOREIGN KEY(`category_id`) REFERENCES `categories`(`category_id`);
ALTER TABLE
    `transactions` ADD CONSTRAINT `transactions_project_id_foreign` FOREIGN KEY(`project_id`) REFERENCES `projects`(`project_id`);
ALTER TABLE
    `skills` ADD CONSTRAINT `skills_skill_id_foreign` FOREIGN KEY(`skill_id`) REFERENCES `projects_skills`(`skill_id`);