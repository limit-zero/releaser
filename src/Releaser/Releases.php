<?php

namespace Releaser;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Releases extends Application
{
    protected function configure()
    {
        $this
            ->setName('releases')
            ->setDescription('Lists available releases')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World -- list releases');
    }
}
