<?php

namespace Module\Core\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = "user";

    /**
     * Assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'description',
        'email',
        'slug',
        'image'
    ];

    /**
     * Set first name.
     *
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName(string $firstName): User
    {
        $this->attributes['first_name'] = $firstName;

        return $this;
    }

    /**
     * Get first name
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->attributes['first_name'];
    }

    /**
     * Set middle name.
     *
     * @param string $middleName
     *
     * @return $this
     */
    public function setMiddleName(string $middleName): User
    {
        $this->attributes['middle_name'] = $middleName;

        return $this;
    }

    /**
     * Get middle name.
     *
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->attributes['middle_name'];
    }

    /**
     * Set last name.
     *
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName(string $lastName): User
    {
        $this->attributes['last_name'] = $lastName;

        return $this;
    }

    /**
     * Get last name.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->attributes['last_name'];
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription(string $description): User
    {
        $this->attributes['description'] = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(string $email): User
    {
        $this->attributes['email'] = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->attributes['email'];
    }

    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return $this
     */
    public function setSlug(string $slug): User
    {
        $this->attributes['slug'] = $slug;

        return $this;
    }

    /**
     * Get Slug
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->attributes['slug'];
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return $this
     */
    public function setImage(string $image): User
    {
        $this->attributes['image'] = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->attributes['image'];
    }

    /**
     * Get full name
     *
     * @return string
     */
    public function getFullName(): string
    {
        return sprintf(
            '%s %s',
            $this->attributes['first_name'],
            $this->attributes['last_name']
        );
    }
}
