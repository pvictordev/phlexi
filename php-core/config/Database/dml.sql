-- Populate skills table
INSERT INTO skills (skill_name) VALUES
    ('Web Development'),
    ('3D Modelling'),
    ('Social media marketing');

-- Populate categories table
INSERT INTO categories (category_name) VALUES
    ('Programming'),
    ('Graphic Design'),
    ('Digital Marketing');

-- Populate users table
INSERT INTO users (user_name, email, phone, bio, password) VALUES
    ('John Doe', 'john.doe@example.com', '123-456-7890', 'passionate web developer with +2 years of experience', 'password123'),
    ('Jane Smith', 'jane.smith@example.com', '987-654-3210', '3d modelling guru', 'password456');

-- Populate freelancers table
INSERT INTO freelancers (user_id, hourly_rate, availability) VALUES
    (1, 50, 1),
    (2, 40, 1);

-- Populate clients table
INSERT INTO clients (user_id, project_id) VALUES
    (1, NULL),
    (2, 1);

-- Populate projects table
INSERT INTO projects (category_id, price, status, description, date) VALUES
    (1, 1000, 'Active', 'Build an e-commerce website', NOW()),
    (2, 500, 'Closed', 'Create 3d modell of a cyborg', NOW());

-- Populate projects_skills table
INSERT INTO projects_skills (skill_id, project_id) VALUES
    (1, 1),
    (2, 1),
    (2, 2);

-- Populate freelancers_skills table
INSERT INTO freelancers_skills (user_id, skill_id) VALUES
    (1, 1),
    (1, 3),
    (2, 2);

-- Populate transactions table (sample data, adjust as needed)
INSERT INTO transactions (user_id, project_id, amount, date, status) VALUES
    (1, 1, 1500, NOW(), 'Completed'),
    (2, 2, 500, NOW(), 'Completed');

-- Populate reviews table (sample data, adjust as needed)
INSERT INTO reviews (user_id, project_id, rating, description) VALUES
    (1, 2, 5, 'Great work!'),
    (2, 1, 4, 'Good communication.');


