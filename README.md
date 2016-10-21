# Silex Authorization Header Provider
 
[![Build Status](https://travis-ci.org/SilexFriends/Header.svg?branch=master)](https://travis-ci.org/SilexFriends/Header)
[![Code Climate](https://codeclimate.com/github/SilexFriends/Header/badges/gpa.svg)](https://codeclimate.com/github/SilexFriends/Header)
[![Test Coverage](https://codeclimate.com/github/SilexFriends/Header/badges/coverage.svg)](https://codeclimate.com/github/SilexFriends/Header/coverage)
[![Issue Count](https://codeclimate.com/github/SilexFriends/Header/badges/issue_count.svg)](https://codeclimate.com/github/SilexFriends/Header)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/7b8ed0fc-2f5a-4e6f-84fd-030430a3482e/mini.png)](https://insight.sensiolabs.com/projects/7b8ed0fc-2f5a-4e6f-84fd-030430a3482e)
[![Dependency Status](https://www.versioneye.com/user/projects/55ddde652383e9002500006d/badge.svg?style=flat)](https://www.versioneye.com/user/projects/55ddde652383e9002500006d)
[![Codacy Badge](https://api.codacy.com/project/badge/grade/0935f3631b2541519b619f2f136e6c83)](https://www.codacy.com/app/mrprompt/silex-authorization-header-provider)


Get the "Authorization" key from header.

## Install

```
composer require mrprompt/silex-authorization-header-provider
```

## Usage

```
use SilexFriends\Header\Header as HeaderServiceProvider;

$token = $app[HeaderServiceProvider::HTTP_HEADER_GET_TOKEN]($request);

print_r($token);
```

## Testing

Just run *phpunit* without parameters

```
phpunit
```

## License
MIT