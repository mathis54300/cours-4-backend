<?php

namespace App\Command;

use App\Entity\Person;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:add-person',
    description: 'Add a short description for your command',
)]
class AddPersonCommand extends Command
{

    private $entityManager;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();

        $this->entityManager = $em;
    }

    protected function configure(): void
    {
        $this
            ->setName('app:add-person')
            ->setDescription('Add a person to the database');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $faker = \Faker\Factory::create();

        $person = new Person();
        $person->setName($faker->name);
        $person->setAge($faker->numberBetween(1, 100));
        $person->setAdresse($faker->address);

        $this->entityManager->persist($person);
        $this->entityManager->flush();

        $output->writeln('Person added');

        return Command::SUCCESS;
    }
}
