build: # Install application dependencies
	@composer install && npm install

update upgrade: # Update application dependencies
	@composer update && npm update

test: #: Run coding standards/static analysis checks and tests
	@php-cs-fixer fix --diff --dry-run && psalm --show-info=false && phpunit --coverage-text

tunnel: # Expose the application over a secure tunnel
	@ngrok http -host-header=rewrite http://directorylister.local:80
