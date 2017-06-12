<?php

namespace AppBundle\Command;

use AppBundle\Entity\ProductData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CsvImportCommand extends Command{

    /**
     * @var EntityManagerInterface
     */
    private $em;



    /**
     * CsvImportCommand constructor.
     *
     * @param EntityManagerInterface $em
     *
     * @throws \Symfony\Component\Console\Exception\LogicException
     */
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();

        $this->em = $em;
    }

    protected function configure()
    {
        $this
            -> setName('test')
            ->setDescription('Import data from csv')
        ;

    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input,$output);

        $io->title('Attempting to import ');

        $product = (new ProductData())
            ->setStrProductCode('asdasdasd')
            ->setStrProductName('asdasdasd')
            ->setStrProductDesc('asdasdas')
        ;

        $this->em->persist($product);

        $this->em->flush();
        $io->success('Data imported');
    }

}


?>
