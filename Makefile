SHELL := /bin/bash

donothing:
	@echo ""
	@echo "check inside Makefile for commands"
	@echo ""
.PHONY : donothing

ci:
	./vendor/bin/parallel-lint --exclude vendor .
	./vendor/bin/psalm
	./vendor/bin/phpunit
.PHONY : ci
