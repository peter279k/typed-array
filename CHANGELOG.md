
# Linna Typed Array Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) 
and this project adheres to [Semantic Versioning](http://semver.org/).

## [v1.0.4](https://github.com/linna/typed-array/compare/v1.0.3...v1.0.4) - 2017-10-26

### Changed
* `Linna\TypedArray` default arguments removed from `parent::__construct()` call
* `Linna\TypedObjectArray` default arguments removed from `parent::__construct()` call

## [v1.0.3](https://github.com/linna/typed-array/compare/v1.0.2...v1.0.3) - 2017-08-24

### Changed
* `Linna\TypedArray` exception messages updated
* `Linna\TypedObjectArray` exception messages updated
* Docblocks updated
* Function call for variable handling refactor

### Fixed
* `CHANGELOG.md` links url

## [v1.0.2](https://github.com/linna/typed-array/compare/v1.0.1...v1.0.2) - 2017-06-24

### Changed
* `Linna\TypedArray->__construct()` for better performance when object is created 

## [v1.0.1](https://github.com/linna/typed-array/compare/v1.0.0...v1.0.1) - 2017-06-11

### Fixed
* `composer.json` wrong autoload directory

## [v1.0.0](https://github.com/linna/typed-array/compare/v1.0.0...master) - 2017-06-07

### Added
* `Linna\TypedArray` for create arrays that accept only values of the user defined type
* `Linna\TypedObjectArray` for create arrays that accept only class instances of the user defined type
