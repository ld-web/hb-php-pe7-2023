<?php

// Définition de la classe Product
// Structure générale d'un produit
require_once __DIR__ . '/IListItem.php';

abstract class Product implements IListItem
{
    protected int $id;
    protected string $name;
    protected float $priceVatFree;
    protected int $quantity;
    protected bool $discount;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    // Force les enfants à fournir une définition de la méthode
    abstract public function getSurface(): float;

    public function getValue(): string
    {
        return strval($this->id);
    }

    public function getLabel(): string
    {
        return $this->name;
    }

    /**
     * Gives product's price including given taxes
     *
     * @param float $taxRate Between 0 and 1
     * @return float Full price (including given taxes)
     */
    public function getFullPrice(float $taxRate): float
    {
        if ($taxRate > 0 && $taxRate < 1) {
            return $this->priceVatFree * (1 + $taxRate);
        }

        return $this->priceVatFree;
    }

    public function getName(): string
    {
        return mb_strtoupper($this->name);
    }

    /**
     * Setter
     *
     * @param float $price
     * @return void
     * @throws InvalidArgumentException if price is negative
     */
    public function setPriceVatFree(float $price): void
    {
        if ($price < 0) {
            throw new InvalidArgumentException("Le prix ne peut être négatif");
        }

        $this->priceVatFree = $price;
    }

    /**
     * Get the value of quantity
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of discount
     *
     * @return bool
     */
    public function getDiscount(): bool
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @param bool $discount
     *
     * @return self
     */
    public function setDiscount(bool $discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
