# 📝 Task Reminder

A simple yet powerful **Task Reminder application** built with **Laravel** to help you stay organized and never miss an important task! Set reminders, track your tasks, and boost your productivity all in one place.  

---

## 🚀 Features

- **Login / Authentication:** Secure login system for users. 
- **Add Tasks:** Create tasks with due dates and descriptions.  
- **Task Notifications:** Get notified about upcoming tasks.  
- **Task Filtering:** View tasks by status or due date.  
- **User-Friendly Interface:** Clean, intuitive, and responsive design.  

---

## 🛠 Technology Stack

- **Framework:** Laravel 12  
- **Database:** Mangodb  
- **Frontend:** Blade Templates, Bootstrap / TailwindCSS  
- **Authentication:** Laravel Breeze / Sanctum (optional)  
- **Notifications:** Laravel Mail / Mailtrap  

---

## 💾 Installation

1. **Clone the repository**  

```bash
git clone https://github.com/iamprashantadhikari/Task-Reminder.git
cd task-reminder
```

2. **Install dependencies**  

```bash
composer install
npm install
npm run dev
```

3. **Environment setup**  

```bash
cp .env.example .env
php artisan key:generate
```

4. **Run migrations**  

```bash
php artisan migrate
```

4. **Start the server**  

```bash
php artisan serve
```

## 📬 Notifications (Optional)
To test email notifications locally, you can use Mailtrap:

1. Sign up at Mailtrap

2. Update **.env** with your Mailtrap credentials:

```bash
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=null
```

## ⚡ Usage
1. Add a task with a title, description, and due date.

2. View upcoming tasks in your dashboard.

3. Receive email notifications for pending tasks.

4. Mark tasks as complete when done.


## 🧑‍💻 Contributing

Contributions are welcome!

1. Fork the repository  
2. Create a new branch  

```bash
git checkout -b feature/your-feature
```

3. Commit your changes  

```bash
git commit -m "Add new feature"
```

4. Push to the branch  

```bash
git push origin feature/your-feature
```

5. Open a Pull Request