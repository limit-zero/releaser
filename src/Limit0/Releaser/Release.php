<?php

namespace Limit0\Releaser;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Release extends Releaser
{
    protected function configure()
    {
        $this
            ->setName('release')
            ->setDescription('Creates a release')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World -- create release');
    }
}
