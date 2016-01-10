ifeq ($(VIRTUAL_ENV),/home/vagrant/.venv)

all:
	rm results.csv
	${MAKE} results.csv


results.csv:
	PYTHONPATH=. python bin/build-results.py

else

all:
	@echo "PLEASE ACTIVATE YOUR VIRTUAL_ENV!"
	@false

results.csv: all

endif

.PHONY: all
