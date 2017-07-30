VERSION = $(shell cat composer.json | sed -n 's/.*"version": "\([^"]*\)",/\1/p')

SHELL = /usr/bin/env bash

default: install
.PHONY: tag install lint csfixer

version:
	@echo $(VERSION)



install: 
	composer install --no-dev
	chmod 777 temp -R


update_version:
	@echo "Current version is " ${VERSION}
	@echo "Next version is " $(v)
	sed -i s/"$(VERSION)"/"$(v)"/g composer.json
	composer update nothing

tag_and_push:
		git add --all
		git commit -a -m "Tag v $(v) $(m)"
		git tag v$(v)
		git push
		git push --tags

tag: update_version tag_and_push	

lint:
	php -l ./src
	./vendor/bin/phpcs -p -v --colors --no-cache --standard=PSR2 src/**/*.php

csfixer:
	./vendor/bin/php-cs-fixer --dry-run fix ./src --rules=@PSR2