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

License
=======
Copyright 2017 GetYourGuide

Licensed to the Apache Software Foundation (ASF) under one
or more contributor license agreements. See the NOTICE file
distributed with this work for additional information
regarding copyright ownership. The ASF licenses this file
to you under the Apache License, Version 2.0 (the
"License"); you may not use this file except in compliance
with the License. You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing,
software distributed under the License is distributed on an
"AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
KIND, either express or implied. See the License for the
specific language governing 


Acknowledgments
===============

The supplier-api files are auto-generated using FBThrift available at

  https://github.com/getyourguide/fbthrift
