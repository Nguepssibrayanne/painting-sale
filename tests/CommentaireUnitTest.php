<?php

namespace App\Tests;

use App\Entity\Blogpost;
use App\Entity\Commentaire;
use App\Entity\Peinture;
use DateTime;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $commentaire = new Commentaire();
        $datetime = new DateTime();
        $peinture = new Peinture();
        $blogpost = new Blogpost();

        $commentaire->setAuteur('auteur')
                    ->setEmail('email')
                    ->setContenu('contenu')
                    ->setCreatedAt($datetime)
                    ->setPeinture($peinture)
                    ->setBlogpost($blogpost);

        $this->assertTrue($commentaire->getAuteur() ===  'auteur');
        $this->assertTrue($commentaire->getEmail() ===  'email');
        $this->assertTrue($commentaire->getContenu() ===  'contenu');
        $this->assertTrue($commentaire->getCreatedAt() ===  $datetime);
        $this->assertTrue($commentaire->getPeinture() ===  $peinture);
        $this->assertTrue($commentaire->getBlogpost() ===  $blogpost);
    }

    public function testIsFalse()
    {
        $commentaire = new Commentaire();
        $datetime = new DateTime();
        $peinture = new Peinture();
        $blogpost = new Blogpost();

        $commentaire->setAuteur('auteur')
                    ->setEmail('email')
                    ->setContenu('contenu')
                    ->setCreatedAt($datetime)
                    ->setPeinture($peinture)
                    ->setBlogpost($blogpost);

        $this->assertFalse($commentaire->getAuteur() ===  'false');
        $this->assertFalse($commentaire->getEmail() ===  'false');
        $this->assertFalse($commentaire->getContenu() ===  'false');
        $this->assertFalse($commentaire->getCreatedAt() ===  new DateTime());
        $this->assertFalse($commentaire->getPeinture() ===  new Peinture());
        $this->assertFalse($commentaire->getBlogpost() ===  new Blogpost());
    }

    public function testIsEmpty()
    {
        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getCreatedAt());
        $this->assertEmpty($commentaire->getPeinture());
        $this->assertEmpty($commentaire->getBlogpost());
    }
}
