# Makefile
install:
	composer install

lint:
	composer run-script phpcs -- --standard=PSR12 --colors src bin