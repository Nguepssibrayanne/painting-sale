<?php

namespace App\Tests;

use App\Entity\Blogpost;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

class BlogpostUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $blogpost = new Blogpost();
        $datetime = new DateTime();
        $user = new User();

        $blogpost->setTitre('titre')
                 ->setContenu('contenu')
                 ->setSlug('slug')
                 ->setCreatedAt($datetime)
                 ->setUser($user);

        $this->assertTrue($blogpost->getTitre() === 'titre');
        $this->assertTrue($blogpost->getContenu() === 'contenu');
        $this->assertTrue($blogpost->getSlug() === 'slug');
        $this->assertTrue($blogpost->getCreatedAt() ===  $datetime);
        $this->assertTrue($blogpost->getUser() === $user);
    }

    public function testIsFalse()
    {
        $blogpost = new Blogpost();
        $datetime = new DateTime();
        $user = new User();

        $blogpost->setTitre('titre')
                 ->setContenu('contenu')
                 ->setSlug('slug')
                 ->setCreatedAt($datetime)
                 ->setUser($user);

        $this->assertFalse($blogpost->getTitre() === 'false');
        $this->assertFalse($blogpost->getContenu() === 'false');
        $this->assertFalse($blogpost->getSlug() === 'false');
        $this->assertFalse($blogpost->getCreatedAt() === new DateTime());
        $this->assertFalse($blogpost->getUser() === new User());
    }

    public function testIsEmpty()
    {
        $blogpost = new Blogpost();

        $this->assertEmpty($blogpost->getTitre());
        $this->assertEmpty($blogpost->getContenu());
        $this->assertEmpty($blogpost->getSlug());
        $this->assertEmpty($blogpost->getCreatedAt());
        $this->assertEmpty($blogpost->getUser());
    }
}
