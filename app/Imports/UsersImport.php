<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            "name" => $row['name'],
            "email" => $row['email'],
            "password" => $row['password_hash'],
            "password_plain" => $row['password_plain'],
            "superadmin" => $row['superadmin'],
            "shop_name" => $row['shop_name'],
            "remember_token" => $row['remember_token'],
            "card_brand" => $row['card_brand'],
            "card_last_four" => $row['card_last_four'],
            "trial_ends_at" => $row['trial_ends_at'],
            "shop_domain" => $row['shop_domain'],
            "is_enabled" => $row['is_enabled'],
            "billing_plan" => $row['billing_plan'],
            "trial_starts_at" => $row['trial_starts_at']
        ]);
    }
}
