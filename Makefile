ifeq ($(VIRTUAL_ENV),/home/vagrant/.venv)

all: results gender-coords overview

results:
	-rm output/results.csv
	PYTHONPATH=. python bin/build-results.py output

gender-coords:
	-rm output/gid.csv output/gex.csv output/gif.csv
	PYTHONPATH=. python bin/other/gender-graph-data.py output

overview:
	-rm output/overview.json
	python bin/other/generate-overview-json.py output/results.csv > output/overview.json

else

all:
	@echo "PLEASE ACTIVATE YOUR VIRTUAL_ENV!"
	@false

results: all

gender-coords: all

overview: all

endif

.PHONY: all results gender-coords
