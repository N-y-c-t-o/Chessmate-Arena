# ♟ Chessmate Arena

Chessmate Arena is a **web-based chess platform** developed as a Semester V Artificial Intelligence project.

The application allows users to play chess either against an **AI engine** or against other players in **multiplayer mode** using a Node.js server.

This project demonstrates the implementation of AI-based game logic, real-time multiplayer communication, and web-based chess gameplay.

---

# 🚀 Features

- Play chess against AI
- Multiplayer chess mode
- Real-time game communication
- User authentication system
- Chessboard interface with piece movement
- Database integration for user data

---

# 🛠 Technologies Used

Frontend
- HTML
- CSS
- JavaScript

Backend
- PHP
- Node.js (for multiplayer server)

Database
- MySQL

Other Components
- Chess AI logic
- Multiplayer socket server

---

# 📂 Project Structure


Chessmate-Arena

│

├── css/

├── chess_img/

├── multiplayer_mode/

│ └── server.js

├── homePage.php

├── registration.php

├── logout.php

├── db.php

├── homePage.js

├── chess_ai.sql

└── README.md


---

# ⚙️ Installation

### 1 Clone the repository


    git clone https://github.com/N-y-c-t-o/Chessmate-Arena.git


### 2 Setup the database

Import the SQL file:


    chess_ai.sql


into your MySQL database.

### 3 Run the web application

Place the project folder in your web server directory (XAMPP / Apache).

Example:


    htdocs/Chessmate-Arena


Open in browser:


    http://localhost/Chessmate-Arena


---

# ▶ Multiplayer Mode Setup

To enable multiplayer mode:

1. Open a new terminal
2. Navigate to the multiplayer folder


        cd multiplayer_mode


3. Start the Node.js server


        node server.js


If the terminal shows:


Server is listening on port 3000


Multiplayer mode is ready.

Note: Only two players can connect simultaneously.

---

# 🎯 Learning Objectives

This project demonstrates:

- AI-based game development
- Real-time multiplayer communication
- Web application architecture
- Database integration
- Full-stack web development

---

# 🚧 Future Improvements

Possible improvements include:

- Stronger chess AI engine
- Player ranking system
- Match history tracking
- Chat system during games
- Online matchmaking

---

# 👨‍💻 Author

Developed by **N-y-c-t-o**

---

# 📜 License

This project is open-source and intended for educational purposes.
