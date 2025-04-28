# 🚀 URL Shortener

**URL Shortener** is a Laravel application designed to create short URLs, making it easier to share long links in a more practical and clean way.

## ✨ Features

- 🔗 **Short URL Generation**: Convert long URLs into unique short links.
- ⚡ **Livewire Integration**: Dynamic, real-time interface using Laravel Livewire.
- 🖥️ **User-Friendly Interface**: Clean and responsive UI with Blade, Tailwind CSS, and daisyUI.

## 🛠️ Installation

To set up the project locally:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/bryanmoreira/url-shorter.git
   cd url-shorter
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Set Up Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Edit the `.env` file with the correct database and app settings.

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Compile Frontend Assets**
   ```bash
   npm run dev
   ```

6. **Serve the Application**
   ```bash
   php artisan serve
   ```

   Access [http://localhost:8000](http://localhost:8000) in your browser.

## 📄 Usage

1. 🌐 **Create a Short Link**  
   Input the long URL and generate a unique short link.

2. 🔗 **Share the Link**  
   Send the short link to the recipient.

## 🧰 Tech Stack

- 🌐 PHP (Backend Language)
- 🧠 Laravel (PHP Framework)
- ⚡ Laravel Livewire (Reactive Components)
- 🧩 Blade (Templating)
- 🌻 daisyUI (UI Components)
- 🎨 Tailwind CSS (Styling)
- 🗄️ MySQL (Database)
```
