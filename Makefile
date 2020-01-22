dev development: # Build for development
	@composer install --no-interaction
	@npm install && npm run dev

prod production: # Build for production
	@composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader
	@npm install --no-save && npm run production

update upgrade: # Update application dependencies
	@composer update && npm update && npm install

test: #: Run coding standards/static analysis checks and tests
	@php-cs-fixer fix --diff --dry-run && psalm --show-info=false && phpunit --coverage-text

tunnel: # Expose the application over a secure tunnel
	@ngrok http -host-header=rewrite http://directorylister.local:80
