<?php

function findMembers(array $members, string $search): array
{
    return array_filter($members, function (array $member) use ($search): bool {
        return stripos(getFullName($member), $search) !== false;
    });
    // return array_filter($members, fn (array $member): bool => stripos(getFullName($member), $q) !== false);
}
