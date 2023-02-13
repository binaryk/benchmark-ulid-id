<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AlphaComments;
use App\Models\AlphaPosts;
use App\Models\AlphaRoles;
use App\Models\AlphaUsers;
use App\Models\BetaComments;
use App\Models\BetaPosts;
use App\Models\BetaRoles;
use App\Models\BetaUsers;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->seeedAlpha();
        $this->seeedBeta();
    }

    private function seeedAlpha()
    {
        $users = AlphaUsers::factory(100)->create();

        AlphaComments::factory(1000)
            ->state([
                'alpha_user_uuid' => fn() => $users->random()->uuid,
            ])
            ->create();

        AlphaPosts::factory(1000)
            ->state([
                'alpha_user_uuid' => fn() => $users->random()->uuid,
            ])
            ->create();

        $roles = AlphaRoles::factory(3)->create();

        $users->each(function (AlphaUsers $user) use ($roles) {
            $user->roles()->attach($roles->random()->uuid);
        });
    }

    private function seeedBeta()
    {
        $users = BetaUsers::factory(100)->create();

        BetaComments::factory(1000)
            ->state([
                'beta_user_id' => fn() => $users->random()->id,
            ])
            ->create();

        BetaPosts::factory(1000)
            ->state([
                'beta_user_id' => fn() => $users->random()->id,
            ])
            ->create();

        $roles = BetaRoles::factory(3)->create();

        $users->each(function (BetaUsers $user) use ($roles) {
            $user->roles()->attach($roles->random()->id);
        });
    }
}
