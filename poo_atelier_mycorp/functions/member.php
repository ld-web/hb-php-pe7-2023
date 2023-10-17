<?php

function findMembers(array $members, string $search, ?int $abilityId): array
{
    $result = array_filter($members, function (array $member) use ($search): bool {
        return stripos(getFullName($member), $search) !== false;
    });
    // return array_filter($members, fn (array $member): bool => stripos(getFullName($member), $q) !== false);

    if ($abilityId !== null) {
        $result = array_filter($result, function (array $member) use ($abilityId): bool {
            return in_array($abilityId, $member['abilities']);
        });
    }

    return $result;
}
