# Mawapres.id

## Description

The Mawapres Web Application is designed to facilitate the management and tracking of outstanding students (Mahasiswa Berprestasi) at a university. This application allows administrators to efficiently create, update, view, and delete records of students' achievements. The backend handles data processing and storage, while the frontend provides an intuitive interface for user interaction.

## Project Structure Mawapres.di

```
Mawapres.id/
├── src/
│ ├── backend/
│ │ ├── controllers/
│ │ │ ├── recordController.js
│ │ ├── models/
│ │ │ ├── database.js
│ │ │ ├── recordModel.js
│ │ ├── routes/
│ │ │ ├── recordRoutes.js
│ │ ├── app.js
│ │ ├── package.json
│ │ ├── package-lock.json
│ ├── frontend/
│ │ ├── index.html
│ │ ├── script.js
│ │ ├── style.css
│ │ ├── tailwind.config.js
│ │ └── dist/
│ │ ├── output.css
├── README.md
└── .gitignore 1
```

---

## Backend Explanation

The **backend** serves as the core logic and database manager for the Mawapres Web Application. It ensures that data related to students and their achievements is properly stored, retrieved, and modified as needed.

### **Controllers**

- **Location**: `src/backend/controllers/`
- **Purpose**:
  Controllers manage the application's business logic, processing incoming requests from the frontend and coordinating responses.
- **Key Tasks**:
  - Handling logic for managing student records.
  - Validating data before it is saved to the database.
  - Returning appropriate responses (e.g., success or error messages).

### **Models**

- **Location**: `src/backend/models/`
- **Purpose**:
  Models define how student data and related information are structured and interact with the database.
- **Key Tasks**:
  - Setting up the database connection (`database.js`).
  - Defining schemas for students' achievements and other related data (`recordModel.js`).
  - Performing CRUD operations directly on the database.

### **Routes**

- **Location**: `src/backend/routes/`
- **Purpose**:
  Routes define the API endpoints used to perform operations on the backend. They map URLs to specific controller functions.
- **Key Tasks**:
  - Defining RESTful routes (e.g., `/students`, `/students/:id`).
  - Connecting routes to controller functions for processing.

### **Backend Responsibilities**

The backend is responsible for:

1. **Data Management**:
   - Storing student information such as names, achievements, and awards.
   - Updating records when necessary and ensuring data consistency.
2. **API Integration**:
   - Providing endpoints for the frontend to interact with the database.
3. **Validation and Security**:
   - Validating data to ensure only correct and authorized information is stored.
   - Securing sensitive data from unauthorized access.

---

## Frontend Explanation

The **frontend** provides a user-friendly interface for administrators and staff to manage student achievements. It allows users to interact with the application, perform CRUD operations, and visualize data effectively.

### **HTML**

- **File**: `src/frontend/index.html`
- **Purpose**:
  Serves as the main structure for the Mawapres application interface.
- **Key Tasks**:
  - Displays the layout for managing student records.
  - Embeds links to JavaScript and CSS files for functionality and styling.

### **CSS**

- **File**: `src/frontend/style.css`
- **Purpose**:
  Provides custom styling to enhance the visual appeal of the application. TailwindCSS is also integrated for utility-based styling.
- **Key Tasks**:
  - Defining specific styles for buttons, forms, and tables.
  - Improving readability and user experience.

### **TailwindCSS**

- **File**: `src/frontend/tailwind.config.js`
- **Purpose**:
  Simplifies styling using predefined utility classes, ensuring a consistent and professional design.
- **Key Tasks**:
  - Rapid development of responsive layouts.
  - Applying consistent colors, spacing, and typography.

### **JavaScript**

- **File**: `src/frontend/script.js`
- **Purpose**:
  Implements dynamic functionality such as interacting with the backend API, handling form submissions, and updating the DOM.
- **Key Tasks**:
  - Sending and receiving data via API endpoints.
  - Validating user input on the client side.
  - Dynamically rendering data in the table or other elements.

### **Frontend Responsibilities**

The frontend is responsible for:

1. **User Interface**:
   - Providing forms, tables, and buttons for managing student achievements.
2. **API Communication**:
   - Sending requests to the backend for data retrieval or updates.
   - Displaying backend responses (e.g., success/error messages) to users.
3. **Interactivity**:
   - Allowing administrators to easily manage records through actions like adding, editing, or deleting student data.

---

## Features

- **CRUD Functionality**:

  - **Create**: Add new student records and achievements.
  - **Read**: View all existing student records.
  - **Update**: Edit information for a specific student.
  - **Delete**: Remove student records from the database.

- **Frontend**:

  - User-friendly interface for administrators.
  - Styling powered by TailwindCSS and custom CSS.

- **Backend**:
  - API-driven operations with Node.js and Express.
  - Modular structure for maintainability and scalability.

---

## Prerequisites

- [Node.js](https://nodejs.org/en/)
- [npm](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/)
- [Tailwind CSS](https://tailwindcss.com/)

## Installation dependencies

```bash
git clone https://github.com/mawapres/mawapres.git
cd '/mawapres/src/backend'
npm install
```

## Usage

```bash
npm start
open http://localhost:3000/index.html
```

## Contributing

Please fork this repo and create a pull request at our GitHub page at https://github.com/your_username/your_repo_name

Thanks
[**@mawapres**](https://github.com/mawapres)
