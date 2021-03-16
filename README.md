# Sample Inventory Management App

![](https://i.imgur.com/KGyOj2n.png)

- Demo: https://recordit.co/WhcntcYUSq

## Get started

This project uses Laravel Sail for local development with Docker Desktop.

```
cp .env.example .env
./vendor/bin/sail up
./vendor/bin/sail artisan migrate:fresh --seed
npm install && npm run dev
```

Once these commands finish there will be Docker containers for MySQL, Redis and a PHP server. The application runs on port 8080 so will be accessible in the browser at http://localhost:8080/.
