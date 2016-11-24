# thrift-lib
This repository is the home of thrift library code

Essentially a slimmed down version of https://github.com/getyourguide/fbthrift

The following two directories where replicated:

- https://github.com/getyourguide/fbthrift/tree/master/thrift/lib/php
- https://github.com/getyourguide/fbthrift/tree/master/thrift/lib/py


## Notes

We have included a `TGygSimpleJsonProtocol` implementation adapted from the Apache Thrift SimpleJsonProtocol implementation.

The changes that were made was implementing `writeFloat` and marking `readFloat` as unsupported.

Commit that we extracted from: https://github.com/apache/thrift/tree/84d6af4cf903571319e0ebddd7beb12bc93fb752

This is only in the PHP implementation.

## Generating .deb packages for distribution

Prerequisites:
* install `python-dev-all fakeroot python-stdeb` using `apt-get install`

Build:
* Set the version in `setup.py`
* Run: `python setup.py --command-packages=stdeb.command bdist_deb`

The generated .deb file will be in the `./deb_dist` directory.
