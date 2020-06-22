SHELL := /bin/bash

donothing:
	@echo ""
	@echo "check inside Makefile for commands"
	@echo ""
.PHONY : donothing

ci:
	./vendor/bin/parallel-lint --exclude vendor .
	./vendor/bin/phpcs --standard=./ruleset.xml --extensions=php
	./vendor/bin/psalm
	./vendor/bin/phpunit
.PHONY : ci

phpcs:
	./vendor/bin/phpcs --standard=./ruleset.xml --extensions=php
.PHONY: cs

phpcbf:
	./vendor/bin/phpcbf --standard=./ruleset.xml --extensions=php
.PHONY: cbf
