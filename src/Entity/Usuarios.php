<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Usuarios
 * @ApiResource()
 * @ORM\Table(name="Usuarios")
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FechaCreacion", type="string", length=45, nullable=true)
     */
    private $fechacreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Pwd", type="string", length=45, nullable=false)
     */
    private $pwd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFechacreacion(): ?string
    {
        return $this->fechacreacion;
    }

    public function setFechacreacion(?string $fechacreacion): self
    {
        $this->fechacreacion = $fechacreacion;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }


}
