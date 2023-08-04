CREATE TABLE IF NOT EXISTS employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(200) NOT NULL,
    salary DECIMAL(10, 2) NOT NULL
);

INSERT INTO employees (name, address, salary) VALUES
('John Doe', '123 Main St, City A', 50000.00),
('Jane Smith', '456 Elm St, City B', 60000.00),
('Michael Johnson', '789 Oak St, City C', 55000.00),
('Emily Wilson', '101 Pine St, City D', 52000.00),
('Robert Lee', '222 Maple St, City E', 48000.00),
('Olivia Brown', '333 Cedar St, City F', 51000.00),
('James Anderson', '444 Birch St, City G', 58000.00),
('Emma Taylor', '555 Walnut St, City H', 52000.00),
('William Martin', '666 Birch St, City I', 53000.00),
('Sophia Lee', '777 Oak St, City J', 49000.00),
('Alexander Hall', '888 Elm St, City K', 57000.00),
('Isabella Garcia', '999 Main St, City L', 54000.00),
('Michael Davis', '111 Oak St, City M', 56000.00),
('Ava Martinez', '222 Cedar St, City N', 51000.00),
('Ethan Hernandez', '333 Elm St, City O', 50000.00),
('Olivia Lopez', '444 Maple St, City P', 48000.00),
('Mia Wright', '555 Cedar St, City Q', 52000.00),
('Liam Adams', '666 Birch St, City R', 54000.00),
('Charlotte Rodriguez', '777 Oak St, City S', 49000.00),
('Noah Perez', '888 Main St, City T', 53000.00),
('Aria Long', '999 Elm St, City U', 51000.00),
('Oliver Torres', '111 Maple St, City V', 52000.00),
('Amelia Flores', '222 Cedar St, City W', 48000.00),
('Elijah Washington', '333 Pine St, City X', 56000.00),
('Sophia Bryant', '444 Elm St, City Y', 52000.00),
('Logan Sanchez', '555 Cedar St, City Z', 53000.00),
('Avery Rivera', '666 Main St, City AA', 49000.00),
('Abigail Collins', '777 Pine St, City BB', 55000.00),
('Benjamin Bell', '888 Maple St, City CC', 51000.00),
('Scarlett Cole', '999 Cedar St, City DD', 53000.00),
('Leo Morgan', '111 Oak St, City EE', 49000.00),
('Chloe Howard', '222 Pine St, City FF', 55000.00),
('Lucas Ward', '333 Main St, City GG', 52000.00),
('Lily Foster', '444 Elm St, City HH', 51000.00),
('Carter Simmons', '555 Maple St, City II', 50000.00),
('Madison Bryant', '666 Oak St, City JJ', 52000.00),
('Henry Rivera', '777 Cedar St, City KK', 56000.00),
('Emily Reed', '888 Main St, City LL', 51000.00),
('Sebastian Gray', '999 Elm St, City MM', 54000.00),
('Harper James', '111 Birch St, City NN', 52000.00),
('Michael Bennett', '222 Pine St, City OO', 53000.00),
('Sofia Nelson', '333 Elm St, City PP', 52000.00),
('Jackson Powell', '444 Main St, City QQ', 50000.00),
('Aria Green', '555 Maple St, City RR', 51000.00),
('Evelyn Jenkins', '666 Elm St, City SS', 49000.00),
('William Hughes', '777 Main St, City TT', 54000.00),
('Avery Fisher', '888 Oak St, City UU', 51000.00),
('Aubrey Washington', '999 Cedar St, City VV', 53000.00),
('Daniel Rogers', '111 Birch St, City WW', 52000.00),
('Mila Kelly', '222 Main St, City XX', 55000.00);
