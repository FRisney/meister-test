<?php

class Person {
    public function __construct(
        public string $firstName = 'Felipe',
        public string $lastName = 'Risney',
        public string $dob = '2000-06-18',
    ) {}

    public function getAge()
    {
        $d = new DateTime($this->dob);
        $now = new DateTime('now');
        return $d->diff($now)->y;
    }
}
