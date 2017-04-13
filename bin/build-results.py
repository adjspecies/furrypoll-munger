import csv
import logging
import sys
import tempfile
import subprocess
import shutil

from results.meta import FIELDNAMES


def main(out_dir):
    # Modules for resetting
    modules = sys.modules.copy()
    def reset_imports():
        logger.info("Resetting imports")
        n = 0
        for k, v in sys.modules.items():
            if k not in modules:
                del sys.modules[k]
                n += 1
        logger.info("Reset {} imports".format(n))

    # Write the results out to the CSV file
    with open(out_dir + '/results.csv', 'w') as csvfile:
        writer = csv.DictWriter(csvfile, fieldnames=FIELDNAMES.keys())
        writer.writeheader()
    logger.info('Beginning dump')

    # This is garbage.
    # MongoEngine appears to leak and won't let us grab both '15 and '16, so we
    # have to run each year separately.
    # Grump grump grump.
    tempdir = tempfile.mkdtemp()
    logger.debug("Working from temporary directory {}".format(tempdir))
    for i in range(2009, 2017):
        if i == 2014:
            continue  # We didn't run a survey this year
        logger.info("Dumping {}".format(i))
        subprocess.call([
            'python',
            'bin/results/results{}.py'.format(i),
            '{}/{}.csv'.format(tempdir, i),
        ])
        logger.debug("Done dumping {}, adding to total".format(i))
        with open(out_dir + '/results.csv', 'a') as csvfile:
            with open("{}/{}.csv".format(tempdir, i), 'r') as year:
                csvfile.write(year.read())
        logger.info("Done with {}".format(i))
    logger.debug("Removing working directory")
    shutil.rmtree(tempdir)
    logger.info('Finished')

logging.basicConfig(
    format='%(asctime)s - %(name)s - %(levelname)s - %(message)s',
    level=logging.INFO)
logger = logging.getLogger(__name__)

if __name__ == '__main__':
    main(sys.argv[1])
