CREATE TABLE `projects_skills`(
    `skill_id` INT NOT NULL,
    `project_id` INT NOT NULL,
    PRIMARY KEY(`skill_id`, `project_id`)
);

CREATE TABLE `transactions`(
    `transaction_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `project_id` INT NOT NULL,
    `amount` DOUBLE(8, 2) NOT NULL,
    `date` DATETIME NOT NULL,
    `status` VARCHAR(255) NOT NULL
);
CREATE TABLE `freelancers`(
    `user_id` INT NOT NULL,
    `hourly_rate` INT NOT NULL,
    `availability` TINYINT(1) NOT NULL,
    PRIMARY KEY(`user_id`)
);
CREATE TABLE `clients`(
    `user_id` INT NOT NULL,
    `project_id` INT NULL,
    PRIMARY KEY(`user_id`)
);
ALTER TABLE
    `clients` ADD UNIQUE `clients_project_id_unique`(`project_id`);
CREATE TABLE `users`(
    `user_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `bio` TEXT NOT NULL,
    `password` VARCHAR(255) NOT NULL
);
CREATE TABLE `projects`(
    `project_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `category_id` INT NOT NULL,
    `price` INT NOT NULL,
    `status` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `date` DATETIME NOT NULL
);
ALTER TABLE
    `projects` ADD UNIQUE `projects_category_id_unique`(`category_id`);
CREATE TABLE `freelancers_skills`(
    `user_id` INT NOT NULL,
    `skill_id` INT NOT NULL,
    PRIMARY KEY(`user_id`, `skill_id`)
);

CREATE TABLE `reviews`(
    `user_id` INT NOT NULL,
    `project_id` INT NOT NULL,
    `rating` INT NOT NULL,
    `description` VARCHAR(255) NULL,
    PRIMARY KEY(`user_id`)
);
ALTER TABLE
    `reviews` ADD UNIQUE `reviews_project_id_unique`(`project_id`);
CREATE TABLE `skills`(
    `skill_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `skill_name` VARCHAR(255) NOT NULL
);
CREATE TABLE `categories`(
    `category_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
    `freelancers_skills` ADD CONSTRAINT `freelancers_skills_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `freelancers`(`user_id`);
ALTER TABLE
    `freelancers_skills` ADD CONSTRAINT `freelancers_skills_skill_id_foreign` FOREIGN KEY(`skill_id`) REFERENCES `skills`(`skill_id`);
ALTER TABLE
    `transactions` ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`user_id`);
ALTER TABLE
    `clients` ADD CONSTRAINT `clients_project_id_foreign` FOREIGN KEY(`project_id`) REFERENCES `projects`(`project_id`);
ALTER TABLE
    `freelancers` ADD CONSTRAINT `freelancers_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`user_id`);
ALTER TABLE
    `projects` ADD CONSTRAINT `projects_category_id_foreign` FOREIGN KEY(`category_id`) REFERENCES `categories`(`category_id`);
ALTER TABLE
    `transactions` ADD CONSTRAINT `transactions_project_id_foreign` FOREIGN KEY(`project_id`) REFERENCES `projects`(`project_id`);
ALTER TABLE
    `projects_skills` ADD CONSTRAINT `projects_skills_skill_id_foreign` FOREIGN KEY(`skill_id`) REFERENCES `skills`(`skill_id`);