# releaser

[![Build Status](https://travis-ci.org/limit-zero/releaser.svg?branch=master)](https://travis-ci.org/limit-zero/releaser)
[![Code Quality](https://img.shields.io/scrutinizer/g/limit-zero/releaser.svg?style=flat)](https://scrutinizer-ci.com/g/limit-zero/releaser/)
[![Code Quality](https://img.shields.io/scrutinizer/coverage/g/limit-zero/releaser/master.svg?style=flat)](https://scrutinizer-ci.com/g/limit-zero/releaser/code-structure/master/code-coverage)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat)](https://packagist.org/packages/limit0/releaser)

releaser is a utility for effortlessly generating release notes for GitHub releases.

## Features

- **Configurable** - Store your releaser configuration on a per-repository basis
- **Customizable** - Build release notes in a standardized manner that matches your project workflow
- **Hackable** - Releaser is 100% OSS: Contributions are always welcome!
- **Efficient** - Uses `git` to retrieve repository history and can support Redis caching for GH API requests

## Installation

Install with composer:
```bash
composer require limit0/releaser
```

Or you can install releaser manually:
```bash
curl -LO https://limit-zero.github.io/releaser/releaser.phar
mv releaser.phar /usr/local/bin/releaser
chmod +x /usr/local/bin/releaser
```

## Quick Start

After installing releaser, you'll need to do some initial configuration. To access the GitHub API, you'll need a [Personal Access Token](https://github.com/settings/tokens/new?description=Releaser%20Tokens) with the `repo` permission.

To configure releaser, execute `releaser[.phar] configure`. You can reconfigure global settings at any time -- these settings are stored in `~/.releaser/settings.json`.

Inside a git project, run `releaser[.phar] configure-project` To walk through project coniguration. A `.releaser.yaml` file will be stored in your project with your settings. Be sure to commit this to ensure your projects release notes are consistant -- it could even be your first release!

Once your project is configured, use `releaser[.phar] releases` to list existing releases. To create a new release, use `releaser[.phar] create`. To preview your release notes instead of creating them, either cancel the `create` process or use `releaser[.phar] preview`.

For detailed usage instructions, please see the [wiki](https://github.com/limit-zero/releaser/wiki)
