<?php

namespace dixmod;

use Symfony\Component\Console\{
    Command\Command,
    Input\InputArgument,
    Input\InputInterface,
    Output\OutputInterface
};

class SumCommand extends Command
{
    protected function configure()
    {
        $this->setName('sum')
            ->setDescription('This command sums two numbers for you')
            ->addArgument('a', InputArgument::REQUIRED, 'First number')
            ->addArgument('b', InputArgument::REQUIRED, 'Second number');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $a = $input->getArgument('a');
        $b = $input->getArgument('b');

        $sum = new Sum();
        $res = $sum->sum($a, $b);

        $output->writeln("<info>$res</info>");
    }
}
