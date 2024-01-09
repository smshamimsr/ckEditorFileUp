# Ck Editor Upload image

-   If you want to upload photo/image using by ck editor then you can follow my code. upload image no need for my full project. Just needed bellow code.

## Using Process

```bash

```

```bash
  git clone https://github.com/smshamimsr/portfolio.git && cd portfolio
```

2. Install composer dependencies

```bash
  composer install
```

3. Create .env file

```bash
  cp .env.example .env
```

4. Generate key

```bash
  php artisan key:generate
```

5. Install npm dependencies and build

```bash
  npm install && npm run build
```

6. Create database and change the credentials in .env file

7. Run migrations and seed

```bash
  php artisan migrate --seed
```

8. Browse the site and login using below credentials

```
Email: admin@gmail.com
Password: 12345678
```

# TODO

-   [x] Create Admin Panel
-   [ ] Create Blog
-   [ ] Create Pages
-   [ ] Create FAQ
-   [ ] Create Team
-   [ ] Create Contact
-   [ ] Create etc.
