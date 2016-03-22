# thrift-lib
This repository is the home of thrift library code

Essentially a slimmed down version of https://github.com/getyourguide/fbthrift

The following two directories where replicated:

- https://github.com/getyourguide/fbthrift/tree/master/thrift/lib/php
- https://github.com/getyourguide/fbthrift/tree/master/thrift/lib/py

## Generating .deb packages for distribution

Prerequisites:
* install `python-dev-all fakeroot python-stdeb` using `apt-get install`

Build:
* Set the version in `setup.py`
* Run: `python setup.py --command-packages=stdeb.command bdist_deb`

The generated .deb file will be in the `./deb_dist` directory.
