
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL,
    cake_id VARCHAR(10) NOT NULL,
    quantity INT NOT NULL,
    delivery_date DATE NOT NULL,
    order_type VARCHAR(20) NOT NULL,
    message VARCHAR(100),
    address VARCHAR(200) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
