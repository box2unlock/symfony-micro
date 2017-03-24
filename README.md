Symfony Micro Edition
=====================

Symfony with `MicroKernelTrait`. No annotations or YAML configs - just plain PHP
files everywhere. Ideal for beginners and quick prototyping.

Contains Vagrant image with `Ubuntu 16.04 LTS` and `PostgreSQL 9.5`.

Quickstart
----------

1. `vagrant up`
2. point your browser to: `192.168.10.10`
3. enjoy!

Database credentials
--------------------

`postgresql://postgres:postgres@localhost/symfony`

Enabled bundles
---------------

- `FrameworkBundle`
- `TwigBundle`
- `DoctrineBundle`
- `WebProfilerBundle` (dev only)
- `AppBundle`

Credits
-------

- [Building your own Framework with the MicroKernelTrait](http://symfony.com/doc/current/configuration/micro_kernel_trait.html)
- [New in Symfony 2.8: Symfony as a Microframework](http://symfony.com/blog/new-in-symfony-2-8-symfony-as-a-microframework)
