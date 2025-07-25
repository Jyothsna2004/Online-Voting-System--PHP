# Online Voting System

A modern, full-featured online voting system built with PHP and MySQL.
Supports admin, candidate, and voter roles, with a beautiful responsive UI and cloud-ready deployment.

---

## 🚀 Features

- **Admin:** Create/end elections, manage candidates, view results, manage users, analytics dashboard.
- **Candidate:** Register, edit profile, request participation, view results, upload photos and manifestos.
- **Voter:** Register, view all elections, see candidate details, vote, view results after elections close.
- **Responsive UI:** Modern, mobile-friendly design with sticky navigation and animated candidate cards.
- **Cloud Ready:** Easily deploy to Render.com, PlanetScale, or any PHP/MySQL host.

---

🚀 **Live Demo:**

[![Live Site](https://img.shields.io/badge/View-Live-green?style=for-the-badge)](https://www.onlinevoting.infinityfreeapp.com)

---

## 🛠️ Setup (Local)

1. **Clone the repo:**
   ```sh
   git clone https://github.com/yourusername/online-voting-system.git
   cd online-voting-system
   ```

2. **Import the database:**
   - Use `phpMyAdmin` or MySQL CLI to import your `.sql` file into a database (e.g. `voting_system`).

3. **Configure database:**
   - Edit `config/db.php` with your local DB credentials.

4. **Run locally:**
   - Place the folder in your XAMPP/LAMP `htdocs` or `www` directory.
   - Visit `http://localhost/online-voting-system/` in your browser.

---

## 🌐 Deploying to the Cloud

1. **Push your code to GitHub.**
2. **Create a cloud MySQL database** (e.g. [PlanetScale](https://planetscale.com/)).
3. **Deploy to a PHP host** (e.g. [Render.com](https://render.com/docs/deploy-php)).
4. **Set environment variables** for DB connection:
   - `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`
5. **Update file permissions** for `assets/uploads/` (writable).
6. **Enjoy your live voting system!**

---

## 📁 Project Structure

```
online-voting-system/
├── admin/
├── assets/
│   └── css/
├── config/
├── dashboard/
├── election/
├── includes/
├── public/
├── index.php
├── login.php
├── register.php
└── ...
```


## 🙏 Credits

- Developed and customized by Jyothsna
- UI inspired by modern web apps, with original enhancements

---

© 2025 Jyothsna. All rights reserved. This project is an original work and not a direct copy of any other online voting system.
