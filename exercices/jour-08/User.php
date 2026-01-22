<?php

class User
{
    public function __construct(
        public string $name,
        public string $email,
        public string $registrationDate
    ) {
        if ($registrationDate === null) {
            $registrationDate = date('Y-m-d');
        }
    }

    public function isNewMember()
    {
        $diff = (strtotime(date('Y-m-d')) - strtotime($this->registrationDate)) / (60 * 60 * 24);
        var_dump($diff);
        if ($diff < 30) {
            return 'true';
        }

        return 'false';
    }
}

$user1 = new User('Alex', 'alex@gmail.com', '2024-12-01');
echo $user1->isNewMember();
