CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role INT NOT NULL CHECK (role IN (0, 1)) -- Chỉ cho phép giá trị 0 hoặc 1
);
 
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);

-- Chèn dữ liệu vào bảng users
INSERT INTO users (username, password, role) VALUES
('admin', 'admin123', 1),
('user', 'user123', 0);

-- Chèn dữ liệu vào bảng categories
INSERT INTO categories (name) VALUES
('Technology'),
('Lifestyle'),
('Education');

-- Chèn dữ liệu vào bảng news
INSERT INTO news (title, content, image, category_id) VALUES
('First News', 'This is the content of the first news.', 'image1.jpg', 1),
('Second News', 'This is the content of the second news.', 'image2.jpg', 2);
