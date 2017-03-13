### Local Development Setup Instructions

- `git clone https://github.com/dhruvdutt/feedback-system.git`
- `composer selfupdate && composer install`
- `npm i -g && npm i`
- Create `.env` inside root folder. Copy all contents from `.env.example`
- `php artisan key:generate`
- Run both these parallely in seperate instances => `php artisan` and `npm run watch`
