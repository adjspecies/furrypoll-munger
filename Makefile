ifeq ($(VIRTUAL_ENV),/home/vagrant/.venv)

all: results gender-coords

results:
	-rm output/results.csv
	PYTHONPATH=. python bin/build-results.py output

gender-coords:
	-rm output/gid.csv output/gex.csv output/gif.csv
	PYTHONPATH=. python bin/other/gender-graph-data.py output

else

all:
	@echo "PLEASE ACTIVATE YOUR VIRTUAL_ENV!"
	@false

results: all

gender-coords: all

endif

.PHONY: all results gender-coords
