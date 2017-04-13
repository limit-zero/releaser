<?php

namespace Releaser;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Create extends Application
{
    protected function configure()
    {
        $this
            ->setName('create')
            ->setDescription('Creates a release')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World -- create release');
    }
}
