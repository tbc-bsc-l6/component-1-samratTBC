<?php

namespace awe;

class GameProduct extends ShopProduct
{
    private $pegi;

    public function __construct(
        string $id,
        string $console,
        string $firstName,
        string $title,
        float $price,
        int $pegi
    )
    {
        parent::__construct(
            $id,
            $title,
            "", /*passing empty string as we are using parent constructor and
                    wouldn't be using firstname in gameProduct, 
                        as  the view wouldn't contain any firstname field*/
            $console,
            $price
        );
        $this->pegi=$pegi;
    }

    public function getPegi()
    {
        return $this->pegi;
    }
}

?>