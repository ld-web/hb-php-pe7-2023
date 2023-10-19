<?php

// <option value="$item->getValue()">$item->getLabel()</option>

interface IListItem
{
    public function getValue(): string;
    public function getLabel(): string;
}
